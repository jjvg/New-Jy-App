<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\Publicidad $model
 */

$this->title = 'Create Publicidad';
$this->params['breadcrumbs'][] = ['label' => 'Publicidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicidad-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
