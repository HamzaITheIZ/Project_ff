$(document).ready(function() {
    $("#user_form").on("submit",function(){
        var namestat = false;
        var emailstat = false;
        var passwordstat = false;
        var name = $("#user_name");
        var email = $("#user_email");
        var password = $("#user_pssword");
        var password2 = $("#pass2");
        
        var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
        
        if (name.val() == "" || name.val().length < 6) {
            name.addClass("border-dark");
            $("#u_error").html("<span class='text-dark'>S'il vous plaît entrer le nom et le nom doit être plus de 6 caractères</span>");
            namestat = false;
        } else {
            name.removeClass("border-danger");
            $("#u_error").html("");
            namestat = true;
        }
        
        if(namestat == true){
            alert("Holla");
        }
        else{
            alert("no Hola xD ");
        }
    })
})

