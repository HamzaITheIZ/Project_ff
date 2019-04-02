$(document).ready(function () {
    alert('hello from panier.js');

    $('#v-pills-1').on('click', '.addToCart', function () {
        alert('cart clicked');
        var id = $(this).attr('indice');
        var photo = "";
        var nomPlat = "";
        var quantite = 1;
        var prixTotal = 0;
        alert(id);

        $.ajax({
            url: 'control/loadPlat.php',
            data: {id: id},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                //alert('hello from loadPlat success ');
                photo = data.photo;
                nomPlat = data.nom;
                prixTotal = data.prix;
                console.log('from load==> ' + photo + ' ' + nomPlat + ' ' + prixTotal + ' ' + quantite);
                creerPanier(photo, nomPlat, quantite, prixTotal);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('load plat error');
            }
        });


        function creerPanier(photo, nomPlat, quantite, prixTotal) {
            console.log('from creer panier==> ' + photo + ' ' + nomPlat + ' ' + prixTotal + ' ' + quantite);

            $.ajax({
                url: 'control/addPanier.php',
                data: {photo: photo, nomPlat: nomPlat, quantite: quantite, prixTotal: prixTotal},
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    //console.log(data.nomPlat);
                    console.log('panier ajouté');

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('error ajoute de panier');
                }
            });
        }




//        var code = $('#code').val();
//            var nom = $('#nom').val();
//            $.ajax({
//                url: 'controller/addFonction.php',
//                data: {code: code, nom: nom},
//                type: 'POST',
//                success: function (data, textStatus, jqXHR) {
//                    remplir(data);
//                    $('#code').val('');
//                    $('#nom').val('');
//
//                },
//                error: function (jqXHR, textStatus, errorThrown) {
//                    console.log('error');
//                }
//            });




//        var conf = confirm("voulez-vous vraiment supprimer ?");
//        if (conf) {
//            var id = $(this).attr('indice');
//            //$('#nom').val(id);
//            $.ajax({
//                url: 'control/removePlat.php',
//                data: {id: id},
//                type: 'POST',
//                success: function (data, textStatus, jqXHR) {
//                    remplir(data);
//                },
//                error: function (jqXHR, textStatus, errorThrown) {
//
//                }
//            });
//        }
    });
    
    


});