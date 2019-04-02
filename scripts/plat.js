$(document).ready(function () {
    alert('Hello from plat.js');

    $.ajax({
        url: 'control/chargePlat.php',
        data: {id: ''},
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            remplirTous(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    });

    function remplirTous(data) {
        var contenu = $('#v-pills-1');
        //contenu.addClass('tab-pane fade show active');
        var ligne = '<div class="row">';
        for (i = 0; i < data.length; i++) {
            //   ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '">Modifer</button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            //ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '"><a style="text-decoration:none;" href="#infos">Modifer</a></button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            ligne += '<div class="col-md-4 text-center">\n\
                            <div class="menu-wrap">\n\
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/' + data[i].photo + ');"></a>\n\
                                <div class="text"><h3>\n\
                                    <a href="#">' + data[i].nom + '</a></h3>\n\
                                    <p>' + data[i].description + '</p>\n\
                                    <p class="price"><span>' + data[i].prix + ' dh</span></p>\n\
                                    <p><a href="panier.php"  class="btn btn-white btn-outline-white addToCart" indice="' + data[i].id + '">Ajouter au panier</a></p>\n\
                                </div>\n\
                            </div>\n\
                    </div>';
        }
        contenu.html(ligne);
    }
    function remplirOther(data) {
        var contenu = $('#v-pills-5');
        contenu.addClass('tab-pane fade show active');
        var ligne = '<div class="row">';
        for (i = 0; i < data.length; i++) {
            //   ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '">Modifer</button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            //ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '"><a style="text-decoration:none;" href="#infos">Modifer</a></button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            ligne += '<div class="col-md-4 text-center">\n\
                            <div class="menu-wrap">\n\
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/' + data[i].photo + ');"></a>\n\
                                <div class="text"><h3>\n\
                                    <a href="#">' + data[i].nom + '</a></h3>\n\
                                    <p>' + data[i].description + '</p>\n\
                                    <p class="price"><span>' + data[i].prix + '</span></p>\n\
                                    <p><a href="panier.php"  class="btn btn-white btn-outline-white addToCart" indice="' + data[i].id + '">Ajouter au panier</a></p>\n\
                                </div>\n\
                            </div>\n\
                    </div>';
        }
        contenu.html(ligne);
    }

    function remplirBurger(data) {
        var contenu = $('#v-pills-4');
        contenu.addClass('tab-pane fade show active');
        var ligne = '<div class="row">';
        for (i = 0; i < data.length; i++) {
            //   ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '">Modifer</button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            //ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '"><a style="text-decoration:none;" href="#infos">Modifer</a></button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            ligne += '<div class="col-md-4 text-center">\n\
                            <div class="menu-wrap">\n\
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/' + data[i].photo + ');"></a>\n\
                                <div class="text"><h3>\n\
                                    <a href="#">' + data[i].nom + '</a></h3>\n\
                                    <p>' + data[i].description + '</p>\n\
                                    <p class="price"><span>' + data[i].prix + '</span></p>\n\
                                    <p><a href="panier.php"  class="btn btn-white btn-outline-white addToCart" indice="' + data[i].id + '">Ajouter au panier</a></p>\n\
                                </div>\n\
                            </div>\n\
                    </div>';
        }
        contenu.html(ligne);
    }


    function remplirPizza(data) {
        var contenu = $('#v-pills-2');
        contenu.addClass('tab-pane fade show active');
        var ligne = '<div class="row">';
        for (i = 0; i < data.length; i++) {
            //   ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '">Modifer</button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            //ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '"><a style="text-decoration:none;" href="#infos">Modifer</a></button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            ligne += '<div class="col-md-4 text-center">\n\
                            <div class="menu-wrap">\n\
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/' + data[i].photo + ');"></a>\n\
                                <div class="text"><h3>\n\
                                    <a href="#">' + data[i].nom + '</a></h3>\n\
                                    <p>' + data[i].description + '</p>\n\
                                    <p class="price"><span>' + data[i].prix + '</span></p>\n\
                                    <p><a href="panier.php"  class="btn btn-white btn-outline-white addToCart" indice="' + data[i].id + '">Ajouter au panier</a></p>\n\
                                </div>\n\
                            </div>\n\
                    </div>';
        }
        contenu.html(ligne);
    }
    function remplirPasta(data) {
        var contenu = $('#v-pills-2');
        contenu.addClass('tab-pane fade show active');
        var ligne = '<div class="row">';
        for (i = 0; i < data.length; i++) {
            //   ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '">Modifer</button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            //ligne += '<tr><td><img class="img-circle" src="photos\\' + data[i].photo + '" width="50" height="50" /><td>' + data[i].nom + '</td><td>' + data[i].prix + '</td><td class="text-center"><button class="btn btn-primary" indice="' + data[i].id + '"><a style="text-decoration:none;" href="#infos">Modifer</a></button><button class="btn btn-danger" indice="' + data[i].id + '">Supprimer</button></td></tr>';
            ligne += '<div class="col-md-4 text-center">\n\
                            <div class="menu-wrap">\n\
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/' + data[i].photo + ');"></a>\n\
                                <div class="text"><h3>\n\
                                    <a href="#">' + data[i].nom + '</a></h3>\n\
                                    <p>' + data[i].description + '</p>\n\
                                    <p class="price"><span>' + data[i].prix + '</span></p>\n\
                                    <p><a href="panier.php"  class="btn btn-white btn-outline-white addToCart" indice="' + data[i].id + '">Ajouter au panier</a></p>\n\
                                </div>\n\
                            </div>\n\
                    </div>';
        }
        contenu.html(ligne);
    }


    $('#v-pills-1-tab').click(function () {
        // alert('ALL clicked');
        $.ajax({
            url: 'control/chargePlat.php',
            data: {id: ''},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                remplirTous(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });

    });
    $('#v-pills-4-tab').click(function () {
        // alert('Burger cllicked');
        $.ajax({
            url: 'control/chargeBurger.php',
            data: {id: ''},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                remplirBurger(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });

    });

    $('#v-pills-2-tab').click(function () {
        //alert('PIZZA clicked');

        $.ajax({
            url: 'control/chargePizza.php',
            data: {id: ''},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                remplirPizza(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });

    });

    $('#v-pills-3-tab').click(function () {
        // alert('Pasta cllicked');

        $.ajax({
            url: 'control/chargePasta.php',
            data: {id: ''},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                // alert("succ");
                remplirPasta(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });

    });

    $('#v-pills-5-tab').click(function () {
        //alert('Other cllicked');

        $.ajax({
            url: 'control/chargeOther.php',
            data: {id: ''},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                // alert("succ");
                remplirOther(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });

    });



//    $('#addToCart').click(function(){
//        alert('cart cllicked');
//
//    });


//    $('#v-pills-1').on('click', '.addToCart', function () {
//        alert('cart clicked');
//        var id = $(this).attr('indice');
//        //alert(id);
//
//    
//
//
//
////        var conf = confirm("voulez-vous vraiment supprimer ?");
////        if (conf) {
////            var id = $(this).attr('indice');
////            //$('#nom').val(id);
////            $.ajax({
////                url: 'control/removePlat.php',
////                data: {id: id},
////                type: 'POST',
////                success: function (data, textStatus, jqXHR) {
////                    remplir(data);
////                },
////                error: function (jqXHR, textStatus, errorThrown) {
////
////                }
////            });
////        }
//    });



});