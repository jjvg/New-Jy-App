<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\PublicidadSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="publicidad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'publicidadID') ?>

    <?= $form->field($model, 'usuarioID') ?>

    <?= $form->field($model, 'Titulo') ?>

    <?= $form->field($model, 'Fecha_Inicial') ?>

    <?= $form->field($model, 'Fecha_Final') ?>

    <?php // echo $form->field($model, 'Duracion') ?>

    <?php // echo $form->field($model, 'Enlace') ?>

    <?php // echo $form->field($model, 'Imagen_Publicitaria') ?>

    <?php // echo $form->field($model, 'status_publi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
