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

$this->title = 'Anuncios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-index">
    <div class="page-header">
            <h1><?= Html::encode($this->title) ?>
            <a href="index.php?r=anuncio/lista" class="btn btn-primary" role="button">Ver Lista</a></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* echo Html::a('Create Anuncio', ['create'], ['class' => 'btn btn-success'])*/  ?>
    </p>

    <?php

    $dataProvider = new ActiveDataProvider([
        'query' => Anuncio::find(),
        'pagination' => [
            'pageSize' => 20,
        ],
    ]);
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_anuncio',
    ]);
     ?>

</div>
