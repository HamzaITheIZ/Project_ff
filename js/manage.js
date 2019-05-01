$(document).ready(function () {

    var DOMAIN = "http://localhost/project_ff";

    //Fill Slider
    /*fillSliderMeals();
     function fillSliderMeals() {
     $.ajax({
     url: DOMAIN + "/includes/process.php",
     method: "POST",
     data: {fillSlider: 1},
     success: function (data) {
     //alert(data);
     $("#sliderplats").html(data);
     }
     })
     }*/

//Fetch Product Stat
    fetch_Product_Stat();
    function fetch_Product_Stat() {
        $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            data: {statPlat: 1},
            success: function (data) {
                $("#ps").attr("data-number", data);
            }
        })
    }
    //Fetch Brand Stat
    fetch_Brand_Stat();
    function fetch_Brand_Stat() {
        $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            data: {statClient: 1},
            success: function (data) {
                $("#cs").attr("data-number", data);
            }
        })
    }
    //Fetch Category Stat
    fetch_Category_Stat();
    function fetch_Category_Stat() {
        $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            data: {statEmploye: 1},
            success: function (data) {
                $("#es").attr("data-number", data);
            }
        })
    }
    //Fetch Command Stat
    fetch_Command_Stat();
    function fetch_Command_Stat() {
        $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            data: {statCommand: 1},
            success: function (data) {
                $("#cms").attr("data-number", data);
            }
        })
    }

//Fill Hot Meals
    fillHotMeals();
    function fillHotMeals() {
        $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            data: {fillPlas: 1},
            success: function (data) {
                //alert(data);
                $("#hotmeals").html(data);
            }
        })
    }

    //Edit profile
    $("#edit_profil_form").on("submit", function () {

        var statuse = false;
        var statusn = false;
        var status = false;
        var name = $("#usernamen");
        var pass1 = $("#passwordf");
        var passn = $("#passwordnew");
        var pass2 = $("#passwords");

        //var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

        if (name.val() == "") {
            name.addClass("border-danger");
            $("#pu_error").html("<span class='text-danger'>S'il vous plaît entrer le nom de Utilisateur</span>");
            statusn = false;
        } else {
            name.removeClass("border-danger");
            $("#pu_error").html("");
            statusn = true;
        }
        if (pass1.val() == "") {
            pass1.addClass("border-danger");
            $("#pp1_error").html("<span class='text-danger'>S'il vous plaît entrer plus de 9 chiffres mot de passe</span>");
            status = false;
        } else {
            pass1.removeClass("border-danger");
            $("#pp1_error").html("");
            status = true;
        }
        if (passn.val() == "" || passn.val().length < 9) {
            passn.addClass("border-danger");
            $("#pn_error").html("<span class='text-danger'>S'il vous plaît entrer plus de 9 chiffres mot de passe</span>");
            status = false;
        } else {
            passn.removeClass("border-danger");
            $("#pn_error").html("");
            status = true;
        }

        if (pass2.val() == "" || pass2.val().length < 9) {
            pass2.addClass("border-danger");
            $("#pp2_error").html("<span class='text-danger'>Le mot de passe est plus petit que l'autre</span>");
            status = false;
        } else {
            pass2.removeClass("border-danger");
            $("#pp2_error").html("");
            status = true;
        }
        if (status == true && statusn == true) {
            if (passn.val() == pass2.val()) {
                $.ajax({
                    url: DOMAIN + "/includes/process.php",
                    method: "POST",
                    data: $("#edit_profil_form").serialize(),
                    success: function (data) {
                        if (data == "ID_NOT_MATCHED") {
                            alert("L'Email donner est Inccorect!");
                        } else if (data == "PASSWORD_NOT_EXISTS") {
                            alert("L'ancien mot de passe est invalide");
                        } else {
                            alert("Votre Profile Est Bien Modifier");
                            window.location.href = encodeURI(DOMAIN + "/clientspace.php");
                        }
                    }
                })
            } else {
                pass2.addClass("border-danger");
                $("#pp2_error").html("<span class='text-danger'>Le mot de passe n'est pas similaire à l'autre</span>");
                status = true;
            }
        }
    })


    //Fill Information For Check
    $("body").delegate(".consulter", "click", function () {
        var cid = $(this).attr("cid");
        $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            dataType: "json",
            data: {consulterInfo: 1, id: cid},
            success: function (data) {
                console.log(data);
                $("#nomcompletc").html(data["nom"]);
                $("#adressec").html(data["adresse"]);
                $("#telephonec").html(data["telephone"]);
            }
        })
    })

    //Remplir Info
    $("#remplir_info_form").on("submit", function () {

        var statusa = false;
        var statusn = false;
        var statust = false;
        var name = $("#nomcomplet");
        var adresse = $("#adresse");
        var telephone = $("#telephone");


        var t_patt = new RegExp(/^[0]{1}[5,6,7]{1}[0-9]{8}$/);
        //var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

        if (name.val() == "") {
            name.addClass("border-danger");
            $("#nc_error").html("<span class='text-danger'>S'il vous plaît entrer votre nom</span>");
            statusn = false;
        } else {
            name.removeClass("border-danger");
            $("#nc_error").html("");
            statusn = true;
        }
        if (adresse.val() == "") {
            adresse.addClass("border-danger");
            $("#a_error").html("<span class='text-danger'>S'il vous plaît entrer votre adresse</span>");
            statusa = false;
        } else {
            adresse.removeClass("border-danger");
            $("#a_error").html("");
            statusa = true;
        }
        if (!t_patt.test(telephone.val())) {
            telephone.addClass("border-danger");
            $("#t_error").html("<span class='text-danger'>Veuillez entrer un numero de telephone valide</span>");
            statust = false;
        } else {
            telephone.removeClass("border-danger");
            $("#t_error").html("");
            statust = true;
        }

        if (statusa == true && statusn == true && statust == true) {
            $.ajax({
                url: DOMAIN + "/includes/process.php",
                method: "POST",
                data: $("#remplir_info_form").serialize(),
                success: function (data) {
                    if (data == "UPDATED") {
                        alert("Votre Information est Enregister.!");
                    } else {
                        alert(data);
                    }
                }
            })
        }
    })

    //Edit Name
    $("body").delegate(".edit_name", "click", function () {

        var statusn = false;
        var name = $("#usernamen");
        if (name.val() == "" || name.val().length < 6) {
            name.addClass("border-danger");
            $("#pu_error").html("<span class='text-danger'>S'il vous plaît entrer le nom et le nom doit être plus de 6 caractères</span>");
            statusn = false;
        } else {
            name.removeClass("border-danger");
            $("#pu_error").html("");
            statusn = true;
        }
        var username = name.val();
        if (statusn == true) {
            $.ajax({
                url: DOMAIN + "/includes/process.php",
                method: "POST",
                data: {editName: 1, name: username},
                success: function (data) {
                    if (data == 1) {
                        alert("Votre Nom est bien Modifier!");
                        window.location.href = "";
                    } else {
                        alert("Il ya des errors dans votre entries!");
                    }
                }
            })
        }
    })
})
