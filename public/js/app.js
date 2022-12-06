// This is for the jQuery validation for the note creation form.
$(document).ready(function(){
    
    $("#create-review").validate({
        rules: {
            name: "required",
            title: "required",
            body: "required"
        },
        messages: {
            name: "Username is required",
            title: "Enter a title",
            body: "Please enter your review."
        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

});