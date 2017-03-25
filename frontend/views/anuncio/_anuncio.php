<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

    <div class="col-md-4">
      <div class="thumbnail">
        <?php
        $url = \Yii::getAlias('uploads/').$model->imagen;
        //echo "<img src=\"". $url . HtmlPurifier::process($model->foto)."\">" ;

        echo Html::img($url, ['alt'=>'Foto Clasificado']);
        ?>
        <div class="caption">
          <h3><?= Html::encode($model->Titulo) ?></h3>
          <p>...</p>
          <p><a href="#" class="btn btn-primary" role="button">Ver Detalles</a> <a href="#" class="btn btn-default" role="button">Agregar a Favoritos</a></p>
        </div>
      </div>
    </div>
