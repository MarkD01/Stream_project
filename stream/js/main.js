// submitting new post form

$(document).ready(function() {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('#ajaxForm').submit(function (event) {
        $this = $(this);
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'p_title': $('input[name=p_title]').val(),
            'p_author': $('input[name=p_author]').val(),
            'p_tag': $('input[name=p_tag]').val(),
            'p_content': $('textarea[name=p_content]').val()
        };
        console.log(formData);

        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: 'c_post.php', // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            encode: true
        })
            // using the done promise callback
            .done(function (data) {

                // log data to the console so we can see
                console.log(data);

                if(data.success == true) {
                swal('Hey!', 'Thanks for adding this post', 'success');
                $this.trigger('reset');
                } else {
                    var errorString = "";
                    $.each(data.errors, function (err, val) {
                        errorString += val + "\n";
                    });

                    swal('A problem occured', errorString, 'error');
                }
                // here we will handle errors and validation messages
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })

            });
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
    // Email validation
        $('#contact_form').submit(function(e){
            e.preventDefault();

            var name = document.getElementById("name");
            var email = document.getElementById("email");
            var subject = document.getElementById("subject");
            var message = document.getElementById("message");

            if(name.value=="" || email.value=="" || subject.value=="" || message.value=="") {
                swal('Error', 'Please fill everything in.', 'error');

            } else {
                $.ajax({
                    type: 'POST',
                    url: 'sendMail.php',
                    success: swal('Success', 'E-Mail has been sent, expect a response within 24 hours.', 'success')
                });
            }
        });

            
    


});
// end of submitting the new form post

