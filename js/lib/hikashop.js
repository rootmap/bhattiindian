/**
 * @package    HikaShop for Joomla!
 * @version    2.3.2
 * @author     hikashop.com
 * @copyright  (C) 2010-2014 HIKARI SOFTWARE. All rights reserved.
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
function tableOrdering( order, dir, task ) {
	var form = document.adminForm;

	form.filter_order.value 	= order;
	form.filter_order_Dir.value	= dir;
	submitform( task );
}

function submitform(pressbutton){
	if (pressbutton) {
		document.adminForm.task.value=pressbutton;
	}

	if( typeof(CodeMirror) == 'function'){
		for (x in CodeMirror.instances){
			document.getElementById(x).value = CodeMirror.instances[x].getCode();
		}
	}

	if (typeof document.adminForm.onsubmit == "function") {
		document.adminForm.onsubmit();
	}
	document.adminForm.submit();
	return false;
}

function hikashopCheckChangeForm(type,form)
{
	if(!form)
		return true;
	var varform = document[form];

	if(typeof hikashopFieldsJs != 'undefined' && typeof hikashopFieldsJs['reqFieldsComp'] != 'undefined' && typeof hikashopFieldsJs['reqFieldsComp'][type] != 'undefined' && hikashopFieldsJs['reqFieldsComp'][type].length > 0)
	{
		for(var i =0;i<hikashopFieldsJs['reqFieldsComp'][type].length;i++)
		{
			elementName = 'data['+type+']['+hikashopFieldsJs['reqFieldsComp'][type][i]+']';
			if( typeof varform.elements[elementName]=='undefined'){
				elementName = type+'_'+hikashopFieldsJs['reqFieldsComp'][type][i];
			}
			elementToCheck = varform.elements[elementName];
			elementId = 'hikashop_'+type+'_'+ hikashopFieldsJs['reqFieldsComp'][type][i];
			el = document.getElementById(elementId);

			if(elementToCheck && (typeof el == 'undefined' || el == null || typeof el.style == 'undefined' || el.style.display!='none') && !hikashopCheckField(elementToCheck,type,i,elementName,varform.elements)){
				if(typeof hikashopFieldsJs['entry_id'] == 'undefined')
					return false;

				for(var j =1;j<=hikashop['entry_id'];j++){
					elementName = 'data['+type+'][entry_'+j+']['+hikashopFieldsJs['reqFieldsComp'][type][i]+']';
					elementToCheck = varform.elements[elementName];
					elementId = 'hikashop_'+type+'_'+ hikashopFieldsJs['reqFieldsComp'][type][i] + '_' + j;
					el = document.getElementById(elementId);
					if(elementToCheck && (typeof el == 'undefined' || el == null || typeof el.style == 'undefined' || el.style.display!='none') && !hikashopCheckField(elementToCheck,type,i,elementName,varform.elements)){
						return false;
					}
				}
			}
		}

		if(type=='register'){
			//check the password confirmation field only if we are in selector registration and that the user selected "registration" or "simplified registration", or that the registration is on "all in one page" and that the password confirmation field is there
			var register = document.getElementById('data_register_registration_method0');
			if(!register){
				register = document.getElementById('data[register][registration_method]0');
			}
			var simplified_pwd = document.getElementById('data_register_registration_method3');
			if(!simplified_pwd){
				simplified_pwd = document.getElementById('data[register][registration_method]3');
			}
			if((simplified_pwd && simplified_pwd.checked) || (register && register.checked) || (!simplified_pwd && !register)){
				//check password
				if(typeof varform.elements['data[register][password]'] != 'undefined' && typeof varform.elements['data[register][password2]'] != 'undefined'){
					passwd = varform.elements['data[register][password]'];
					passwd2 = varform.elements['data[register][password2]'];
					if(passwd.value!=passwd2.value){
						alert(hikashopFieldsJs['password_different']);
						return false;
					}
				}
			}

			//check email
			var emailField = varform.elements['data[register][email]'];
			emailField.value = emailField.value.replace(/ /g,"");
			var filter = /^([a-z0-9_'&\.\-\+])+\@(([a-z0-9\-])+\.)+([a-z0-9]{2,10})+$/i;
			if(!emailField || !filter.test(emailField.value)){
				alert(hikashopFieldsJs['valid_email']);
				return false;
			}
		}else if(type=='address' && typeof varform.elements['data[address][address_telephone]'] != 'undefined'){
			var phoneField = varform.elements['data[address][address_telephone]'], filter = /[0-9]+/i;
			if(phoneField){
				phoneField.value = phoneField.value.replace(/ /g,"");
				if(phoneField.value.length > 0 && !filter.test(phoneField.value)){
					alert(hikashopFieldsJs['valid_phone']);
					return false;
				}
			}
		}
	}
	return true;
}

function hikashopCheckField(elementToCheck,type,i,elementName,form){
	if(elementToCheck){
		var isValid = false;
		if(typeof elementToCheck.value != 'undefined'){
			if(elementToCheck.value==' ' && typeof form[elementName+'[]'] != 'undefined'){
				if(form[elementName+'[]'].checked){
					isValid = true;
				}else{
					for(var a=0; a < form[elementName+'[]'].length; a++){
						if(form[elementName+'[]'][a].checked && form[elementName+'[]'][a].value.length>0) isValid = true;
					}
				}
			}else{
				if(elementToCheck.value.length>0) isValid = true;
			}
		}else{
			for(var a=0; a < elementToCheck.length; a++){
				 if(elementToCheck[a].checked && elementToCheck[a].value.length>0) isValid = true;
			}
		}
		//Case for the switcher display, ignore check according to the method selected
		//joomla 3 ids are differents than joomla 1.5...
		var simplified_pwd = document.getElementById('data_register_registration_method3');
		if(!simplified_pwd){
			simplified_pwd = document.getElementById('data[register][registration_method]3');
		}
		var simplified = document.getElementById('data_register_registration_method1');
		if(!simplified){
			simplified = document.getElementById('data[register][registration_method]1');
		}
		var guest = document.getElementById('data_register_registration_method2');
		if(!guest){
			guest = document.getElementById('data[register][registration_method]2');
		}

		if(!isValid && ((simplified && simplified.checked) || (guest && guest.checked) ) && (elementName=='data[register][password]' || elementName=='data[register][password2]')){
			window.Oby.addClass(elementToCheck, 'invalid');
			return true;
		}
		if (!isValid && ( (simplified && simplified.checked) || (guest && guest.checked) || (simplified_pwd && simplified_pwd.checked) ) && (elementName=='data[register][name]' || elementName=='data[register][username]'))
		{
			window.Oby.addClass(elementToCheck, 'invalid');
			return true;
		}
		if(!isValid){
			window.Oby.addClass(elementToCheck, 'invalid');
			alert(hikashopFieldsJs['validFieldsComp'][type][i]);
			return false;
		}else{
			window.Oby.removeClass(elementToCheck, 'invalid');
		}
	}
	return true;
}
(function() {
	function preventDefault() { this.returnValue = false; }
	function stopPropagation() { this.cancelBubble = true; }
	var Oby = {
		version: 20140128,
		ajaxEvents : {},

		hasClass : function(o,n) {
			if(o.className == '' ) return false;
			var reg = new RegExp("(^|\\s+)"+n+"(\\s+|$)");
			return reg.test(o.className);
		},
		addClass : function(o,n) {
			if( !this.hasClass(o,n) ) {
				if( o.className == '' ) {
					o.className = n;
				} else {
					o.className += ' '+n;
				}
			}
		},
		trim : function(s) {
			return (s ? '' + s : '').replace(/^\s*|\s*$/g, '');
		},
		removeClass : function(e, c) {
			var t = this;
			if( t.hasClass(e,c) ) {
				var cn = ' ' + e.className + ' ';
				e.className = t.trim(cn.replace(' '+c+' ',' '));
			}
		},
		addEvent : function(d,e,f) {
			if( d.attachEvent )
				d.attachEvent('on' + e, f);
			else if (d.addEventListener)
				d.addEventListener(e, f, false);
			else
				d['on' + e] = f;
			return f;
		},
		removeEvent : function(d,e,f) {
			try {
				if( d.detachEvent )
					d.detachEvent('on' + e, f);
				else if( d.removeEventListener)
					d.removeEventListener(e, f, false);
				else
					d['on' + e] = null;
			} catch(e) {}
		},
		cancelEvent : function(e) {
			if( !e ) {
				e = window.event;
				if( !e )
					return false;
			}
			if(e.stopPropagation)
				e.stopPropagation();
			else
				 e.cancelBubble = true;
			if( e.preventDefault )
				e.preventDefault();
			else
				e.returnValue = false;
			return false;
		},
		fireEvent : function(d,e) {
			if(document.createEvent) {
				var evt = document.createEvent('HTMLEvents');
				evt.initEvent(e, false, true);
				d.dispatchEvent(evt);
			}
			else
				d.fireEvent("on"+e);
		},
		fireAjax : function(name,params) {
			var t = this, ev;
			if( t.ajaxEvents[name] === undefined )
				return false;
			for(var e in t.ajaxEvents[name]) {
				if( e != '_id' ) {
					ev = t.ajaxEvents[name][e];
					ev(params);
				}
			}
			return true;
		},
		registerAjax : function(name, fct) {
			var t = this;
			if( t.ajaxEvents[name] === undefined )
				t.ajaxEvents[name] = {'_id':0};
			var id = t.ajaxEvents[name]['_id'];
			t.ajaxEvents[name]['_id'] += 1;
			t.ajaxEvents[name][id] = fct;
			return id;
		},
		unregisterAjax : function(name, id) {
			if( t.ajaxEvents[name] === undefined || t.ajaxEvents[name][id] === undefined)
				return false;
			t.ajaxEvents[name][id] = null;
			return true;
		},
		ready: function(fct) {
			var w = window, d = document, t = this;
			if(d.readyState === "complete") {
				fct();
				return;
			}
			var done = false, top = true, root = d.documentElement,
				init = function(e) {
					if(e.type == 'readystatechange' && d.readyState != 'complete') return;
					t.removeEvent((e.type == 'load' ? w : d), e.type, init);
					if(!done && (done = true))
						fct();
				},
				poll = function() {
					try{ root.doScroll('left'); } catch(e){ setTimeout(poll, 50); return; }
					init('poll');
				};
			if(d.createEventObject && root.doScroll) {
				try{ top = !w.frameElement; } catch(e){}
				if(top) poll();
			}
			t.addEvent(d,'DOMContentLoaded',init);
			t.addEvent(d,'readystatechange',init);
			t.addEvent(w,'load',init);
		},
		evalJSON : function(text, secure) {
			if( typeof(text) != "string" || !text.length) return null;
			if( secure && !(/^[,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]*$/).test(text.replace(/\\./g, '@').replace(/"[^"\\\n\r]*"/g, ''))) return null;
			return eval('(' + text + ')');
		},
		getXHR : function() {
			var xhr = null, w = window;
			if(w.XMLHttpRequest || w.ActiveXObject) {
				if(w.ActiveXObject) {
					try {
						xhr = new ActiveXObject("Microsoft.XMLHTTP");
					} catch(e) {}
				} else
					xhr = new w.XMLHttpRequest();
			}
			return xhr;
		},
		xRequest: function(url, options, cb, cbError) {
			var t = this, xhr = t.getXHR();
			if(!options) options = {};
			if(!cb) cb = function(){};
			options.mode = options.mode || 'GET';
			options.update = options.update || false;
			xhr.onreadystatechange = function() {
				if(xhr.readyState == 4) {
					if( xhr.status == 200 || (xhr.status == 0 && xhr.responseText > 0) || !cbError ) {
						if(cb)
							cb(xhr,options.params);
						if(options.update)
							t.updateElem(options.update, xhr.responseText);
					} else {
						cbError(xhr,options.params);
					}
				}
			};
			xhr.open(options.mode, url, true);
			if( options.mode.toUpperCase() == 'POST' ) {
				xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			}
			xhr.send( options.data );
		},
		getFormData : function(target) {
			var d = document, ret = '';
			if( typeof(target) == 'string' )
				target = d.getElementById(target);
			if( target === undefined )
				target = d;
			var typelist = ['input','select','textarea'];
			for(var t in typelist ) {
				t = typelist[t];
				var inputs = target.getElementsByTagName(t);
				for(var i = inputs.length - 1; i >= 0; i--) {
					if( inputs[i].name && !inputs[i].disabled ) {
						var evalue = inputs[i].value, etype = '';
						if( t == 'input' )
							etype = inputs[i].type.toLowerCase();
						if( (etype == 'radio' || etype == 'checkbox') && !inputs[i].checked )
							evalue = null;
						if( (etype != 'file' && etype != 'submit') && evalue != null ) {
							if( ret != '' ) ret += '&';
							ret += encodeURI(inputs[i].name) + '=' + encodeURIComponent(evalue);
						}
					}
				}
			}
			return ret;
		},
		updateElem : function(elem, data) {
			var d = document, scripts = '';
			if( typeof(elem) == 'string' )
				elem = d.getElementById(elem);
			var text = data.replace(/<script[^>]*>([\s\S]*?)<\/script>/gi, function(all, code){
				scripts += code + '\n';
				return '';
			});
			elem.innerHTML = text;
			if( scripts != '' ) {
				var script = d.createElement('script');
				script.setAttribute('type', 'text/javascript');
				script.text = scripts;
				d.head.appendChild(script);
				d.head.removeChild(script);
			}
		}
	};
	if((typeof(window.Oby) == 'undefined') || window.Oby.version < Oby.version) {
		window.Oby = Oby;
		window.obscurelighty = Oby;
	}

	var oldHikaShop = window.hikashop || hikashop;

	var hikashop = {
		submitFct: null,
		submitBox: function(data) {
			var t = this, d = document, w = window;
			if( t.submitFct ) {
				try {
					t.submitFct(data);
				} catch(err) {}
			}
			t.closeBox();
		},
		deleteId: function(id) {
			var t = this, d = document, el = id;
			if( typeof(id) == "string") {
				el = d.getElementById(id);
			}
			if(!el)
				return;
			el.parentNode.removeChild(el);
		},
		dup: function(tplName, htmlblocks, id, extraData, appendTo) {
			var d = document, tplElem = d.getElementById(tplName);
			if(!tplElem) return;
			var container = tplElem.parentNode;
			elem = tplElem.cloneNode(true);
			if(!appendTo) {
				container.insertBefore(elem, tplElem);
			} else {
				if(typeof(appendTo) == "string")
					appendTo = d.getElementById(appendTo);
				appendTo.appendChild(elem);
			}
			elem.style.display = "";
			elem.id = '';
			if(id)
				elem.id = id;
			for(var k in htmlblocks) {
				elem.innerHTML = elem.innerHTML.replace(new RegExp("{"+k+"}","g"), htmlblocks[k]);
				elem.innerHTML = elem.innerHTML.replace(new RegExp("%7B"+k+"%7D","g"), htmlblocks[k]);
			}
			if(extraData) {
				for(var k in extraData) {
					elem.innerHTML = elem.innerHTML.replace(new RegExp('{'+k+'}','g'), extraData[k]);
					elem.innerHTML = elem.innerHTML.replace(new RegExp('%7B'+k+'%7D','g'), extraData[k]);
				}
			}
		},
		deleteRow: function(id) {
			var t = this, d = document, el = id;
			if( typeof(id) == "string") {
				el = d.getElementById(id);
			} else {
				while(el != null && el.tagName.toLowerCase() != 'tr') {
					el = el.parentNode;
				}
			}
			if(!el)
				return;
			var table = el.parentNode;
			table.removeChild(el);
			if( table.tagName.toLowerCase() == 'tbody' )
				table = table.parentNode;
			t.cleanTableRows(table);
			return;
		},
		dupRow: function(tplName, htmlblocks, id, extraData) {
			var d = document, tplLine = d.getElementById(tplName),
					tableUser = tplLine.parentNode;
			if(!tplLine) return;
			trLine = tplLine.cloneNode(true);
			tableUser.appendChild(trLine);
			trLine.style.display = "";
			trLine.id = "";
			if(id)
				trLine.id = id;
			for(var i = tplLine.cells.length - 1; i >= 0; i--) {
				if(trLine.cells[i]) {
					for(var k in htmlblocks) {
						trLine.cells[i].innerHTML = trLine.cells[i].innerHTML.replace(new RegExp("{"+k+"}","g"), htmlblocks[k]);
						trLine.cells[i].innerHTML = trLine.cells[i].innerHTML.replace(new RegExp("%7B"+k+"%7D","g"), htmlblocks[k]);
					}
					if(extraData) {
						for(var k in extraData) {
							trLine.cells[i].innerHTML = trLine.cells[i].innerHTML.replace(new RegExp('{'+k+'}','g'), extraData[k]);
							trLine.cells[i].innerHTML = trLine.cells[i].innerHTML.replace(new RegExp('%7B'+k+'%7D','g'), extraData[k]);
						}
					}
				}
			}
			if(tplLine.className == "row0") tplLine.className = "row1";
			else if(tplLine.className == "row1") tplLine.className = "row0";
		},
		cleanTableRows: function(id) {
			var d = document, el = id;
			if(typeof(id) == "string")
				el = d.getElementById(id);
			if(el == null || el.tagName.toLowerCase() != 'table')
				return;

			var k = 0, c = '', line = null, lines = el.getElementsByTagName('tr');
			for(var i = 0; i < lines.length; i++) {
				line = lines[i];
				if( line.style.display != "none") {
					c = ' '+line.className+' ';
					if( c.indexOf(' row0 ') >= 0 || c.indexOf(' row1 ') >= 0 ) {
						line.className = c.replace(' row'+(1-k)+' ', ' row'+k+' ').replace(/^\s*|\s*$/g, '');
						k = 1 - k;
					}
				}
			}
		},
		checkRow: function(id) {
			var t = this, d = document, el = id;
			if(typeof(id) == "string")
				el = d.getElementById(id);
			if(el == null || el.tagName.toLowerCase() != 'input')
				return;
			if(this.clicked) {
				this.clicked = null;
				t.isChecked(el);
				return;
			}
			el.checked = !el.checked;
			t.isChecked(el);
		},
		isChecked: function(id,cancel) {
			var d = document, el = id;
			if(typeof(id) == "string")
				el = d.getElementById(id);
			if(el == null || el.tagName.toLowerCase() != 'input')
				return;
			if(el.form.boxchecked) {
				if(el.checked)
					el.form.boxchecked.value++;
				else
					el.form.boxchecked.value--;
			}
		},
		checkAll: function(checkbox, stub) {
			stub = stub || 'cb';
			if(checkbox.form) {
				var cb = checkbox.form, c = 0;
				for(var i = 0, n = cb.elements.length; i < n; i++) {
					var e = cb.elements[i];
					if (e.type == checkbox.type) {
						if ((stub && e.id.indexOf(stub) == 0) || !stub) {
							e.checked = checkbox.checked;
							c += (e.checked == true ? 1 : 0);
						}
					}
				}
				if (cb.boxchecked) {
					cb.boxchecked.value = c;
				}
				return true;
			}
			return false;
		},
		submitform: function(task, form, extra) {
			var d = document;
			if(typeof form == 'string') {
				var f = d.getElementById(form);
				if(!f)
					f = d.forms[form];
				if(!f)
					return true;
				form = f;
			}
			if(task) {
				form.task.value = task;
			}
			if(typeof form.onsubmit == 'function')
				form.onsubmit();
			form.submit();
			return false;
		},
		get: function(elem, target) {
			window.Oby.xRequest(elem.getAttribute('href'), {update: target});
			return false;
		},
		form: function(elem, target) {
			var data = window.Oby.getFormData(target);
			window.Oby.xRequest(elem.getAttribute('href'), {update: target, mode: 'POST', data: data});
			return false;
		},
		openBox: function(elem, url, jqmodal) {
			var w = window;
			if(typeof(elem) == "string")
				elem = document.getElementById(elem);
			if(!elem)
				return false;
			try {
				if(jqmodal === undefined) {
					jqmodal = false;
					var test_rel = elem.getAttribute('rel');
					if(test_rel == null && typeof(jQuery) != "undefined")
						jqmodal = true;
				}
				if(!jqmodal && w.SqueezeBox !== undefined) {
					if(url !== undefined && url !== null) {
						elem.href = url;
					}
					if(w.SqueezeBox.open !== undefined)
						SqueezeBox.open(elem, {parse: 'rel'});
					else if(w.SqueezeBox.fromElement !== undefined)
						SqueezeBox.fromElement(elem);
				} else if(typeof(jQuery) != "undefined") {
					var id = elem.getAttribute('id');
					jQuery('#modal-' + id).modal('show');
					if(url) {
						jQuery('#modal-' + id + '-container').find('iframe').attr('src', url);
					}
				}
			} catch(e) {}
			return false;
		},
		closeBox: function(parent) {
			var d = document, w = window;
			if(parent) {
				d = window.parent.document;
				w = window.parent;
			}
			try {
				var e = d.getElementById('sbox-window');
				if(e && typeof(e.close) != "undefined") {
					e.close();
				}else if(typeof(w.jQuery) != "undefined" && w.jQuery('div.modal.in') && w.jQuery('div.modal.in').hasClass('in')){
					w.jQuery('div.modal.in').modal('hide');
				}else if(w.SqueezeBox !== undefined) {
					w.SqueezeBox.close();
				}
			} catch(err) {}
		},
		submitPopup: function(id, task, form) {
			var d = document, t = this, el = d.getElementById('modal-'+id+'-iframe');
			if(el && el.contentWindow.hikashop) {
				if(task === undefined) task = null;
				if(form === undefined) form = 'adminForm';
				el.contentWindow.hikashop.submitform(task, form);
			}
		},
		tabSelect: function(m,c,id) {
			var d = document, sub = null;
			if(typeof m == 'string')
				m = d.getElementById(m);
			if(!m) return;
			if(typeof id == 'string')
				id = d.getElementById(id);
			sub = m.getElementsByTagName('div');
			if(sub) {
				for(var i = sub.length - 1; i >= 0; i--) {
					if(sub[i].getAttribute('class') == c) {
						sub[i].style.display = 'none';
					}
				}
			}
			if(id) id.style.display = '';
		},
		changeState: function(el, id, url) {
			var d = document;
			if(!d.getElementById(id + '_container'))
				return false;
			window.Oby.xRequest(url, null, function(xhr){
				var w = window;
				w.Oby.updateElem(id + '_container', xhr.responseText);
				var defaultVal = '', defaultValInput = d.getElementById(id + '_default_value'), stateSelect = d.getElementById(id);
				if(defaultValInput) { defaultVal = defaultValInput.value; }
				if(stateSelect && w.hikashop.optionValueIndexOf(stateSelect.options, defaultVal) >= 0)
					stateSelect.value = defaultVal;
				if(typeof(jQuery) != "undefined" && jQuery().chosen) { jQuery('#'+id).chosen(); }
				w.Oby.fireAjax('hikashop.stateupdated', {id: id, elem: stateSelect});
			});
		},
		optionValueIndexOf: function(options, value) {
			for(var i = options.length - 1; i >= 0; i--) {
				if(options[i].value == value)
					return i;
			}
			return -1;
		},
		getOffset: function(el) {
			var x = 0, y = 0;
			while(el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop )) {
				x += el.offsetLeft - el.scrollLeft;
				y += el.offsetTop - el.scrollTop;
				el = el.offsetParent;
			}
			return { top: y, left: x };
		},
		dataStore: function(name, value) {
			if(localStorage) {
				localStorage.setItem(name, value);
			} else {
				var expire = new Date(); expire.setDate(expire.getDate() + 5);
				document.cookie = name+"="+value+"; expires="+expire;
			}
		},
		dataGet: function(name) {
			if(localStorage) {
				return localStorage.getItem(name);
			}
			if(document.cookie.length > 0 && document.cookie.indexOf(name+"=") != -1) {
				var s = name+"=", o = document.cookie.indexOf(s) + s.length, e = document.cookie.indexOf(";",o);
				if(e == -1) e = document.cookie.length;
				return unescape(document.cookie.substring(o, e));
			}
			return null;
		},
		setArrayDisplay: function(fields, displayValue) {
			var d = document, e = null;
			if(displayValue === true) displayValue = '';
			if(displayValue === false) displayValue = 'none';
			for(var i = 0; i < fields.length; i++) {
				e = d.getElementById(fields[i]);
				if(e) e.style.display = displayValue;
			}
		},
		ready: function(fct) {
			var w = window, d = w.document;
			if(d.readyState === "complete") {
				fct();
				return;
			}
			if(w.jQuery !== undefined) {
				jQuery(d).ready(fct);
			} else if(window.addEvent) {
				w.addEvent("domready", fct);
			} else
				w.Oby.ready(fct);
		},
		noChzn: function() {
			if(!window.jQuery)
				return false;
			jQuery('.no-chzn').each(function(i,el) {
				var id = el.getAttribute('id');
				id = id.replace('{','_').replace('}','_');
				var chzn = jQuery('#'+id+'_chzn');
				if(chzn) chzn.remove();
				jQuery(el).removeClass('chzn-done').show();
			});
			return true;
		}
	};
	window.hikashop = hikashop;

	if(oldHikaShop && oldHikaShop instanceof Object) {
		for (var attr in oldHikaShop) {
			if (obj.hasOwnProperty(attr) && !window.hikashop.hasOwnProperty(attr))
				window.hikashop[attr] = obj[attr];
		}
	}

	var nameboxes = {
		simpleSearch: function(id, el) {
			var d = document, s = d.getElementById(id+"_span");
			if(typeof(el) == "string")
				el = d.getElementById(el);
			s.innerHTML = el.value;
			window.oTrees[id].search(el.value);
			el.style.width = s.offsetWidth + 30 + "px";
		},
		advSearch: function(id, el, url, keyword, min) {
			var d = document, s = d.getElementById(id+"_span");
			s.innerHTML = el.value;
			if(el.value.length < min) {
				if(!window['orign_data_'+id]) {
					window.oTrees[id].lNodes = [];
					window.oTrees[id].lNodes[0] = new window.oNode(0,-1);
					window.oTrees[id].load(window['data_'+id]);
					window.oTrees[id].render();
					window['orign_data_'+id] = true;
				}
				window.oTrees[id].search(el.value);
			} else {
				window.Oby.xRequest(
					url.replace(keyword, el.value),
					null,
					function(xhr,params) {
						window['orign_data_'+id] = false;
						window.oTrees[id].lNodes = [];
						window.oTrees[id].lNodes[0] = new window.oNode(0,-1);
						var json = window.Oby.evalJSON(xhr.responseText);
						window.oTrees[id].load(json);
						window.oTrees[id].render();
					},
					function(xhr, params) { }
				);
			}
			el.style.width = s.offsetWidth + 30 + "px";
		},
		focus: function(id, el) {
			var d = document, c = d.getElementById(id); e = d.getElementById(id+"_otree");
			if(typeof(el) == "string")
				el = d.getElementById(el);
			el.focus();
			window.oTrees[id].search(el.value);
			if(e) {
				e.style.display = "";
				var f = function(evt) {
					var e = d.getElementById(id+"_otree");
					if (!evt) var evt = window.event;
					var trg = (window.event) ? evt.srcElement : evt.target;
					while(trg != null) {
						if(trg == el || trg == e || trg == c)
							return;
						trg = trg.parentNode;
					}
					e.style.display = "none";
					window.Oby.removeEvent(document, "mousedown", f);
				};
				window.Oby.addEvent(document, "mousedown", f);
			}
		},
		clean: function(id, el, text) {
			var d = document, s = d.getElementById(id+"_valuetext"), h = d.getElementById(id+'_valuehidden');
			s.innerHTML = text;
			h.value = '';
			window.Oby.cancelEvent();
		},
		callbackFct: function(t,url,keyword,tree,node,ev) {
			var o = window.Oby, n = null;
			o.xRequest(
				url.replace(keyword, node.value),
				null,
				function(xhr,params) {
					var json = o.evalJSON(xhr.responseText);
					if(json.length > 0) {
						var s = json.length;
						for(var i = 0; i < s; i++) {
							n = json[i];
							t.add(node.id, n.status, n.name, n.value, n.url, n.icon);
						}
						t.update(node);
						if(t.selectOnOpen) {
							var n = t.find(t.selectOnOpen);
							if(n) { t.sel(n); }
							t.selectOnOpen = null;
						}
					} else {
						t.emptyDirectory(node);
					}
				},
				function(xhr, params) {
					t.add(node.id, 0, "error");
					t.update(node);
				}
			);
			return false;
		}
	};
	window.nameboxes = nameboxes;
})();

if(window.jQuery && typeof(jQuery.noConflict) == "function" && !window.hkjQuery) {
	window.hkjQuery = jQuery.noConflict();
}
