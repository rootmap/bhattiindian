// Ajax Contact Form Validation
jQuery(function($) {
    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');
	    
	form.submit(function(event) {
	    // Stop the browser from submitting the form.
	    event.preventDefault();
		    
		// Validation function
	    function validate(){			    		    
		    form.find('[name]').each(function(index, value){
			    var that = $(this),
			    	value = that.val(),
					name = that.attr('name');
			    	
			    if(that.hasClass('required')) {
					if(value == '' || value.length < 3 && value.length > 50) {
						that.addClass('error');
					} else {
						that.removeClass('error');
					}
					if(name == 'input_email') {
						if(!value.match(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i)) {
							that.addClass('error');
						}
					}
				}
		    });
			if(form.find('.required').hasClass('error')) {
				return false;
			}
			return true;
	    }
	    
	    // If validation return true do Ajax
	    if(validate()) {
			var formData = form.serialize();
			
			// Submit the form using AJAX.
			$.ajax({
			    type: 'POST',
			    url: form.attr('action'),
			    data: formData
			})
			.done(function(response) {
			    // Make sure that the formMessages div has the 'success' class.
			    $(formMessages).removeClass('error');
			    $(formMessages).addClass('success');
			
			    // Set the message text.
			    $(formMessages).text(response);
			
			    // Clear the form.
			    form[0].reset();

			})
			.fail(function(data) {
			    // Make sure that the formMessages div has the 'error' class.
			    $(formMessages).removeClass('success');
			    $(formMessages).addClass('error');
			
			    // Set the message text.
			    if (data.responseText !== '') {
			        $(formMessages).text(data.responseText);
			    } else {
			        $(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});		   
	   } 
	});
});	