$(document).ready(function () {

    var DOMAIN = "http://localhost/project_ff";
    //alert('hello from panier2.js');

    var PrixTotale = 0;
    PrixTotale = PrixTotale * 1;

    chargerPanier();
    function chargerPanier() {
        var rows;
        var contenu = $('#contain');
        $.ajax({
            url: 'control/chargePanier.php',
            data: {id: ''},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var ligne;
                for (i = 0; i < data.length; i++) {
                    PrixTotale += data[i].prixTotal * 1;
                    ligne += '<tr>\n\
                        <td><img class="image" src="images\\' + data[i].photo + '" width="50" height="50" ></td>\n\
                        <td>' + data[i].nomPlat + '</td>\n\
                        <td><a href="#"  data-toggle="modal" data-target="#update_panier" eid =' + data[i].id + ' class="qe_panier">' + data[i].quantite + '&nbsp;<span class="far fa-edit opEdi">&nbsp;</span></a></td>\n\
                        <td>' + data[i].prixTotal + '</td>\n\
                        <td><a href="#" did =' + data[i].id + ' title="supprimer" class="del_panier"><span class="fas fa-trash-alt opDel"></span></a></td>\n\
                      </tr>';
                }
                contenu.html(ligne);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        })
        //contenu.addClass('tab-pane fade show active');
    }



    //Delete Commande
    $("body").delegate(".del_panier", "click", function () {
        var did = $(this).attr("did");
        if (confirm("Êtes-vous sûr ? Vous voulez supprimer!")) {
            $.ajax({
                url: DOMAIN + "/includes/process.php",
                method: "POST",
                data: {deletePanier: 1, id: did},
                success: function (data) {
                    if (data == "DELETED") {
                        alert("Le Plat est supprimé avec Succès");
                        chargerPanier();
                    } else {
                        alert(data);
                    }

                }
            })
        }
    })

    //Fill for update Panier Quantite
    $("body").delegate(".qe_panier", "click", function () {
        var eid = $(this).attr("eid");
        $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            dataType: "json",
            data: {updatePanier: 1, id: eid},
            success: function (data) {
                console.log(data);
                $("#id").val(data["id"]);
                $("#quantite").val(data["quantite"]);
                $("#prix").val(data["prix"]);
            }
        })
    })

    //Update Panier
    $("#update_panier_form").on("submit", function () {
        var status = false;


        var quantite = $("#quantite");
        var prixTotale = $("#prix");


        if (quantite.val() == "") {
            quantite.addClass("border-danger");
            $("#q_error").html("<span class='text-danger'>Veuillez Entrer une Quantite Valide</span>");
            status = false;
        } else {
            quantite.removeClass("border-danger");
            $("#q_error").html("");
            status = true;
        }

        if (status == true)
        {
            prixTotale.val(quantite.val() * prixTotale.val());
            $.ajax({
                url: DOMAIN + "/includes/process.php",
                method: "POST",
                data: $("#update_panier_form").serialize(),
                success: function (data) {
                    if (data == "UPDATED") {
                        alert("La Quantite est modifier.!");
                        chargerPanier();
                    } else {
                        alert(data);
                    }
                }
            })
        }
    })

    $("#quantite").keyup(function () {
        var quantite = $(this);
        if (isNaN(quantite.val())) {
            alert("S'il vous plaît entrer une Quantite valide");
            quantite.val("");
        } else if (quantite.val() < 0) {
            alert("Pardon ! La Quantite est un Entier Positive!");
            quantite.val("")
        }
    })


    $("#commandeBtn").on("click", function () {
        //alert(PrixTotale);
        if (confirm("Êtes-vous sûr de votre adresse?!")) {
            if (PrixTotale <= 150) {
                $.ajax({
                    url: DOMAIN + "/includes/process.php",
                    method: "POST",
                    data: {ajouterCommande: 1},
                    success: function (data) {
                        if (data == "COMMANDE_ADDED") {
                            alert("Votre commande a été effectué avec succès restez à l'écoute !");
                            window.location.href = "";
                        } else if (data == "EMPTY_CART") {
                            alert("Votre panier est vide! Essayez après le remplir..");
                        }
                    }
                })
            } else {
                alert("Vous avez demandé beaucoup de plas !! Vous ne pouvez pas effectuer sur réception, Vous devez payer d'avance! Est Merci!");
            }
        }
    })

    //Fill Historique
    fillCommande();
    function fillCommande() {
        $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            data: {fillCommande: 1},
            success: function (data) {
                $("#get_commande").html(data);
            }
        })
    }


    //Fill Information For PayPal Payment
    $("body").delegate(".paypal", "click", function () {
        //alert(PrixTotale);
        $("#montant").val(PrixTotale);
        //alert($("#montant").val());
    })


});