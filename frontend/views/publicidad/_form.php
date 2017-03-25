<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var frontend\models\Publicidad $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="publicidad-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'usuarioID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Usuario ID...']],

            'Titulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Titulo...', 'maxlength' => 50]],

            'Fecha_Inicial' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Fecha_Final' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Duracion' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_TIME]],

            'Enlace' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Enlace...', 'maxlength' => 50]],

            'Imagen_Publicitaria' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Imagen  Publicitaria...', 'maxlength' => 50]],

            'status_publi' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status Publi...']],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
