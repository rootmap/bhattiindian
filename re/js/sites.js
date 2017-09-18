/*******************************************
 @author : bastikikang 
 @author email: basti@codemywebapps.com
 @author website : http://codemywebapps.com
 *******************************************/

function busy(e)
{
    if (e) {
        $('body').css('cursor', 'wait');
    } else
        $('body').css('cursor', 'auto');

    if (e) {
        $.fancybox.showLoading();
    } else
        $.fancybox.hideLoading();
}

function scroll(id) {
    if ($('#' + id).is(':visible')) {
        $('html,body').animate({scrollTop: $("#" + id).offset().top - 100}, 'slow');
    }
}

function scroll_class(id) {
    if ($('.' + id).is(':visible')) {
        $('html,body').animate({scrollTop: $("." + id).offset().top - 180}, 'slow');
    }
}

function toogle(id, bool, caption)
{
    $('#' + id).attr("disabled", bool);
    $("#" + id).val(caption);
}

function rm_notices()
{
    $(".success").remove();
    $(".error").remove();
}

function clear_elements(ele) {
    $("#" + ele).find(':input').each(function () {
        switch (this.type) {
            case 'password':
            case 'select-multiple':
            case 'select-one':
            case 'text':
            case 'textarea':
                $(this).val('');
                break;
            case 'checkbox':
            case 'radio':
                this.checked = false;

        }
    });

    $(".preview").remove();
}

var jtitle = "Notification";

jQuery(document).ready(function () {
    $ = jQuery.noConflict();
	
    $(document).on("click", ".add_addon", function () {
        var allowed_ordering = $("#allowed_ordering").val();
        if (allowed_ordering == 2) {
            return;
        }
        busy(true);

        var html = '';
        var cart = $('.extra_wrap');
        var imgtodrag = $(this).parent('.item').find("img").eq(0);
        if (jQuery.isEmptyObject(imgtodrag) || imgtodrag.length === 0) {
            var imgtodrag = $(this);
        }
        var subcat = $(this).attr("subcat");
        var addon_name = $(this).attr("addonname");
        var addon_id = $(this).attr("addonid");
        var addon_price = $(this).attr("price");
        var subcat_key = $(this).attr("subcat_key");
        var current_id = $(this).attr("rel");

        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                    .offset({
                        top: imgtodrag.offset().top,
                        left: imgtodrag.offset().left
                    })
                    .css({
                        'opacity': '0.5',
                        'position': 'absolute',
                        'height': '150px',
                        'width': '150px',
                        'z-index': '100'
                    })
                    .appendTo($('body'))
                    .animate({
                        'top': cart.offset().top + 10,
                        'left': cart.offset().left + 10,
                        'width': 75,
                        'height': 75
                    }, 1000, 'easeInOutExpo');

            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                'height': 0
            }, function () {
                $(this).detach()
                //t=$(".extra_wrap").find("."+subcat);                
                busy(false);
                t = $(".extra_wrap").find("." + current_id);
                $(".info").show();
                $(".info").removeClass('hidden');
                if (t.length) {
                    /*$("."+subcat).append("<li addon_id=\""+addon_id+"\" price=\""+
                     addon_price+"\" subcat_key=\""+subcat_key+"\" ><a href=\"javascript:;\" class=\"added_addon\" ><i class=\"added_addon_rm fa fa-trash-o\"></i>"+
                     addon_name+"</a></li>");*/
                    $("." + current_id).append("<li addon_id=\"" + addon_id + "\" price=\"" +
                            addon_price + "\" subcat_key=\"" + subcat_key + "\" ><a href=\"javascript:;\" class=\"added_addon\" ><i class=\"added_addon_rm fa fa-trash-o\"></i>" +
                            addon_name + "</a></li>");
                } else {
                    //html="<ul class=\""+subcat+"\"><p>"+subcat+ 
                    html = "<ul class=\"" + subcat + " " + current_id + "\"><p>" + subcat +
                            ":</p><li addon_id=\"" + addon_id + "\" price=\"" + addon_price + "\" subcat_key=\"" + subcat_key + "\" ><a  href=\"javascript:;\" class=\"added_addon\" ><i class=\"added_addon_rm fa fa-trash-o\"></i>" + addon_name +
                            "</a></li>" + "</ul>";
                    $(".extra_wrap").append(html);
                }
            });
        }
    });


    $(document).delegate("a.added_addon", "click", function () {
        var item = $(this).parent('li');
        jConfirm(js_lang.RMitem, jtitle, function (r) {
            if (r) {
                item.remove();
                remove_addonitem();
            }
        });
    });


    //$( ".qty_add" ).click(function() {     	
    $(document).on("click", ".qty_add", function () {
        qty = parseFloat($(this).closest(".form-group").find("#qty").val()) + 1;
//        console.debug(qty);
        if (isNaN(qty)) {
            qty = 1;
        }
        $(this).closest(".form-group").find("#qty").val(qty);
    });

    //$( ".qty_minus" ).click(function() {     	
    $(document).on("click", ".qty_minus", function () {
        var qty = $(this).closest(".form-group").find("#qty").val() - 1;
        if (qty <= 0) {
            qty = 1;
        }
        $(this).closest(".form-group").find("#qty").val(qty);
    });


    //$( ".addtocart" ).click(function(e) {     	
    $(this).on("click", ".addtocart", function (e) {
        e.preventDefault();
        $this = $(this);

        //var form = $(this).parents('form:first');
        var form = $this.closest("form").attr('id');
        $this.closest("td").find('.price input[type="radio"]').attr('checked', 'checked');
        var checked = $(this).closest("form").find(".price input:checked").length;
//        var checked = $(".price input:checked").length;
        if (isNaN($(this).closest("form").find("#qty").val())) {
            //jAlert("Invalid Quantity",jtitle);
            $.UIkit.notify({
                message: js_lang.InvalidQuantity,
                timeout: 5000
            });
            return;
        }

        if ($(this).closest("form").find("#qty").val() == "") {
            //jAlert("Invalid Quantity",jtitle);
            $.UIkit.notify({
                message: js_lang.InvalidQuantity,
                timeout: 5000
            });
            return;
        }



        if (checked >= 1) {

            /*if ( $(this).html()=="Add to cart" ){
             add_to_cart_effect();
             }    		
             if ( $(this).html()=="Update cart" ){
             add_to_cart_effect();
             }*/
            if ($(this).closest("form").find(".cooking_ref").is(":visible")) {
                //if (typeof $("#cooking_ref:checked").val() === "undefined") {	       	   
                if ($(this).closest("form").find(".cooking_ref:checked").length <= 0) {
                    $.UIkit.notify({
                        message: js_lang.cookingRef,
                        timeout: 5000
                    });
                    return;
                } else {
                    $("#product-view-dialog").dialog("close");
                    add_to_cart_effect(form, $this);

                }
            } else {
                $("#product-view-dialog").dialog("close");
                add_to_cart_effect(form, $this);

            }

        } else {
            //jAlert("Please Select item size",jtitle);
            $.UIkit.notify({
                message: js_lang.itemSize, //"Please Select item size",
                timeout: 5000
            });
        }
    });

    $(document).on("click", ".cart_handle", function (e) {
        e.preventDefault();

        $(".cart_empty").remove();
        $(".cart_details_wrap").slideToggle("fast");
        var l = $(".cart_details_wrap ul li").length;
        if (l <= 0) {
            $(".cart_empty").remove();
            $(".cart_details_wrap").append("<span class=\"cart_empty alert alert-warning\">" + js_lang.cartEmpty + ".</span>");
            $(".cart_input_block").hide();
            $(".apply_voucher_code").hide();
            $(".apply_remove_voucher").hide();
        }
    });


    if (!isNaN($(".price input:checked").attr("price"))) {
        $("#item_price").val($(".price input:checked").attr("price"));
    }

    //$( ".item_size" ).click(function() {   
    $(document).on("click", ".item_size", function () {

        var price = $(this).attr("price");
        if (!isNaN(price)) {
            $(this).closest("form").find("#item_price").val(price);
//            $("#item_price").val(price);
        }
    });


    /*Addon remove*/
    $(document).on('click', '.item_remove', function () {
        var row = $(this).attr("rev");
        jConfirm(js_lang.areYouSure + '?', jtitle, function (r) {
            if (r) {
                remove_addonitem_ajax(row);
            }
        });
    });
    /*product update*/
    $(document).on('click', '.product-item-update', function (e) {
        e.preventDefault();
        var item_id = $(this).attr("id");
        var item_row = $(this).attr("row");
        var cat_id = $(this).attr("cat-id");
        var per_qty_price = $(this).attr("per-quantity-price");
        console.log(per_qty_price);
        $.ajax(
                {
                    type: "POST",
                    url: $(this).attr('href'),
                    data: {item_id: item_id, item_row: item_row, per_qty_price: per_qty_price, cat_id: cat_id},
                    cache: false,
                    update: '#product-view',
                    beforeSend: function () {
                        $('#loader').show();
                    },
                    complete: function () {
                        $("#loader").hide();
                    },
                    success: function (data)
                    {
                        //$("#product-view").html(data);
                        //$("#dialog-form").load(data).dialog({modal: true}).dialog('open');
                        $("#product-view").html(data);
                        $("#product-view-dialog").dialog("open");
                        $('#loader').hide();

                    }

                });
//        jConfirm(js_lang.areYouSure + '?', jtitle, function (r) {
//            if (r) {
//                remove_addonitem_ajax(row);
//            }
//        });
    });

    $(document).on('click', '.btn_close_order', function () {
        $(".cart_details_wrap").slideToggle("fast");
    });

    jQuery('#qty').keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g, '');
    });

    $(document).on('click', '.btn_close_order', function () {
        if ($("#store_min_order").val() != "") {
            var min_total_order = parseFloat($(".min_total_order").html());
            var store_min_order = parseFloat($("#store_min_order").val());
            //console.debug(store_min_order);
            //console.debug(min_total_order);    	    
            if (store_min_order > min_total_order) {
                $.UIkit.notify({
                    message: js_lang.minOrderMsg + " " + $("#store_cuurency_code").val() + " " + $("#store_min_order").val(),
                    timeout: 5000
                });
                return;
            }
        }
        var disabled_checkout = $("#disabled_checkout").val();
//        console.debug(disabled_checkout);
        if (disabled_checkout == 1) {
            window.location.replace(sites_url + "/store/cashondeliver/?trans_type=carryout");
        } else {
            $('.checkout').modal('show');
        }
    });
    $(document).on('click', 'body', function (e) {
        var $target = $(e.target);
        if ($(e.target).parents(".cart_details_wrap").length == 0) {
            if ($target.attr("class") == "cart") {
            } else {
                $(".cart_details_wrap").slideUp("fast");
            }
        }

        if ($(e.target).parents(".wish_list_wrap").length == 0) {
            if ($target.attr("class") == "favorites") {
            } else {
                $(".wish_list_wrap").slideUp("fast");
            }
        }

    });

    $("#frm_login").submit(function (event) {
        event.preventDefault();
        login();
    });

    $(document).on('click', '.social', function (e) {
        social_popup($(this).attr("rel"));
        ev.preventDefault();
        return;
    });


    /** ADD TO WISHLIST */
    $(".add_fav").click(function () {
        add_to_wishlist_event($(this).attr("rev"));
    });
    /*END WISHLIST*/


    $(".favorites").click(function () {
        $(".cart_empty").remove();
        $(".wish_list_wrap").slideToggle("fast");
        var l = $(".wish_list_wrap a").length;
        if (l <= 0) {
            $(".cart_empty").remove();
            $(".wish_list_wrap").append("<span class=\"cart_empty alert alert-warning\">" + js_lang.wishistEmpty + ".</span>");
        }
    });

    $(document).on('click', '.wishlist_remove', function (ev) {
        var id = $(this).attr("rev");
        jConfirm(js_lang.rmItemWishList, jtitle, function (r) {
            if (r) {
                remove_wishtlist(id);
            }
        });
        ev.preventDefault();
    });

    /*AUTO LOAD*/
    load_cart_item();
    load_wishlist_item();

    $(document).on('click', '#delivery_asap', function (ev) {
        console.debug($(this).val());
        if ($(this).val() == 1) {
            $(".delivery_date").attr("disabled", false);
        } else {
            $(".delivery_date").attr("disabled", true);
        }
    });

    $(".delivery_date").attr("disabled", true);

    $(document).on("change", '.restaurant-branch', function () {

        var val = $(this).val().toLowerCase();
        var mail = $('option:selected', this).attr('mail');
        console.log(val);
//        console.log(mail);
        if (val != "")
            $(".delivery-type").show();
        else
            $(".delivery-type").hide();
        var deliveryurl = sites_url + "/store/delivery/branch/" + val + "/mail/" + mail;
        var collectionurl = sites_url + "/store/carryout/branch/" + val + "/mail/" + mail;
        var dineinurl = sites_url + "/store/dinein/branch/" + val + "/mail/" + mail;
        $(".delivery-url").attr('href', deliveryurl);
        $(".collection-url").attr('href', collectionurl);
        $(".dinein-url").attr('href', dineinurl);

    });

    $(document).on("click", '#checkout', function () {
        var grand_total = $(".orderprice").attr("val");
        var min_order = $(".min_order_now_btn").attr("val");
        if (parseFloat(grand_total) < parseFloat(min_order)) {
            $.UIkit.notify({
                message: js_lang.minOrderMsg + " " + $("#store_cuurency_code").val() + " " + min_order,
                timeout: 20000
            });
            $('.modal.checkout').modal('hide');
            return false;
        } else {
            $('.modal.checkout').modal('show');
        }
    });
});
/*END DOC READY*/

function remove_addonitem()
{
    $('.extra_wrap').each(function () {
        $(this).find('ul').each(function () {
            var current = $(this);
            if ($(this).find("li").length <= 0) {
                $(this).remove();
            }
        });
    });

    ////////console.debug( $(".extra_wrap").find("ul").length );
    if ($(".extra_wrap").find("ul").length <= 0) {
        $(".extra_wrap .info").hide();
    }
}

jQuery.validate({
    language: myLanguage,
    form: '#frm_item',
    //modules : 'security',
    onError: function () {
    },
    onSuccess: function () {
        add_to_cart();
        return false;
    }
});


function add_to_cart(form, $this)
{
    if ($this.closest("form").find(".cart_item").html() == "") {
        $this.closest("form").find(".cart_item").html("0");
    }
    $this.closest("form").find(".cart_item").html(parseFloat($(".cart_item").html()) + 1);
    $this.closest("form").find(".cart_item").show();

    var array = [];

    $this.closest("form").find('.extra_wrap').each(function () {
        $(this).find('ul').each(function () {
            $(this).find('li').each(function () {
                var li = $(this);
                /*array.push({
                 addon_id: li.attr("addon_id"),
                 price: li.attr("price")	
                 });*/
                array.push({
                    subcat_id: li.attr("subcat_key"),
                    item: [{
                            addon_id: li.attr("addon_id"),
                            price: li.attr("price")
                        }]
                });
            });
        });
    });

    ////////console.debug(array);
    var jsonString = JSON.stringify(array);
    /*//////console.debug(jsonString);
     return;*/

    var cooking_ref = '';
    if ($this.closest("form").find("#cooking_ref").is(":visible")) {
        cooking_ref = "&cooking_ref=" + $(".cooking_ref:checked").val();
    }

    var params = $("#" + form).serialize() + "&addon=" + jsonString + cooking_ref;
//    console.debug(params);

    if ($(".pop-wrap").is(":visible")) {
        $.fancybox.close();
    }

    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {

            if (data.code == 1) {
                $this.closest("form").find(".addtocart").removeClass("btn_busy");
                $this.closest("form").find(".addtocart").removeClass("btn-success").addClass("btn-primary");
//                $this.closest("form").find(".addtocart").html(js_lang.addToCart);
                load_cart_item();
            } else {
                //jAlert(data.msg,jTitle);
                $.UIkit.notify({
                    message: data.msg,
                    timeout: 5000
                });
            }
        },
        error: function () {
            $this.closest("form").find(".addtocart").removeClass("btn-success").addClass("btn-primary");
            $this.closest("form").find(".addtocart").removeClass("btn_busy");
        }
    });
}

function add_to_cart_effect(form, $this)
{
    //console.log($this);
//    $(".addtocart").html(js_lang.processing);
//    $(".addtocart").addClass("btn_busy");

    $this.closest("form").find(".addtocart").removeClass("btn-success").addClass("btn-primary");
    $this.closest("form").find(".addtocart").addClass("btn_busy");

    busy(true);
    //$.browser.width = $(window).width();
	var device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
    var browser_width = window.innerWidth;
    console.log("device: "+device+" width "+browser_width);
    
	var html = '';
    if (device==true && browser_width < 800) {
        var cart = $('.mob-cart-animated');
		console.log("M");
    }else{
        var cart = $('.web-cart-animated');
		console.log("W");
    }
    var imgtodrag = $("#" + form + " .item_photo").find("img:first");
    if (jQuery.isEmptyObject(imgtodrag) || imgtodrag.length === 0) {
        var imgtodrag = $("#" + form + " .item_description");
    }

    imgtodrag.css({"z-index": "99999", "position": "relative"});

    if (imgtodrag) {
        var imgclone = imgtodrag.clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left
                })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

        setTimeout(function () {
            cart.effect("shake", {
                times: 2
            }, 200);
        }, 1500);

        imgclone.animate({
            'width': 0,
            'height': 0
        }, function () {
            $(this).detach();
            busy(false);
            add_to_cart(form, $this);
        });
    }
}

function load_cart_item()
{

    $(".cart").append('<i style="color:#E57871;" class="fa fa-spinner fa-spin"></i>');
    //var params={"action":"loadCartItem"};
    var params = "action=loadCartItem";
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            $(".cart i.fa").remove();
            if (data.code == 1) {
                $(".cart_item").show();
                $(".cart_input_block").show();
                $(".cart_item").html(data.details.item);
                //$(".cart_item").effect("shake", {times: 2}, 200);
                $(".cart_details_wrap .display-cart-item").html(data.details.html);
                $(".cartlist").html(data.details.html);
                /*cart page*/
                $(".cart_list_page").html(data.details.html);
                $(".apply_voucher_code").show();
                $(".apply_voucher_code").removeClass("hide");

            } else {
                $(".cart_item").html('');
                $(".cart_item").hide();
                $(".cart_details_wrap ul li").remove();
                $(".cart_details_wrap .display-cart-item").html('');
                $(".cartlist ul li").remove();
                $(".cartlist").html('');
                $(".cart_input_block").hide();
                $(".apply_voucher_code").hide();
                //$(".cart_details_wrap").slideToggle("fast");
            }
        },
        error: function () {
            $(".cart i.fa").remove();
        }
    });
}

function remove_addonitem_ajax(row)
{
    //var params={"action":"remove_addonitem_ajax","row":row};
    var params = "action=removeAddonitemAjax&row=" + row;
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            if (data.code == 1) {
                load_cart_item();
            }
        },
        error: function () {
        }
    });
}

jQuery.validate({
    language: myLanguage,
    form: '#frm_delivery',
    onError: function () {
    },
    onSuccess: function () {
        register_user();
        return false;
    }
});

jQuery.validate({
    language: myLanguage,
    form: '#frm_signup',
    onError: function (error, element) {
        console.log("error: " + error.toString());
        console.log("element: " + element);
    },
    showErrors: function (errorMap, errorList) {
        console.log("errorMap: " + errorMap);
    },
    errorPlacement: function (error, element) {
        console.log("error: " + error);
        return true;
    },
    onSuccess: function () {
        register_user();
        return false;
    }
});

jQuery.validate({
    language: myLanguage,
    form: '.forms',
    onError: function () {
    },
    onSuccess: function () {
        form_submit();
        return false;
    }
});


jQuery.validate({
    language: myLanguage,
    form: '#frm_add_card',
    onError: function () {
    },
    onSuccess: function () {
        form_submit2('frm_add_card');
        return false;
    }
});

jQuery.validate({
    language: myLanguage,
    form: '#frm_offline_payment',
    onError: function () {
    },
    onSuccess: function () {
        form_submit2('frm_offline_payment');
        return false;
    }
});

function register_user()
{
    button = $('.form input[type="submit"]');
    caption = button.val();
    toogle(button.attr("id"), true, js_lang.processing);
    var params = $(".form").serialize();
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            toogle(button.attr("id"), false, caption);
            if (data.code == 1) {
                ////console.debug( $("#trans_type").val() );
                console.debug(data);
                if (($("#trans_type").val() == "signUp") || (data.sign_flag == 1)) {
//                    window.location.href = sites_url + "/store/";
                    $.UIkit.notify({
                        message: data.msg,
                        timeout: 5000
                    });
                    /*if ($("#referer").val() == "") {
                     window.location.href = sites_url + "/store/";
                     } else {
                     window.location.href = $("#referer").val();
                     }*/
                }else if (($("#trans_type").val() == "delivery") || (data.msg == 'Delivery information has been saved.')) {
                    $.UIkit.notify({
                        message: data.msg,
                        timeout: 5000
                    });
                    $('.pop_login').modal('show');
                }else {
                    //if ( $("#trans_type").is(":visible") ) {
                    if ($("#trans_type").length >= 1) {
                        $("#mod_payment_cod").attr("href", $("#mod_payment_cod").attr("href") + "/?trans_type=" + $("#trans_type").val());
                        $("#mod_payment_paypal").attr("href", $("#mod_payment_paypal").attr("href") + "/?trans_type=" + $("#trans_type").val());

                        $("#mod_payment_offline").attr("href", $("#mod_payment_offline").attr("href") + "/?trans_type=" + $("#trans_type").val());
                    }
//                    console.log($("#trans_type").length);
                    $('.pop_mode_of_payment').modal('show');
                    $('.pop_login').modal('hide');
                    /*if ($("#payment_enabled").val()=="1"){
                     toogle(button.attr("id"),true,"transferring you to paypal");
                     window.location.href=sites_url+"/store/paypal/?order_id="+data.details;        				
                     } else {
                     window.location.href=sites_url+"/store/receipt/?order_id="+data.details;	
                     }        		   */
                }
            } else {
                //jAlert(data.msg,jtitle);
                $(".form").before("<div class=\"uk-alert uk-alert-danger\"><i class=\"fa fa-times-circle-o\"></i> " +
                        data.msg + "</div>").fadeIn();
                setTimeout(function () {
                    $(".uk-alert").fadeOut();
                }, 1800);
            }
        },
        error: function () {
            toogle(button.attr("id"), false, caption);
            //jAlert("Something went wrong.",jtitle);
            $.UIkit.notify({
                message: js_lang.errorMsg1,
                timeout: 5000,
                status: "warning"
            });
        }
    });
}

function login()
{
    button = $('#frm_login input[type="submit"]');
    caption = button.val();
    toogle(button.attr("id"), true, js_lang.processing);
    var params = $("#frm_login").serialize();
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            location.reload(true);
            toogle(button.attr("id"), false, caption);
            if (data.code == 1) {
                /*if ($("#trans_type").val() == "delivery") {
                 window.location.href = sites_url + "/store/delivery";
                 } else if ($("#trans_type").val() == "carryout") {
                 
                 //if ( $("#trans_type").is(":visible") ) {
                 if ($("#trans_type").length >= 1) {
                 $("#mod_payment_cod").attr("href", $("#mod_payment_cod").attr("href") + "/?trans_type=" + $("#trans_type").val());
                 $("#mod_payment_paypal").attr("href", $("#mod_payment_paypal").attr("href") + "/?trans_type=" + $("#trans_type").val());
                 
                 $("#mod_payment_offline").attr("href", $("#mod_payment_offline").attr("href") + "/?trans_type=" + $("#trans_type").val());
                 }
                 $('.pop_mode_of_payment').modal('show');
                 $('.pop_login').modal('hide');
                 
                 //window.location.href=sites_url+"/store/carryout"; 
                 } else */
                if ($("#trans_type").val() == "add_wishlist") {
                    $(".pop_login").modal('hide');
                    add_to_wishlist_event($(".add_fav").attr("rev"));
                    $(".glyphicon-user").show();
                    $(".glyphicon-log-out").show();
                    $(".glyphicon-log-in").hide();
                } else {
                    var current_url = $(location).attr('href');
                    if (current_url == "") {
                        window.location.href = sites_url;
                    } else {
                        window.location.href = current_url;
                    }
                }

                if ($(".recent_order_wrap").is(":visible")) {
                    load_recent_order();
                }
            } else {
                jAlert(data.msg, jtitle);
                /*$.UIkit.notify({
                 message :data.msg,
                 timeout :1500	       	   	
                 });	*/
            }
        },
        error: function () {
            toogle(button.attr("id"), false, caption);
            //jAlert("Something went wrong.",jtitle);
            $.UIkit.notify({
                message: js_lang.errorMsg1, //"ERROR: Something went wrong.",
                timeout: 5000,
                status: "warning"
            });
        }
    });
}

function social_popup(url)
{
    w = 700;
    h = 436;
    var left = (screen.width / 2) - (w / 2);
    var top = (screen.height / 2) - (h / 2);

    window.open(url, 'sharer', 'toolbar=0,status=0,width=700,height=436' + ', top=' + top + ', left=' + left);
}

function add_to_wishlist(item_id)
{
    //var params={"action":"addToWishlist","item_id":item_id};
    var params = "action=addToWishlist&item_id=" + item_id;
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            if (data.code == 1) {
                load_wishlist_item();
            }
        },
        error: function () {
            //jAlert("ERROR: Something went wrong.",jtitle);      	        	
            $.UIkit.notify({
                message: js_lang.errorMsg1, //"ERROR: Something went wrong.",
                timeout: 5000,
                status: "warning"
            });
        }
    });
}

function add_to_wishlist_event(item_id)
{
    var html = '';
    var cart = $('.favorites');
    var imgtodrag = $(".item_photo").find("img").eq(0);
    //var item_id=object.attr("rev");         	
    if (jQuery.isEmptyObject(imgtodrag) || imgtodrag.length === 0) {
        var imgtodrag = $(".add_fav");
    }

    if (imgtodrag) {
        var imgclone = imgtodrag.clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left
                })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

        setTimeout(function () {
            cart.effect("shake", {
                times: 2
            }, 200);
        }, 1500);

        imgclone.animate({
            'width': 0,
            'height': 0
        }, function () {
            $(this).detach()
            var temp = $(".favorites span").html();
            if (isNaN(temp)) {
                temp = 0;
            }
            temp = parseFloat(temp) + 1;
            $(".favorites").html("WishList (<span>" + temp + "</span>)")
            add_to_wishlist(item_id);
            $(".add_favs").hide();
            $(".add_fav").show();
        });
    }
}

function load_wishlist_item()
{
    ////console.debug(js_lang);
    var params = "action=loadWishlist";
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            if (data.code == 1) {
                $(".wish_list_wrap").html(data.details);
                $(".favorites").html("WishList (<span>" + data.msg + "</span>)")
            } else {
                $(".wish_list_wrap").html("<span class=\"cart_empty alert alert-warning\">" + js_lang.wishistEmpty + ".</span>");
                $(".favorites").html('<i class="fa fa-plus-circle"></i> ' + js_lang.WishList)
            }
        },
        error: function () {
            //jAlert("ERROR: Something went wrong.",jtitle);
        }
    });
}

function remove_wishtlist(id)
{
    //var params={"action":"removeWishtlist","id":id};
    var params = "action=removeWishtlist&id=" + id;
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            if (data.code == 1) {
                $(".wr_" + id).fadeOut("slow", function () {
                    $(".wr_" + id).remove();
                    load_wishlist_item();
                });
            }
        },
        error: function () {
            //jAlert("ERROR: Something went wrong.",jtitle);      	
            $.UIkit.notify({
                message: js_lang.errorMsg1,
                timeout: 5000,
                status: "warning"
            });
        }
    });
}

jQuery(document).ready(function () {
    $ = jQuery.noConflict();
    $(document).on('click', '.recent_order_to_cart', function (ev) {
        var id = $(this).attr("rel");
        //jConfirm('Add your recent order to cart?', jtitle, function(r) {
        jConfirm(js_lang.addRecentOrder, jtitle, function (r) {
            if (r) {
                recent_order_to_cart(id);
            }
        });
        ev.preventDefault();
        return;
    });

    $('.more_item_bxslider').bxSlider({
        //mode: 'fade',
        captions: true,
        pager: false,
        slideWidth: 190,
        infiniteLoop: true,
        maxSlides: 4,
        slideMargin: 5,
        auto: true,
    });

    $(".bx_slider_featured").show();
    $('.bx_slider_featured').bxSlider({
        captions: true,
        pager: false,
        slideWidth: 150,
        infiniteLoop: true,
        maxSlides: 5,
        slideMargin: 20,
        auto: true,
    });

    /* $(document).on('click', '.category_menu', function (e) {
     alert(1);
     var clicked = $(e.target);
     if (clicked.hasClass("sidebar_parent_list")) {
     if ($(this).find(".sidebar_parent_list").hasClass("selected")) {
     $(this).find(".sidebar_parent_list").removeClass("selected");
     $(this).find(".glyphicon").removeClass("glyphicon-minus");
     } else {
     $(this).find(".sidebar_parent_list").addClass("selected");
     $(this).find(".glyphicon").addClass("glyphicon-minus");
     }
     var child = $(this).find(".sibar_child_list");
     child.slideToggle("fast");
     }
     //e.preventDefault();
     });
     */

    $("#frm_paypal_checkout").submit(function (event) {
        event.preventDefault();
        button = $('#frm_paypal_checkout input[type="submit"]');
        caption = button.val();
        toogle(button.attr("id"), true, "Processing");
        var params = $("#frm_paypal_checkout").serialize();
        $.ajax({
            type: "POST",
            url: ajax_url,
            data: params,
            dataType: 'json',
            success: function (data) {
                toogle(button.attr("id"), false, caption);
                if (data.code == 1) {
                    window.location.href = sites_url + "/store/paypal-receipt/?token=" + data.details.token + "&order_id=" + data.details.order_id;
                } else {
                    //jAlert(data.msg,jtitle);	        		
                    $.UIkit.notify({
                        message: data.msg,
                        timeout: 5000
                    });
                }
            },
            error: function () {
                toogle(button.attr("id"), false, caption);
                //jAlert("ERROR: Something went wrong.",jtitle);        	
                $.UIkit.notify({
                    message: js_lang.errorMsg1,
                    timeout: 5000,
                    status: "warning"
                });
            }
        });
    });

    //$('.footer').css('position', $(document).height() > $(window).height() ? "inherit" : "fixed");

    $(window).resize(function () {
        //$('.footer').css('position', $(document).height() > $(window).height() ? "inherit" : "fixed");
    });

    /*$(' .menu_gallery #da-thumbs > li ').each(function () {
     $(this).hoverdir();
     });*/

    /******************************************
     GOOGLE MAP FOR CONTACT US
     /******************************************/
    if ($(".google_map_wrap").is(":visible")) {
        initializeMarker(locations);
    }
    /*
     var original_nav_position = $(".header").position().top + 10;
     ////console.debug(original_nav_position);		
     if ($('body').scrollTop() > original_nav_position) {
     //$(".header").addClass("fixed");
     } else {
     //$(".header").removeClass("fixed");
     }
     */
    /*$(window).scroll(function () {			
     if ( $(this).scrollTop() <= original_nav_position ){								
     $(".header").removeClass("fixed");
     } else {						
     $(".header").addClass("fixed");			
     }		
     });
     
     $(".cart_details_wrap_inner").niceScroll({
     cursorcolor: "#E57871",
     cursorwidth: "7px",
     autohidemode: "leave"
     });
     
     $(".cart_details_wrap").mouseover(function () {
     $(".cart_details_wrap_inner").getNiceScroll().resize();
     });
     */
});
/*END DOCU*/

function recent_order_to_cart(id)
{
    //var params={"action":"recentOrderToCart","id":id};
    var params = "action=recentOrderToCart&id=" + id;
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            if (data.code == 1) {
                load_cart_item();
            }
            //jAlert(data.msg,jtitle);            	
            $.UIkit.notify({
                message: data.msg,
                timeout: 5000
            });
        },
        error: function () {
            //jAlert("ERROR: Something went wrong.",jtitle);      	
            $.UIkit.notify({
                message: js_lang.errorMsg1,
                timeout: 5000,
                status: "warning"
            });
        }
    });
}

function load_recent_order()
{
    $(".recent_order_wrap").remove();
    $(".recent_order_wrap").html("Loading..");
    //var params={"action":"loadRecentOrder"};
    var params = "action=loadRecentOrder";
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'html',
        success: function (data) {
            $(".recent_order_wrap").remove();
            $(".recent_order_inner").append(data);
        },
        error: function () {
            $(".recent_order_wrap").remove();
            //jAlert("ERROR: Something went wrong.",jtitle);
            $.UIkit.notify({
                message: js_lang.errorMsg1,
                timeout: 5000,
                status: "warning"
            });
        }
    });
}

function fb_register(object)
{
    var fb_params = '';
    $.each(object, function (key, value) {
        fb_params += key + "=" + value + "&";
    });
    $(".login_loading_indicator").show();
    //var params={"action":"fbRegister","params":fb_params};
    var params = "action=fbRegister&" + fb_params;
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            $(".login_loading_indicator").hide();
            if (data.code == 1) {

                $.UIkit.notify({
                    message: js_lang.loginOk,
                    timeout: 5000
                });

                //////console.debug(  $("#trans_type").val()  );
                if ($("#trans_type").val() == "delivery") {
                    window.location.href = sites_url + "/store/delivery";
                } else if ($("#trans_type").val() == "carryout") {

                    //if ( $("#trans_type").is(":visible") ) {
                    if ($("#trans_type").length >= 1) {
                        $("#mod_payment_cod").attr("href", $("#mod_payment_cod").attr("href") + "/?trans_type=" + $("#trans_type").val());
                        $("#mod_payment_paypal").attr("href", $("#mod_payment_paypal").attr("href") + "/?trans_type=" + $("#trans_type").val());
                        $("#mod_payment_offline").attr("href", $("#mod_payment_offline").attr("href") + "/?trans_type=" + $("#trans_type").val());
                    }
                    $('.pop_mode_of_payment').modal('show');
                    $('.pop_login').modal('hide');

                } else if ($("#trans_type").val() == "add_wishlist") {
                    $(".pop_login").modal('hide');
                    add_to_wishlist_event($(".add_fav").attr("rev"));
                    $(".glyphicon-user").show();
                    $(".glyphicon-log-out").show();
                    $(".glyphicon-log-in").hide();
                } else {
                    var current_url = $(location).attr('href');
                    if (current_url == "") {
                        window.location.href = sites_url;
                    } else {
                        if (current_url.indexOf("signup") != -1) {
                            window.location.href = sites_url;
                        } else {
                            window.location.href = current_url;
                        }
                    }
                }

            } else {
                //jAlert(data.msg,jtitle);          	
                $.UIkit.notify({
                    message: data.msg,
                    timeout: 5000
                });
            }
        },
        error: function () {
            $(".login_loading_indicator").hide();
        }
    });
}

function form_submit()
{
    var btn = $(".forms").find(".btn_submit");
    btn.css({'pointer-events': 'none'});
    var text = btn.html();
    btn.html("Processing..");
    $(".process_indicator").show();
    var params = $(".forms").serialize();
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            $(".process_indicator").hide();
            btn.css({'pointer-events': 'auto'});
            btn.html(text);
            if (data.code == 1) {
                $(".forms").before("<div class=\"uk-alert uk-alert-success\">" + data.msg + "</div>").fadeIn();
                scroll_class('uk-alert-success');
            } else {
                $(".forms").before("<div class=\"uk-alert uk-alert-danger\"><i class=\"fa fa-times-circle-o\"></i> " +
                        data.msg + "</div>").fadeIn();
                scroll_class('uk-alert-danger');
            }
            setTimeout(function () {
                $(".uk-alert").fadeOut();
            }, 1800);
        },
        error: function () {
            $(".process_indicator").hide();
            btn.css({'pointer-events': 'auto'});
            btn.html(text);
        }
    });
}


function form_submit2(formid)
{
    if (formid) {
        var form_id = formid;
    } else {
        var form_id = 'forms';
    }

    var action = $('.' + form_id).find("#action").val();
    var btn = $("." + form_id).find(".btn_submit");
    btn.css({'pointer-events': 'none'});
    var text = btn.html();
    btn.html("Processing..");
    $(".process_indicator").show();

    busy(true);

    var params = $("." + form_id).serialize();
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            busy(false);
            $(".process_indicator").hide();
            btn.css({'pointer-events': 'auto'});
            btn.html(text);
            if (data.code == 1) {
                $("." + form_id).before("<div class=\"uk-alert uk-alert-success\">" + data.msg + "</div>").fadeIn();
                scroll_class('uk-alert-success');

                if (action == "addCreditCard") {
                    $("#frm_add_card").slideToggle("fast");
                    $("#frm_offline_payment").show();
                    load_credit_card();
                }

                if (action == "addPayment") {
                    window.location.replace(data.details);
                }

            } else {
                $("." + form_id).before("<div class=\"uk-alert uk-alert-danger\"><i class=\"fa fa-times-circle-o\"></i> " +
                        data.msg + "</div>").fadeIn();
                scroll_class('uk-alert-danger');
            }
            setTimeout(function () {
                $(".uk-alert").fadeOut();
            }, 1800);
        },
        error: function () {
            busy(false);
            $(".process_indicator").hide();
            btn.css({'pointer-events': 'auto'});
            btn.html(text);
        }
    });
}

/*=============================================================
 START GOOGLE MAP MARKER
 =============================================================*/

function initializeMarker(locations) {

    window.map = new google.maps.Map(document.getElementById('google_map_wrap'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    });

    var infowindow = new google.maps.InfoWindow();

    var bounds = new google.maps.LatLngBounds();

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        bounds.extend(marker.position);

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    map.fitBounds(bounds);

    var listener = google.maps.event.addListener(map, "idle", function () {
        map.setZoom(13);
        google.maps.event.removeListener(listener);
    });
}
/*=============================================================
 END GOOGLE MAP MARKER
 =============================================================*/


/*=============================================================
 UPDATES 1.0.1
 =============================================================*/

jQuery(document).ready(function () {

    $(".side_panel_handle").click(function () {
        var object = $(this);
        if (object.find("i").hasClass("fa fa-arrow-circle-right")) {
            $(".sider_bar_content").stop().animate({width: '0px'}, 300, function () {
                object.find("i").addClass("fa-arrow-circle-left");
                object.find("i").removeClass("fa-arrow-circle-right");
                $(".sider_bar_content").hide();
            });
        } else {
            $(".sider_bar_content").show().stop().animate({width: '200px'}, 300, function () {
                object.find("i").removeClass("fa-arrow-circle-left");
                object.find("i").addClass("fa-arrow-circle-right");
            });
        }
    });

    $(document).on('click', '.view_receipt', function (e) {
        var order_id = $(this).attr("data-id");
        //console.debug(order_id);
        var link = sites_url + "/store/view-receipt/order_id/" + order_id + "/noscript/true";
        //console.debug(link);		

        $(".post_full_wrapper").show();
        $(".post_full_wrapper").animate({
            width: "100%",
        }, 500, function () {
            load_url(link);
        });
        e.preventDefault();
    });

    $(document).on('click', '.full_nav_wrap a.back', function (e) {
        $(".body-wrapper").show();
        $(".post_full_content").fadeOut("slow");
        $(".post_full_wrapper").css({"height": "100%", "position": "fixed"});
        $(".post_full_wrapper").animate({
            width: "0%",
        }, 1000, function () {
            $(".post_full_content").html("");
            $(".post_full_wrapper").hide();
        });
        e.preventDefault();
    });


    if (typeof $("#msg_get").val() === "undefined") {
    } else {
        $.UIkit.notify({
            message: $("#msg_get").val(),
            timeout: 5000
        });
    }

    jQuery(".j_date").datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true,
        yearRange: "-50:+0"
    });

    jQuery(".j_date2").datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true,
        minDate: 0
    });


    var store_hours_format_value = $("#store_hours_format_value").val();
    if (store_hours_format_value == 2) {
        jQuery('.timepick').timepicker({
        });
    } else {
        jQuery('.timepick').timepicker({
            showPeriod: true,
            showLeadingZero: true
        });
    }

    $(document).on('click', '.categorized_menu.collapsable h5', function (e) {

        var i = $(this).find("i");
        if (i.hasClass("fa-chevron-up")) {
            i.removeClass("fa-chevron-up");
            i.addClass("fa-chevron-down");
        } else {
            i.addClass("fa-chevron-up");
            i.removeClass("fa-chevron-down");
        }
        var parent = $(this).parent().parent();

        if (parent.hasClass("parent")) {
        } else {
            var parent = $(this).parent().parent().parent();
        }
        var ul = parent.find("ul");
        ul.slideToggle("fast");
    });

    allowed_ordering();

    $(document).on('click', '.print_element', function (e) {
        $('.receipt_main_wrapper').printElement();
    });
    $(document).on('click', '.a.preview', function (e) {
        if ($(this).hasClass("nolink")) {
            e.preventDefault();
        }
    });

    /*var pre_collapse=$("#pre_collapse").val();    
     if ( pre_collapse > 0){    	    	
     var ul=$(".categorized_menu.collapsable").find("ul");    	
     ul.slideToggle("fast");    	
     }*/
    $(document).on('click', '#apply_discount', function (e) {
        $this = $(this);
        var voucher_code = $this.closest(".apply_voucher_code").find("#voucher_code").val();
        if (voucher_code == "") {
            $.UIkit.notify({
                message: js_lang.voucherCodeRequired,
                timeout: 5000
            });
            return;
        } else {
            processDiscount(voucher_code, $this);
        }
        e.preventDefault();
    });

    //layout_10
    $(document).on('click', '.layout_10 .parent-a', function (e) {

        var i = $(this).find("i");
        if (i.hasClass("fa-chevron-up")) {
            i.removeClass("fa-chevron-up");
            i.addClass("fa-chevron-down");
        } else {
            i.addClass("fa-chevron-up");
            i.removeClass("fa-chevron-down");
        }

        parent.find("fa");
        var child = $(this).parent();
        child.find(".child").toggle("fast");
    });
    $(document).on('click', '.item-pop', function (e) {
        var item_id = $(this).attr("rel");
        open_fancy_box("action=popUpItem&item-id=" + item_id + "&tbl=true");
    });

    $(document).on('click', '#remove_discount', function (e) {

        jConfirm(js_lang.removeVoucher, jtitle, function (r) {
            if (r) {
                var params = "action=removeVoucher";
                $.ajax({
                    type: "POST",
                    url: ajax_url,
                    data: params,
                    dataType: 'json',
                    success: function (data) {
                        load_cart_item();
                        $(".apply_remove_voucher").hide();
                        $(".apply_voucher_code").show();
                        $(".apply_voucher_code").removeClass("hide");
                    },
                    error: function () {
                        $.UIkit.notify({
                            message: data.msg,
                            timeout: 5000
                        });
                    }
                });
            }
        });
        e.preventDefault();
    });

});	/*END DOCU*/


function load_url(url)
{
    busy(false);
    $(".post_full_wrapper .header").html("");
    $(".post_full_wrapper .loader").html('<div class="loader-wrapper"><i class="fa fa-spinner fa-spin"></i></div>');
    $(".post_full_wrapper a").css({'pointer-events': 'none'});
    $.get(url, function (data) {
        $(".body-wrapper").hide();

        var response = $('<div />').html(data);
        var content = response.find("#postContent").html();
        var title = response.find(".full_post_header").html();

        $(".post_full_content").html('<section id="post_page_wrap">' + content + '</section>').fadeIn("slow");
        $(".post_full_wrapper").css({"height": "auto", "position": "absolute"});
        $(".post_full_wrapper a").css({'pointer-events': 'auto'});
        $(".post_full_wrapper .full_post_header").html(title);

        $(".post_full_wrapper .loader").html("");
        busy(false);
        //scroll_to_class("post_full_wrapper");
        $(".uk-button").hide();
        $("#post_page_wrap .full_post_header").hide();
        $("#post_page_wrap .required_text").hide();
        $("#post_page_wrap p.bold").hide();
        $(".submit_button").hide();
    });
}

function scroll_to_class(id) {
    if ($('.' + id).is(':visible')) {
        $('html,body').animate({scrollTop: $("." + id).offset().top - 50}, 'slow');
    }
}

function check_mininum_order()
{
    if ($("#store_min_order").val() != "") {
        var min_total_order = parseFloat($(".min_total_order").html());
        var store_min_order = parseFloat($("#store_min_order").val());
        //console.debug(store_min_order);
        ////console.debug(min_total_order);    	    
        if (store_min_order > min_total_order) {
            $.UIkit.notify({
                message: js_lang.minOrderMsg + " " + $("#store_cuurency_code").val() + " " + $("#store_min_order").val(),
                timeout: 20000
            });
            return false;
        }
    }
    return true;
}
/*=============================================================
 END UPDATES 1.0.1
 =============================================================*/

function allowed_ordering()
{
    var allowed_ordering = $("#allowed_ordering").val();
    if (allowed_ordering == 2) {
        $(".item_description").find(':input[type="radio"]').each(function () {
            $(this).remove();
        });
        $(".cooking_ref_wrap").find(':input[type="radio"]').each(function () {
            $(this).replaceWith('<i class="fa fa-circle-o"></i> ');
        });

        $("size").remove();
    }
}

function processDiscount(voucher_code, $this)
{
    var text = $this.text();
    $this.text("Checking..");
    $this.css({'pointer-events': 'none'});
//    var text = $("#apply_discount").text();
//    $("#apply_discount").text("Checking..");
//    $("#apply_discount").css({'pointer-events': 'none'});
    var params = "action=processDiscount&voucher_code=" + voucher_code;
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            $this.text(text);
            $this.css({'pointer-events': 'auto'});
//            $("#apply_discount").text(text);
//            $("#apply_discount").css({'pointer-events': 'auto'});
            if (data.code == 1) {
                $this.closest(".apply_voucher_code").find("#voucher_code").val("");
                $(".apply_voucher_code").hide();
                $(".apply_remove_voucher").show();
                $(".apply_remove_voucher").removeClass("hide");
                load_cart_item();
            }
            $.UIkit.notify({
                message: data.msg,
                timeout: 5000
            });
        },
        error: function () {
            $this.text(text);
            $this.css({'pointer-events': 'auto'});
            $.UIkit.notify({
                message: js_lang.errorMsg1,
                timeout: 5000,
                status: "warning"
            });
        }
    });
}

function open_fancy_box(params)
{
    var URL = ajax_url + "/?" + params;
    $.fancybox({
        maxWidth: 800,
        //closeBtn : false,          
        autoSize: true,
        padding: 0,
        margin: 2,
        modal: false,
        type: 'ajax',
        href: URL,
        openEffect: 'elastic',
        closeEffect: 'elastic'
    });
}


$(document).ready(function () {
//    if ($(".multi_id").is(':visible')) {
        $(document).on("click", ".multi_id", function () {
            var multi_option_number = $(this).closest("#product-view-dialog").find("#multi_option_number").val();
            var total_multi_selected = $(".multi_id:checked").length;
            if (total_multi_selected > multi_option_number) {
                $.UIkit.notify({
                    message: js_lang.multiError + " " + multi_option_number,
                    timeout: 50000,
                    status: "warning"
                });
                $(this).attr("checked", false);
            }
        });
//    }

    jQuery('.numeric_only').keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g, '');
    });

    if ($('#frm_offline_payment').is(':visible')) {
        load_credit_card();
    }

    $(document).on("click", ".add_cc", function () {
        $("#frm_add_card").slideToggle("fast");
    });


    jQuery.fn.exists = function () {
        return this.length > 0;
    }

    if ($('#clikent_token').exists()) {
        var clikent_token = $('#clikent_token').val();
        console.debug(clikent_token);
        console.debug(sites_url);

        /*braintree.setup(clikent_token , "paypal", {
         container: "paypal-button",           
         onSuccess: paypalSuccess,
         onCancelled:onCancelled,
         onUnsupported:onUnsupported
         });*/

        /*braintree.setup(clikent_token , "custom", {
         id: "braincheckout",
         paypal: {
         container: "paypal-button"
         }
         });*/

        /*braintree.setup(clikent_token, "dropin", {
         container: "container",
         paymentMethodNonceReceived: function (event, nonce) {          	
         console.debug(event);
         console.debug(nonce);
         brain_tree_init(nonce);
         }            
         });*/
        braintree.setup(clikent_token, "custom", {id: "brain-checkout"});
    }

    $(document).on("click", ".empty-busket", function () {

        $("#product-delete-view").dialog({
            resizable: false,
            modal: true,
            title: "Are you sure want to Empty Cart?",
            height: 'auto',
            width: 300,
            buttons: {
                "Yes": function () {
                    $(this).dialog('close');
                    $.ajax({
                        type: "POST",
                        url: sites_url + '/store/emptycart',
                        data: "",
                        update: '#product-delete-view',
                        success: function (data) {
                            if (data == '1') {
                                window.location.href = sites_url + "/store";
                            }
                        },
                        error: function () {
                        }
                    });
                },
                "No": function () {
                    $(this).dialog('close');
                }
            }
        });
    });

}); /*END DOCU*/

function paypalSuccess(data)
{
    console.debug(data);
}
function onCancelled()
{
    console.debug("onCancelled");
}
function onUnsupported()
{
    $.UIkit.notify({
        message: "Browser onUnsupported",
        timeout: 5000,
        status: "warning"
    });
}

function load_credit_card()
{
    var htm = '';
    busy(true);
    var params = "action=loadCreditCard";
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            busy(false);
            if (data.code == 1) {
                $("#cc_id option").remove();
                $.each(data.details, function (index, val) {
                    htm += "<option value=\"" + val.cc_id + "\">" + val.credit_card_number + "</option>";
                });
                $("#cc_id").append(htm);
            } else {
                $("#frm_add_card").slideToggle("fast");
                $("#frm_offline_payment").hide();
            }
        },
        error: function () {
            busy(false);
        }
    });
}

var preorder_notify;
var preorder_notify2;
var start_timer_count = 10;

jQuery(document).ready(function () {
    if ($('.pre_order_wrap').is(':visible')) {
        if ($("#pre_order_status").val() == 10) {
            preorder_notify2 = setInterval(function () {
                start_mytimer()
            }, 1000);
            preorder_notify = setInterval(function () {
                get_preorder_status()
            }, 9000);
        } else {
            clearInterval(preorder_notify);
            clearInterval(preorder_notify2);
        }
    }
});

function start_mytimer()
{
    $(".timer").html(start_timer_count--);
}

function get_preorder_status()
{
    start_timer_count = 10;
    $(".preorder-loader").show();
    var params = "action=getPreOrderStatus";
    params += "&order_id=" + $("#pre_order_id").val();
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            $(".preorder-loader").hide();

            $("#pre_order_status").val(data.code);

            if (data.code == 1) {
                console.debug("stop");
                clearInterval(preorder_notify);
                clearInterval(preorder_notify2);
                $(".continue-pre-order").show();

                $(".pre-order-response").html("<p class=\"uk-text-success\">" + data.msg + "</p>");

            } else if (data.code == 3) {
                console.debug("stop");
                clearInterval(preorder_notify);
                clearInterval(preorder_notify2);
                $(".pre-order-response").html("<p class=\"uk-text-danger\">" + data.msg + "</p>");
            } else {
                $.UIkit.notify({
                    message: data.msg,
                    timeout: 5000,
                    status: "warning"
                });
            }
        },
        error: function () {
            $(".preorder-loader").hide();
        }
    });
}

jQuery.validate({
    language: myLanguage,
    form: '#brain-checkout',
    onError: function () {
    },
    onSuccess: function () {

        busy(true);
        var clikent_token = $('#clikent_token').val();
        console.debug(clikent_token);

        var client = new braintree.api.Client({clientToken: clikent_token});
        client.tokenizeCard(
                {
                    number: $("#number").val(),
                    expirationMonth: $("#expiration_month").val(),
                    expirationYear: $("#expiration_year").val()
                }, function (err, nonce) {

            busy(false);
            console.debug(err);
            console.debug(nonce);
            if (typeof err === "undefined" || err == null) {
                brain_tree_init(nonce);
            } else {
                $.UIkit.notify({
                    message: err,
                    timeout: 5000,
                    status: "warning"
                });
            }
        });

        return false;
    }
});

function brain_tree_init(nonce)
{
    var htm = '';
    busy(true);
    $("#brain-submit").attr("disabled", true);
    var params = "action=brainTreeInit&nonce=" + nonce;
    params += "&trans_type=" + $("#trans_type").val();
    params += "&credit-card-number=" + $("#credit-card-number").val();
    params += "&expiration=" + $("#expiration").val();
    $.ajax({
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',
        success: function (data) {
            busy(false);
            if (data.code == 1) {
                window.location.replace(data.details);
            } else {
                $.UIkit.notify({
                    message: data.msg,
                    timeout: 5000,
                    status: "warning"
                });
                $("#brain-submit").attr("disabled", false);
            }
        },
        error: function () {
            busy(false);
        }
    });
}
