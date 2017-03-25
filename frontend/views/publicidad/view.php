<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var frontend\models\Publicidad $model
 */

$this->title = $model->publicidadID;
$this->params['breadcrumbs'][] = ['label' => 'Publicidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicidad-view">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>


    <?= DetailView::widget([
        'model' => $model,
        'condensed' => false,
        'hover' => true,
        'mode' => Yii::$app->request->get('edit') == 't' ? DetailView::MODE_EDIT : DetailView::MODE_VIEW,
        'panel' => [
            'heading' => $this->title,
            'type' => DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'publicidadID',
            'usuarioID',
            'Titulo',
            [
                'attribute' => 'Fecha_Inicial',
                'format' => [
                    'date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date']))
                        ? Yii::$app->modules['datecontrol']['displaySettings']['date']
                        : 'd-m-Y'
                ],
                'type' => DetailView::INPUT_WIDGET,
                'widgetOptions' => [
                    'class' => DateControl::classname(),
                    'type' => DateControl::FORMAT_DATE
                ]
            ],
            [
                'attribute' => 'Fecha_Final',
                'format' => [
                    'date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date']))
                        ? Yii::$app->modules['datecontrol']['displaySettings']['date']
                        : 'd-m-Y'
                ],
                'type' => DetailView::INPUT_WIDGET,
                'widgetOptions' => [
                    'class' => DateControl::classname(),
                    'type' => DateControl::FORMAT_DATE
                ]
            ],
            [
                'attribute' => 'Duracion',
                'format' => [
                    'time', (isset(Yii::$app->modules['datecontrol']['displaySettings']['time']))
                        ? Yii::$app->modules['datecontrol']['displaySettings']['time']
                        : 'H:i:s A'
                ],
                'type' => DetailView::INPUT_WIDGET,
                'widgetOptions' => [
                    'class' => DateControl::classname(),
                    'type' => DateControl::FORMAT_TIME
                ]
            ],
            'Enlace',
            'Imagen_Publicitaria',
            'status_publi',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->publicidadID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
