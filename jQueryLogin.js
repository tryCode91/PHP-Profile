$(function(){
    $("#errorMessage").hide();

    $('#login').on('click', function(event){
        let self=$(this);
        event.preventDefault();
        self.prop('disabled',true);
        var data = $("#login-form").serialize();
        $.ajax({
            url:'BE_login.php',
            type:'post',
            dataType:'json',
            data: data,
        }).done(function(res){       
            console.log(res);
            if(res['status'] == true){ 
                location.href="FE_secure.php";
            }else{     
                var errorMessage="";
                $.each(res['msg'], function(index, message) {
                    errorMessage += '<div>'  + message + '</div>';
                });
                $("#errorMessage").html(errorMessage);
                $("#errorMessage").show();
                self.prop('disabled',false);
            }
        }).fail(function(xhr,status,error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(err.Message);
        }).always(function() {
            self.prop('disabled', false);
        });
    });
});

