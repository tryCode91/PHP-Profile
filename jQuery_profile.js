$(function(){
    $("#form-upload").on("submit",function(event){   
        var form_data = new FormData(this);
        event.preventDefault();
            $.ajax({
                url: "BE_upload.php",
                type: "POST",
                data:  form_data,
                contentType: false,
                dataType:"JSON",   
                processData:false,
                success: function(data) {
                    console.log(data);
                    if(data['success'] == true){
                        location.reload();
                    }else{
                        if(data['success']==false){
                            console.log("something went wrong.");    
                            return false;   
                        }
                    }
                },  
            });
    });


$("#errorMsg").show();

$("#profileDetails").validate({
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
   submitHandler: function (form,e) {
    e.preventDefault();
       $.ajax({
           url: "BE_editCurrentPerson.php",
           type: form.method,
           data: $(form).serialize(),
           success: function (data) {
                console.log(data);
                if(data == 1){
                    console.log("data");
                    location.reload();
                }else{
                    $("#errorMsg").html(errorMessage);
                    $("#errorMsg").show();
                }
           }
       });
   }
});
$(".msg").hide();
$(".addExp").on("click", function(){
    var data = $("#add-experience").serialize();
    $.ajax({
        url: "BE_addExperience.php",
        data: data, 
        type:"post",
        success: function(data){
            var res = JSON.parse(data);
            if(res['success']==true){
                var message = res['message'];
                $(".msg").html(message).addClass("alert alert-success");
                $(".msg").fadeIn(600);
                setTimeout(function(){
                    $(".msg").fadeOut(600);
                },3000);
              
            }else{
                if(res['success']==false){
                    var message = res['message'];
                    $(".msg").html(message).addClass("alert alert-danger");
                    $(".msg").fadeIn(600);
                    setTimeout(function(){
                        $(".msg").fadeOut(600);
                    },3000);
                }
            }
        }
    });
});
});