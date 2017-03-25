<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\VentasUsuario $model
 */

$this->title = 'Update Ventas Usuario: ' . ' ' . $model->ventas_UsuarioID;
$this->params['breadcrumbs'][] = ['label' => 'Ventas Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ventas_UsuarioID, 'url' => ['view', 'id' => $model->ventas_UsuarioID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ventas-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
