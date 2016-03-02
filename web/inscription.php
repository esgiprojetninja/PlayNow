<html>
<head>
    <title>Play Now !</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/grid.css">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/panel.css">
    <link rel="stylesheet" type="text/css" href="./css/button.css">
    <link rel="stylesheet" type="text/css" href="./css/icomoon.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <div class="grid-container">
        <div class="row">
            <div class="col-xs-2 center">
                <img src="./img/logo-pa.png" alt="Play Now" class="app-logo" height="100px" width="92px">
            </div>
            <div class="col-xs-9">
                <a href="#" class="icon">
                    <span class="icon-location"></span>
                    <span class="text">My location</span>
                </a>
                <a class="icon" href="#">
                    <span class="icon-search"></span>
                    <span class="text">Find a sport</span>
                </a>
                <a class="icon" href="#">
                    <span class="icon-user"></span>
                    <span class="text">My account</span>
                </a>
            </div>
            <div class="col-xs-1">
                <div class="dropdown icon">
                    <span class="icon-menu dropdown-icon"></span>
                    <ul class="dropdown-menu right">
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="grid-container">
    <div class="row">
        <nav class="col-sm-2 hidden-sm">
            <div class="panel">
                <div class="panel-heading">
                    <p class="panel-title">Events around you</p>
                </div>
                <div class="panel-body">
                    <div class="index-map" id="index-map"></div>
                </div>
                <div class="panel-footer">
                    <a href="">Not your neighbourghood ?</a>
                </div>
            </div>
        </nav>
            <section class="event inscription col-xs-8">
                <form action="">
                    <h1>Inscrivez-vous pour trouver votre rencontre sportive</h1>
                    <h2>Informations personnelles</h2>
                    <label for="lastname">Entrez votre nom : </label>
                    <input name="lastname" id="lastname" type="text"> <br/>
                    <label for="firstname">Entrez votre prénom : </label>
                    <input name="firstname" id="firstname" type="text"> <br/>
                    <label for="years">Entrez votre age : </label>
                    <input name="years" id="years" type="text"> <br/>
                    <h2>Autres informations</h2>
                    <label for="pseudo">Entrez votre pseudo : </label>
                    <input name="pseudo" id="pseudo" type="text"> <br/>
                    <label for="mail">Entrez votre e-mail : </label>
                    <input name="mail" id="mail" type="text"> <br/>
                    <label for="password">Entrez votre mot de passe : </label>
                    <input name="password" id="password" type="password"> <br/>
                    <label for="confirm">Confirmez votre mot de passe : </label>
                    <input name="confirm" id="confirm" type="password"> <br/>
                    <input type="submit" value="S'inscrire">
                </form>
            </section>
        <aside class="col-sm-2 hidden-sm">
            <div class="panel panel-primary2">
                <div class="panel-heading">
                    <h3 class="panel-title">Latest news</h3>
                </div>
                <div class="panel-body">
                    <div class="news-box">
                        <h4 class="box-title">Today <span class="title">BasketBall</span></h4>

                        <div class="content">
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page
                            avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les
                            années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser
                            un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est
                            aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été
                            popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages
                            du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page
                            de texte, comme Aldus PageMaker.
                        </div>
                        <div class="box-divider"></div>
                    </div>
                    <div class="news-box">
                        <h4 class="box-title">Today <span class="title">Soccer</span></h4>

                        <div class="content">
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page
                            avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les
                            années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser
                            un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est
                            aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été
                            popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages
                            du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page
                            de texte, comme Aldus PageMaker.
                        </div>
                        <div class="box-divider"></div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!-- END GRID CONTAINER -->
</div>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="./js/all.js"></script>
<script>
    function initMap() {
        var mapDiv = document.getElementById('index-map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
    }
    ;
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
</html>