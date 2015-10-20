$( "#registrationForm" ).submit(function(e) {
    e.preventDefault();

    //For Laravel CSRF Token
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('#token').val()} });

    var $form = $(this),
        data = $form.serialize(),
        url = $form.attr("action");

    var posting = $.post( url, { formData: data});

    posting.done(function( data ) {

        //clear any error message if exists
        $('.help-block').html("");

        //remove error class
        $('.form-group').removeClass('has-error');

        //if validation failed
        if(data.fail) {
            $.each(data.messages, function( index, value ) {
                var errorDiv = '#'+index;
                $(errorDiv).parent().addClass('has-error');
                $(errorDiv).next().html(value);
            });
        }

        //if registration is success
        if(data.success) {
            $('#registrationContainer').fadeOut(function(){
                var successContent = '<div class="alert alert-success">' +
                    '<h3>Registration Completed Successfully</h3>' +
                    '<h4>You Can Login here <a href="#">Login</a> </div>';
                $('.successMessage').html(successContent);
            });

        } //success
    }); //done
});