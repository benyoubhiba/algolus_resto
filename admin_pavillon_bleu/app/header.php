
<!-- ##### SIDEBAR LOGO ##### -->
<div class="kt-sideleft-header">
    <div class="kt-logo"><a href="<?=$url?>app/index.php">Algolus Resto</a></div>
    <div id="ktDate" class="kt-date-today"></div>
    <div class="input-group mg-t-20 mg-l-10 ">
        <a href="" target="_blank"><i class="fa fa-globe"></i> Accéder à votre site web</a>
        </span>
    </div><!-- input-group -->
</div><!-- kt-sideleft-header -->

<!-- ##### SIDEBAR MENU ##### -->
<div class="kt-sideleft">

    <ul class="nav kt-sideleft-menu">


        <li class="nav-item ">
            <a href="" class="nav-link with-sub <?=$active_acc?>">
                <i class="icon ion-ios-home-outline"></i>
                <span>Menus & cartes</span>
            </a>
            <ul class="nav-sub">
                <li class="nav-item"><a href="<?=$url?>app/menu/cartes.php" class="nav-link">liste des cartes </a></li>
<!--                <li class="nav-item"><a href="--><?//=$url?><!--app/accueil/services.php" class="nav-link">neuveaux menu</a></li>-->
            </ul>
        </li>


        <?php
        if ($profil=='admin'){
            ?>
            <li class="nav-item ">
                <a href="" class="nav-link with-sub <?=$active_user?>">
                    <i class="icon ion-person-stalker"></i>
                    <span>Gestion des utilisateurs</span>
                </a>
                <ul class="nav-sub">
                    <li class="nav-item"><a href="<?=$url?>app/utilisateur/ajouter-utilisateur.php" class="nav-link">Ajouter un utilisateur</a></li>
                    <li class="nav-item"><a href="<?=$url?>app/utilisateur/liste-utilisateurs.php" class="nav-link">Liste des utilisateurs</a></li>

                </ul>
            </li><!-- nav-item -->
            <?php
        }
        ?>
    </ul>
</div><!-- kt-sideleft -->


<!-- ##### HEAD PANEL ##### -->
<div class="kt-headpanel">
    <div class="kt-headpanel-left">
        <a id="naviconMenu" href="" class="kt-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconMenuMobile" href="" class="kt-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
    </div><!-- kt-headpanel-left -->

    <div class="kt-headpanel-right">
        <div class="dropdown dropdown-profile">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                <img src="<?=$url?>img/profil.png" class="wd-32 rounded-circle" alt="">
                <span class="logged-name"><span class="hidden-xs-down"><?php echo $iduser; ?></span> <i class="fa fa-angle-down mg-l-3"></i></span>
            </a>
            <div class="dropdown-menu wd-200">
                <ul class="list-unstyled user-profile-nav">
                    <li><a href="<?=$url?>app/utilisateur/profil.php"><i class="icon ion-ios-person-outline"></i>Mon compte</a></li>
                    <!--                    <li><a href="page-notfound.html"><i class="icon ion-ios-folder-outline"></i> Mes articles</a></li>-->
                    <li><a href="<?=$url?>configuration/session-verification.php?decon"><i class="icon ion-power"></i> Se déconnecter</a></li>
                </ul>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- kt-headpanel-right -->
</div><!-- kt-headpanel -->
