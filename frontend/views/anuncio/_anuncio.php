<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <?php
        $url = \Yii::getAlias('uploads/').$model->imagen;
        //echo "<img src=\"". $url ."\" width= 200 height= 300 >" ;
      //  . HtmlPurifier::process($model->imagen)."
        echo Html::img($url, ['alt'=>'Foto Clasificado','width'=> '100px']);
        ?>
        <div class="caption">
          <h3><?= Html::encode($model->Titulo) ?></h3>
          <p>...</p>
          <p><a href="#" class="btn btn-primary" role="button">Detalles</a> <a href="#" class="btn btn-default" role="button">Calificar</a></p>
        </div>
      </div>
    </div>
