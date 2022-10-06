//modal outside of dom ready.
$(".delete").on('click', function(event){
    id=$(this).data("id");
    $(".modalDelete").on('click',function(e){
        e.preventDefault();
            $.ajax({
                url:"BE_deletePerson.php",
                type:"POST",
                data:{dataId:id},
                success: function(data){
                    location.reload();
            },
            error: function(error){
                console.log(`Error ${error}`);
            }
        });
    })
}); 

$(function(){
    
    // Initialize DataTables
    $(".custom-table").DataTable({
        mark: true,
        scrollX:true,
        scrollY: true,
    });

    //-select rows
    $(".custom-table tr td").on('click', function (e) {
            var id = $(this).parent().data('id');
            console.log(id);
            if($(this).is("td:last-child")) {
                // $(".delete").
            }else {
                if(typeof id !== 'undefined'){
                    location.href = "FE_editCurrentPerson.php?id=" + id;
                }
            }
    });
    $("#editForm").validate({
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
                email: true
            },
            age:{
            required: true,
            range: [10, 120] 
            },
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
            email: {required: "Please enter a valid email address", email: "Please enter a valid email address"}
        },
        submitHandler: function (form) {
            id=$(".userID").attr("id").val();
            $.ajax({
                url: "BE_editCurrentPerson.php?id="+id,
                type: form.method,
                data: $(form).serialize(),
                success: function (data) {
                    if($.trim(data) === 1){
                        console.log("success!", data);
                        location.href='./';
                    }else{
            
                            console.log("something went wrong");
                      
                    }
                }
            });
        }
    });

    // --addnewPerson
    $(".buttonADD").on('click',function(){
        location.href="FE_addNewPerson.php";
    });
    $("#btnCancel").on('click',function(){
        location.href="index.php";
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
    $("#errorMsg").hide();
    //validate input
    $("#personDetails").validate({
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
        submitHandler: function (form) {
            $.ajax({
                url: 'BE_addNewPerson.php',
                type: form.method,
                data: $(form).serialize(),
                success: function (data) {
                    var res = JSON.parse(data);
                    console.log(res);
                    //user does exist redirect to login page
                    if(data['userExists'] == false){
                        location.href='FE_login.php';
                        console.log("false");
                    //user does not exist show error msg
                    }else{
                            var errorMessage = res['msg'];
                            $("#errorMsg").html(errorMessage);
                            $("#errorMsg").show();
                    }
                }
            });
        }
    });
    
    //contact
    $("#contactDetails").validate({
        name: 'required',
        email:'required',
        textarea: 'required',
        messages:{
            name:'Please enter your name',
            email:'Please enter your email',
            textarea:'Please enter your message',
        },
        submitHandler:function (form) {
            $.ajax({
                url:'BE_contact.php',
                type:form.method,
                data: $(form).serialize(),
                success: function(data){
                    console.log(data);
                }
            })
        }
    })
});

//register
$("#show_hide_password a").on('click', function(event) {
    event.preventDefault();
    if($('#show_hide_password input').attr("type") == "text"){
        $('#show_hide_password input').attr('type', 'password');
        $('#show_hide_password i').addClass( "fa-eye-slash" );
        $('#show_hide_password i').removeClass( "fa-eye" );
    }else if($('#show_hide_password input').attr("type") == "password"){
        $('#show_hide_password input').attr('type', 'text');
        $('#show_hide_password i').removeClass( "fa-eye-slash" );
        $('#show_hide_password i').addClass( "fa-eye" );
    }
});

$("#show_hide_password_confirm a").on('click', function(event) {
    event.preventDefault();
    if($('#show_hide_password_confirm input').attr("type") == "text"){
        $('#show_hide_password_confirm input').attr('type', 'password');
        $('#show_hide_password_confirm i').addClass( "fa-eye-slash" );
        $('#show_hide_password_confirm i').removeClass( "fa-eye" );
    }else if($('#show_hide_password_confirm input').attr("type") == "password"){
        $('#show_hide_password_confirm input').attr('type', 'text');
        $('#show_hide_password_confirm i').removeClass( "fa-eye-slash" );
        $('#show_hide_password_confirm i').addClass( "fa-eye" );
    }
});