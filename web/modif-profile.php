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
        <section class="timeline col-sm-8">
            <article class="event">
                <div class="row">
                    <div class="col-xs-2">
                        <img src="./img/user-icon.png" alt="User Picture" class="user-picture">
                    </div>
                    <div class="col-xs-10">
                        <div class="row">
                            <div class="col-xs-8">
                                <h2 class="title-box">
                                    John Doe
                                    <span class="location">
                                        <span class="icon-location"></span> Paris
                                    </span>
                                </h2>
                            </div>

                        </div>
                        <div class="event-description">
                            <form action="modif-profile.php" method="post">
                                <p>Write something about you : <textarea rows="1" cols="75" placeholder="Ceci est une petite description me concernant blabla bla, j'aime blabla bla et je suis sympa."></textarea></p>
                                <p>Select your birthdate : <input type="date" name="birth"> </p>
                                <p>Enter your email adress :  <input type="email" name="email-address" placeholder="john-doe@gmail.com"> </p>
                                <span class="list-selection">
                                    <ul>Select your disponibilities :
                                        <li> <input type="checkbox" name="day" value="Monday"> Monday </li>
                                        <li> <input type="checkbox" name="day" value="Thuesday"> Thuesday </li>
                                        <li> <input type="checkbox" name="day" value="Wednesday"> Wednesday </li>
                                        <li> <input type="checkbox" name="day" value="Thursday"> Thursday </li>
                                        <li> <input type="checkbox" name="day" value="Friday"> Friday </li>
                                        <li> <input type="checkbox" name="day" value="Saturday"> Saturday </li>
                                        <li> <input type="checkbox" name="day" value="Sunday"> Sunday </li>
                                </span>
                                <span class="list-selection">
                                    <ul>Select your sports :
                                        <li> <input type="checkbox" name="sport" value="Football"> Football </li>
                                        <li> <input type="checkbox" name="sport" value="Golf"> Golf </li>
                                        <li> <input type="checkbox" name="sport" value="Tennis"> Tennis </li>
                                        <li> <input type="checkbox" name="sport" value="Basketball"> Basketball </li>
                                        <li> <input type="checkbox" name="sport" value="Handball"> Handball </li>
                                        <li> <input type="checkbox" name="sport" value="Baseball"> Baseball </li>
                                        <li> <input type="checkbox" name="sport" value="Runing"> Runing </li>
                                        <li> <input type="checkbox" name="sport" value="Climbing"> Climbing </li>
                                        <li> <input type="checkbox" name="sport" value="Montainbike"> Montainbike </li>
                                        <li> <input type="checkbox" name="sport" value="Crossfit"> Crossfit </li>
                                        <li> <input type="checkbox" name="sport" value="Ping-Pong"> Ping-Pong </li>
                                        <li> <input type="checkbox" name="sport" value="Pétanque"> Pétanque </li>
                                    </ul>
                                </span>
                                <span class="buttons-form">
                                    <button type="submit"class="btn btn-primary"> Validate modificarion </button>
                                    <button type="reset"class="btn btn-primary"> Reset </button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <aside class="col-sm-2 hidden-sm">
            <div class="panel panel-primary2">
                <div class="panel-heading">
                    <h3 class="panel-title">Feedbacks</h3>
                </div>
                <div class="panel-body">
                    <div class="news-box">
                        <h4 class="box-title">Today <span class="title">Billy</span> <span class="notation">4/5</span> </h4>
                        <div class="content">
                            J'ai joué avec ce joueur à de nombreuses reprises, il est très sérieux et ses évènements sont très bien organisés.
                        </div>
                        <div class="box-divider"></div>
                    </div>
                    <div class="news-box">
                        <h4 class="box-title">Yesterday <span class="title">Joel</span> <span class="notation">3/5</span> </h4>
                        <div class="content">
                            J'ai joué avec ce joueur à de nombreuses reprises, bof.
                        </div>
                        <div class="box-divider"></div>
                    </div>
                    <div class="news-box">
                        <h4 class="box-title">One week ago <span class="title">Damien</span> <span class="notation">4/5</span> </h4>
                        <div class="content">
                            J'ai joué avec ce joueur à de nombreuses reprises, il est très sérieux et ses évènements sont très bien organisés.
                        </div>
                        <div class="box-divider"></div>
                    </div>
                    <div class="news-box">
                        <h4 class="box-title">One month ago <span class="title">Cécile</span> <span class="notation">4/5</span> </h4>
                        <div class="content">
                            J'ai joué avec ce joueur à de nombreuses reprises, il est très sérieux et ses évènements sont très bien organisés.
                        </div>
                        <div class="box-divider"></div>
                    </div>
                </div>
            </div>
        </aside>
    </div> <!-- END GRID CONTAINER -->
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
    };
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
</html>