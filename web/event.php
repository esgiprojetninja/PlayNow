    <html>
    <head>
        <title>Play Now | Get wet motherfucker !</title>
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
                <?php
                if(!isset($_GET['idEvent'])){
                    ?>
                    <section class="timeline col-sm-8">
                        <article class=" event">
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="./img/football-icon.svg" alt="Sport Picture" class="sport-picture">
                                </div>
                                <div class="col-xs-10">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <h2 class="title-box">
                                                Event title
                                                <span class="author">Created by Carter</span>
                                            </h2>
                                            <span class="icon-calendar"></span>Today - 7 pm
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="col-xs-4">
                                                <span class="icon-facebook icon-mt-circle icon-mt-facebook"><a href="#"></a></span>
                                            </div>
                                            <div class="col-xs-4">
                                                <span class="icon-twitter icon-mt-circle icon-mt-twitter"><a href="#"></a></span>
                                            </div>
                                            <div class="col-xs-4">
                                                <span class="icon-google icon-mt-circle icon-mt-google"><a href="#"></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum sodales ante at sagittis. Morbi vitae nisi quis lorem fringilla hendrerit id vel ante. Ut justo tortor, sodales nec tempus vel, viverra sodales sapien. Integer bibendum lacus sed dignissim porttitor. Nulla a molestie lorem. Nulla quis condimentum augue. Sed tincidunt tristique lectus sit amet convallis.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="event">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>Location</h2>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11193.801284291674!2d4.3901162!3d45.4607318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8082a74595924a0a!2sStade+Geoffroy-Guichard!5e0!3m2!1sfr!2sfr!4v1456770844903" id="location-map" allowfullscreen></iframe>
                                </div>
                            </article>
                            <article class="event">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2>Participants</h2>
                                        <div class="row">
                                            <div class="col-xs-2 text-center">
                                                <p>13 participants</p>
                                            </div>
                                            <div class="col-xs-4 nb-users">
                                                <div class="col-xs-2" >
                                                    <img src="./img/user-icon-no-circle.png" alt="User #">
                                                </div>
                                                <div class="col-xs-2" >
                                                    <img src="./img/user-icon-no-circle.png" alt="User #">
                                                </div>
                                                <div class="col-xs-2" >
                                                    <img src="./img/user-icon-no-circle.png" alt="User #">
                                                </div>
                                                <div class="col-xs-2" >
                                                    <img src="./img/user-icon-no-circle.png" alt="User #">
                                                </div>
                                                <div class="col-xs-2" >
                                                    <img src="./img/user-icon-no-circle.png" alt="User #">
                                                </div>
                                                <div class="col-xs-2" >
                                                    <img src="./img/user-icon-no-circle.png" alt="User #">
                                                </div>
                                            </div>
                                            <div class="col-xs-4 number-participants" >
                                                <span>+ 7</span>
                                            </div>        
                                            <div class="text-right btn-box" >
                                                <button type="button" class="btn btn-primary">
                                                    Join now !
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                        <?php
                    }else{
                        ?>
                        <section class="timeline col-sm-8">
                            <article class=" event">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <img src="./img/basketball-icon.svg" alt="Sport Picture" class="sport-picture">
                                    </div>
                                    <div class="col-xs-10">
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2 class="title-box">
                                                    Event title
                                                    <span class="author">Created by GoRFy</span>
                                                </h2>
                                                <span class="icon-calendar"></span>Tomorrow - 10 am
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="col-xs-4">
                                                    <span class="icon-facebook icon-mt-circle icon-mt-facebook"><a href="#"></a></span>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="icon-twitter icon-mt-circle icon-mt-twitter"><a href="#"></a></span>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="icon-google icon-mt-circle icon-mt-google"><a href="#"></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum sodales ante at sagittis. Morbi vitae nisi quis lorem fringilla hendrerit id vel ante. Ut justo tortor, sodales nec tempus vel, viverra sodales sapien. Integer bibendum lacus sed dignissim porttitor. Nulla a molestie lorem. Nulla quis condimentum augue. Sed tincidunt tristique lectus sit amet convallis.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="event">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2>Location</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.363104325095!2d2.3703365!3d48.83221229999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6722163ba8ac9%3A0xaca5d6a40273fd2b!2s8+Rue+Duchefdelaville%2C+75013+Paris!5e0!3m2!1sfr!2sfr!4v1440333513927" id="location-map" allowfullscreen></iframe>
                                        
                                    </div>
                                </article>
                                <article class="event">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2>Participants</h2>
                                            <div class="row">
                                                <div class="col-xs-2 text-center">
                                                    <p>0 participant</p>
                                                </div>
                                                <div class="text-right btn-box" >
                                                    <button type="button" class="btn btn-primary">
                                                        Join now !
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                            <?php
                        }
                        ?>
                        <aside class="col-sm-2 hidden-sm">
                            <div class="panel panel-primary2">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Latest news</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="news-box">
                                        <h4 class="box-title">Today <span class="title">BasketBall</span></h4>
                                        <div class="content">
                                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                                        </div>
                                        <div class="box-divider"></div>
                                    </div>
                                    <div class="news-box">
                                        <h4 class="box-title">Today <span class="title">Soccer</span></h4>
                                        <div class="content">
                                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                                        </div>
                                        <div class="box-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div> <!-- END GRID CONTAINER -->
                </div>
                <footer>
                    <div class="grid-container">
                        <div class="row">
                            <div class="col-xs-5 footer-left">
                                 <a href="#" class="icon">
                                    <span class="text">© 2016 Play Now</span>
                                </a>
                                <a href="#" class="icon">
                                    <span class="icon-facebook2"></span>
                                </a>
                                <a href="#" class="icon">
                                    <span class="icon-twitter"></span>
                                </a>
                            </div>
                            <div class="col-xs-7 footer-right text-right">
                                <a href="#" class="icon">
                                    <span class="text">Imprit</span>
                                </a>
                                <a class="icon" href="#">
                                    <span class="text">Terms</span>
                                </a>
                                <a class="icon" href="#">
                                    <span class="text">Staff</span>
                                </a>
                                <a class="icon" href="#">
                                    <span class="text">Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>

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
            };
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
            </html>