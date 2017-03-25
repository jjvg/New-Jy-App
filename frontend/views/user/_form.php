<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            $form->field($model, 'status')->INPUT_TEXT()

            $form->field($model, 'rol_ID')->INPUT_TEXT()

            $form->field($model, 'Telefono')->INPUT_TEXT()

            $form->field($model, 'Puntos')->INPUT_TEXT()

            $form->field($model, 'Calificacion')->INPUT_TEXT()

            'Direccion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Dirección...','rows' => 6]],

            $form->field($model, 'username')->INPUT_TEXT(['maxlength' => 255])

            $form->field($model, 'password_hash')->INPUT_TEXT(['maxlength' => 255])

            $form->field($model, 'password_reset_token')->INPUT_TEXT(['maxlength' => 255])

            $form->field($model, 'email')->INPUT_TEXT(['maxlength' => 255])

            $form->field($model, 'Nombre')->INPUT_TEXT(['maxlength' => 255])

            $form->field($model, 'avatar')->INPUT_TEXT(['maxlength' => 255])

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
