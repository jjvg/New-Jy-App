

<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use frontend\models\Anuncio;
/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\AnuncioSearch $searchModel
 */

$this->title = 'Bienvenido a Jy-App';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Header Carousel -->

<div class="anuncio-index">
  <div id="myCarousel" class="carousel slide"  data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!--Slides-->
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
              <div align="center"><img src="https://i.imgur.com/97FlKd2.jpg" class="" alt="First slide"></div>
              <div class="carousel-caption">
                  <h4>¡IPhone 7!</h4>
                  <br>
              </div>
          </div>
          <div class="carousel-item">
              <div align="center"><img src="https://i.imgur.com/RNZjqM1.jpg" class="" alt="Second slide"></div>
              <div class="carousel-caption">
                  <h4>¡Lo último en relojes!</h4>
                  <br>
              </div>
          </div>
          <div class="carousel-item">
              <div align="center"><img src="http://i.imgur.com/sg1vEqQ.jpg" class="" alt="Third slide"></div>
              <div class="carousel-caption">
                  <h4>Tecnología para ti!!</h4>
                  <br>
              </div>
          </div>
      </div>
      <!--/.Slides-->

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
      </a>
  </div>
<div class="body-content">
  <!-- Header Carousel -->

            <h1><?= Html::encode($this->title) ?>
            <a href="index.php?r=anuncio/lista" class="btn btn-primary" role="button">Ver Lista</a></h1>

<div class="row">

    <div class="col-md-8">
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
  </div>
</div>
