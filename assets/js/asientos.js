$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions

		$('#contact-form').validate({
	    rules: {
	      nombre: {
	        minlength: 2,
	        required: true
	      },
	      origen: {
	        minlength: 2,
	        required: true
	      },
	      destino: {
	        minlength: 2,
	        required: true
	      },
	      //nombre: {
	      //  minlength: 2,
	      //  required: true
	      //}
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

}); // end document.ready

$('.asiento').click(
    function(e){
        e.preventDefault;  // if your a has an href attribute, this prevents the browser
                           // following that link.
        var id = this.id;
        $('#nAsiento').text( 'Asiento # ' + id );
		$(this).children('img').attr('src', 'http://i.imgur.com/8E0FlNk.jpg');
		
		
});




$('.precio').keyup(function() {
    var $this = $(this);
    $this.val($this.val().replace(/[^\d.]/g, ''));        
});
