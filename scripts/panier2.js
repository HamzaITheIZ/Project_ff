$(document).ready(function () {

    alert('hello from panier2.js');
    
    
    $.ajax({
        url: 'control/chargePanier.php',
        data: {id: ''},
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            chargerPanier(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    });


    function chargerPanier(data) {
        var contenu = $('#contain');
        //contenu.addClass('tab-pane fade show active');
        var ligne;
        for (i = 0; i < data.length; i++) {
            ligne += '<tr>\n\
                        <td><img class="image" src="images\\'+data[i].photo+'" width="50" height="50" ></td>\n\
                        <td>'+data[i].nomPlat+'</td>\n\
                        <td>'+data[i].quantite+'</td>\n\
                        <td>'+data[i].prixTotal+'</td>\n\
                        <td><a href="#" title="commander"><span class="fas fa-money-check-alt opCom"></span></a></td>\n\
                        <td><a href="#" title="supprimer"><span class="fas fa-trash-alt opDel"></span></a></td>\n\
                        <td><a href="#" title="modifier"><span class="far fa-edit opEdi"></span></a></td>\n\
                      </tr>';
        }
        contenu.html(ligne);

    }


});