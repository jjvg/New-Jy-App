<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\Anuncio $model
 */

$this->title = 'Update Anuncio: ' . ' ' . $model->anuncioID;
$this->params['breadcrumbs'][] = ['label' => 'Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->anuncioID, 'url' => ['view', 'id' => $model->anuncioID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anuncio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
