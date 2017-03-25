<?php

namespace frontend\models;
use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "anuncio".
 *
 * @property integer $anuncioID
 * @property integer $usuarioID
 * @property integer $sub_categoriaID
 * @property string $Titulo
 * @property string $Clasificacion
 * @property string $Descripcion
 * @property string $DireccionVendedor
 * @property integer $Cantidad_Articulo
 * @property integer $Calificacion_Vendedor
 * @property string $Fecha_Publicacion
 * @property string $Fecha_Caducidad
 * @property integer $categoriaID
 * @property string $imagen
 * @property integer $status_anuncio
 */
class Anuncio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     const STATUS_DELETED = 0;
     const STATUS_ACTIVE = 10;
    public static function tableName()
    {
        return 'anuncio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuarioID', 'sub_categoriaID', 'Titulo', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Fecha_Publicacion', 'Fecha_Caducidad', 'categoriaID', 'imagen', 'status_anuncio'], 'required'],
            [['usuarioID', 'sub_categoriaID', 'Cantidad_Articulo', 'Calificacion_Vendedor', 'categoriaID','status_anuncio' ], 'integer'],
            [['Descripcion'], 'string'],
            [['Fecha_Publicacion', 'Fecha_Caducidad'], 'safe'],
            [['Titulo'], 'string', 'max' => 50],
            [['Clasificacion'], 'string', 'max' => 10],
            [['DireccionVendedor'], 'string', 'max' => 255],
            [['imagen'], 'file', 'checkExtensionByMimeType' => false,'extensions' => 'png, jpg'],
            ['status_anuncio', 'default', 'value' => self::STATUS_ACTIVE],
            ['status_anuncio', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
          'anuncioID' => 'Codigo Anuncio',
          'usuarioID' => 'Codigo Vendedor',
          'sub_categoriaID' => 'Sub Categoria del Anuncio ',
          'Titulo' => 'Titulo',
          'Clasificacion' => 'Clasificacion',
          'Descripcion' => 'Descripcion',
          'DireccionVendedor' => 'Direccion Vendedor',
          'Cantidad_Articulo' => 'Cantidad  Articulo',
          'Calificacion_Vendedor' => 'Calificacion  Vendedor',
          'Fecha_Publicacion' => 'Fecha  Publicacion',
          'Fecha_Caducidad' => 'Fecha  Caducidad',
          'categoriaID' => 'Categoria del Anuncio ',
          'imagen' => 'Imagen Principal del Anuncio',
          'status_anuncio' => 'Status Anuncio',
        ];
    }
    public function upload()
    {
        if ($this->validate())
        {
            $this->imagen->saveAs('uploads/' . $this->imagen->baseName . '.' . $this->imagen->extension);
            return true;
        } else
        {
            return false;
        }
    }
}
