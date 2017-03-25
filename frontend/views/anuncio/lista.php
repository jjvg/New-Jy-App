<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\AnuncioSearch $searchModel
 */

$this->title = 'Anuncios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anuncio-index">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?>
            <a href="index.php?r=anuncio" class="btn btn-primary" role="button">Ver Mosaico</a>
        </h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* echo Html::a('Create Anuncio', ['create'], ['class' => 'btn btn-success'])*/  ?>
    </p>

    <?php Pjax::begin(); echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'imagen',
            //'anuncioID',
            //'usuarioID',
            //'sub_categoriaID',
            'Titulo',
            //'Clasificacion',
            //'Descripcion:ntext',
            'DireccionVendedor',
            'Cantidad_Articulo',
//            'Calificacion_Vendedor',
//            ['attribute' => 'Fecha_Publicacion','format' => ['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']],
            ['attribute' => 'Fecha_Caducidad','format' => ['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']],
            // 'foto',
                [
                'attribute'=>'imagen',
                'label'=>'Imagen',
                'format'=>'html',
                'value' => function ($data) {
                $url = \Yii::getAlias('uploads/').$data['imagen'];
                return Html::img($url, ['alt'=>'myImage','width'=>'70','height'=>'50']);
                                            }
                ],

//            'categoriaID',

//            'status_anuncio',

            /*[
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
                            Yii::$app->urlManager->createUrl(['anuncio/view', 'id' => $model->anuncioID, 'edit' => 't']),
                            ['title' => Yii::t('yii', 'Edit'),]
                        );
                    }
                ],
            ],*/
        ],
        'responsive' => true,
        'hover' => true,
        'condensed' => true,
        'floatHeader' => true,

        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i> '.Html::encode($this->title).' </h3>',
            'type' => 'info',
            //'before' => Html::a('<i class="glyphicon glyphicon-plus"></i> Add', ['create'], ['class' => 'btn btn-success']),
            'after' => Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset List', ['index'], ['class' => 'btn btn-info']),
            'showFooter' => false
        ],
    ]); Pjax::end(); ?>

</div>
