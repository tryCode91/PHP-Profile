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
            } 
        },
        submitHandler: function (form) {
            $.ajax({
                url: 'BE_addNewPerson.php',
                type: form.method,
                data: $(form).serialize(),
                success: function (data) {
                    console.log('success!', data);
                    if(data == 1){
                        $('.errorMessage').html('Email Already Exists').show();
                    }else{
                        if(data == 0){
                            $('.errorMessage').hide();
                            location.href='index.php';
                        }
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