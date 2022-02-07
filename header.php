<nav style="background-color: background: #15548aa3;" class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=$url;?>">
                <img width="180px"  src="<?=$url;?>img/nav-logo-removebg-preview.png" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="<?=$url;?>"role="button" >Accueil</a>
                </li>
                <li class="dropdown">
                    <a href="<?=$url;?>restaurant"   role="button">Restaurant</a>
                </li>
                <li class="dropdown">
                    <a href="<?=$url;?>menus-et-cartes"   role="button" >Menus et Cartes</a>

                </li>

                <li><a href="<?=$url;?>galerie"    >Galerie</a></li>
                <li><a href="<?=$url;?>contact">Contact</a></li>


                <li><a style="color: cyan" href="<?=$url;?>reservation">Réservation</a></li>

            </ul>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>