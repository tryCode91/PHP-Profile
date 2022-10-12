$(function(){
    $("#errorMsg").hide();
    $("#register-form").validate({
        rules: {
            firstname: {
                required: true,
                regex : "^[a-zA-ZåäöÅÄÖ']+$",
            },
            lastname: {
                required: true,
                regex : "^[a-zA-ZåäöÅÄÖ']+$",
            },
            email: {
                required: true,
                email: true,
            },
            age: {
                required: true,
                range:[10,120],
            },
            password: {
                required: true,
            },
            password_confirm: {
                equalTo : "#password",
            },
            Language: 'required',
            musictaste: 'required',
            status: 'required'
        },
        messages: {
            firstname: {required: "Please enter your Firstname", regex: 'Only letters and no whitespace is allowed'},
            lastname:  {required: "Please enter your Lastname", regex: 'Only letters and no whitespace is allowed'},
            age: {
                required: "Please enter your age.",
                range: "Age must be between 120 and 10"
            },
            email:{
                required:"Please enter your email address.",
                email: "Please enter a valid email address",
            },
        },
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
              $(placement).append(error)
            } else {
              error.insertAfter(element);
            }
        },
        submitHandler: function (form,event) {
            event.preventDefault();
            $.ajax({
                url: 'BE_addNewPerson.php',
                type: form.method,
                data: $(form).serialize(),
                success: function (data) {
                    var res = JSON.parse(data);
                    // console.log(data);
                    if(res['userExists'] == false){
                        if(res['location'] == true){
                            console.log("userexists false location true")
                            location.href='FE_secure.php';
                        }else{
                            location.href='FE_login.php';
                        }
                    }else{
                        if(res['userExists'] == true){
                                console.log("userexists true location false")   
                                var errorMessage = res['msg'];
                                $("#errorMsg").html(errorMessage);
                                $("#errorMsg").show();
                            }
                    }
                }
            });
        }
    });
        //validator method
        $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
            },
            "Please check your input."
        );
    

});