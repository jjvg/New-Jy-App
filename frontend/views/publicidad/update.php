<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\Publicidad $model
 */

$this->title = 'Update Publicidad: ' . ' ' . $model->publicidadID;
$this->params['breadcrumbs'][] = ['label' => 'Publicidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->publicidadID, 'url' => ['view', 'id' => $model->publicidadID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publicidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
