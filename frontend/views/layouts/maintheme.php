<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\widgets\Menu;
use yii\data\ActiveDataProvider;
use frontend\models\Anuncio;
use yii\widgets\ListView;

$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo Html::encode(\Yii::$app->name); ?> </title>

     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?=$baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?=$baseUrl ?>/css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <link href="<?=$baseUrl ?>/css/style.css" rel="stylesheet">

    <style>
            body {
        background-color: white;
      }

      .primary-color-dark {
        background-color: #3C0756 !important;
      }

.btn.btn-primary {
  background-color: #8D7F90;
}

.list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
  background-color: #3C0756;
  border-color: #3C0756;
}
    </style>
</head>

<body>
<?php $this->beginBody() ?>

<header>

        <!--Navbar-->
        <nav class="navbar navbar-dark primary-color-dark">

            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                <i class="fa fa-bars"></i>
            </button>

            <div class="container">

                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="#" target="_blank"><?php echo Html::encode(\Yii::$app->name); ?></a>
                    <!--Links-->
                    <?php
                             echo Menu::widget([
                              'options' => [
                                "id"  => "nav",
                                "class" => "nav navbar-nav"
                              ],
                                'items' => [
                                  ['label' => 'Home', 'url' => ['site/index'], "options" => [ "class" => "nav-item"]],
                                  ['label' => 'About', 'url' => ['site/about'], "options" => [ "class" => "nav-item"]],
                                  ['label' => 'Contact', 'url' => ['site/contact'], "options" => [ "class" => "nav-item"]],
                                  ['label' => 'Unete', 'url' => ['site/signup'], "options" => [ "class" => "nav-item"], 'visible' => Yii::$app->user->isGuest],
                                  ['label' => 'Login', 'url' => ['site/login'], "options" => [ "class" => "nav-item"], 'visible' => Yii::$app->user->isGuest],

                                ],
                            ]);
                        ?>

                    <!--Search form-->
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Buscar">
                    </form>
                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->

    </header>

<main>

        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Main column-->
                <div class="col-md-8">

                    <!--First row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="divider-new">
                                <h2 class="h2-responsive"><?php echo Html::encode(\Yii::$app->name); ?></h2>
                            </div>
                            <!--Carousel Wrapper-->
                            <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                </ol>
                                <!--/.Indicators-->

                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div align="center"> <img src="https://i.imgur.com/97FlKd2.jpg" class="" alt="First slide"></div>
                                        <div class="carousel-caption">
                                            <h4>¡IPhone 7!</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div align="center"> <img src="https://i.imgur.com/RNZjqM1.jpg" class="" alt="Second slide"></div>
                                        <div class="carousel-caption">
                                            <h4>¡Lo último en relojes!</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div align="center"> <img src="http://i.imgur.com/sg1vEqQ.jpg" class="" alt="Third slide"></div>
                                        <div class="carousel-caption">
                                            <h4>Tecnología para ti!!</h4>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Slides-->

                                <!--Controls-->
                                <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                    <span class="icon-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                    <span class="icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                    </div>
                    <!--/.First row-->
                    <br>
                    <hr class="extra-margins">
                    <div class="body-content">
                    <!--Second row-->
                    <div class="row">

                            <h1><a href="index.php?r=anuncio/lista" class="btn btn-primary" role="button">Ver Lista</a></h1>
                        <!--Third columnn (Anuncios)-->

                                <?php
                                  $dataProvider = new ActiveDataProvider([
                                      'query' => Anuncio::find(),
                                      'pagination' => [
                                          'pageSize' => 20,
                                      ],
                                  ]);
                                  echo ListView::widget([
                                      'dataProvider' => $dataProvider,
                                      'itemView' => '..//anuncio/_anuncio',
                                  ]);
                                ?>

                    </div>
                  </div>
                    <!--/.Second row

                    <div class="row">
                      <div class="col-md-12">
                         <?php// echo $content; ?>
                      </div>
                    </div>-->

                </div>
                <!--/.Main column-->

                <!--Sidebar-->
                <div class="col-md-4">

                    <div class="widget-wrapper">
                        <h4>Categorías:</h4>
                        <br>
                        <div class="list-group">
                            <a href="#" class="list-group-item active">Electrónica</a>
                            <a href="#" class="list-group-item">Zapatos</a>
                            <a href="#" class="list-group-item">Hogar</a>
                            <a href="#" class="list-group-item">Vehículos</a>
                            <a href="#" class="list-group-item">Fitness</a>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->



            </div>
        </div>
        <!--/.Main layout-->

    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only primary-color-dark">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 col-md-offset-1">
                    <h6 class="title">Acerca de JY-APP</h6>
                    <p>Pagina web diseñada para publicar anuncios clasificados </p>

                    <p>Desarrollado por:
                    José Vaamonde - Alexis Goyo - Yosbely Ramos - Pedro Briceño </p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-md-2 col-md-offset-1">
                    <h6 class="title">Información útil</h6>
                    <ul>
                        <li><a href="#!">Consejos de seguridad</a></li>
                        <li><a href="#!">Términos y condiciones</a></li>
                   </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-md-2">
                    <h6 class="title">Redes sociales</h6>
                    <ul>
                        <li><a href="#!">Twitter</a></li>
                        <li><a href="#!">Facebook</a></li>
                        <li><a href="#!">Instagram</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-md-2">
                    <h6 class="title">Ayuda</h6>
                    <ul>
                        <li><a href="#!">Publicidad</a></li>
                        <li><a href="#!">Premios</a></li>
                        <li><a href="#!">Anuncios</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4><?php echo Html::encode(\Yii::$app->name); ?></h4>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
               Copyright &copy; 2017 - Anuncios clasificados en Venezuela

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?=$baseUrl ?>/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?=$baseUrl ?>/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?=$baseUrl ?>/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?=$baseUrl ?>/js/mdb.min.js"></script>


    <script>
      // ugly MDB fix http://i.imgur.com/WFl7fkh.jpg
      $(function(){
        $("#nav li a").addClass("nav-link");
      });
    </script>


<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
