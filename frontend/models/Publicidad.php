<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "publicidad".
 *
 * @property integer $publicidadID
 * @property integer $usuarioID
 * @property string $Titulo
 * @property string $Fecha_Inicial
 * @property string $Fecha_Final
 * @property string $Duracion
 * @property string $Enlace
 * @property string $Imagen_Publicitaria
 * @property integer $status_publi
 */
class Publicidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publicidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuarioID', 'Titulo', 'Fecha_Inicial', 'Fecha_Final', 'Duracion', 'Enlace', 'Imagen_Publicitaria', 'status_publi'], 'required'],
            [['usuarioID', 'status_publi'], 'integer'],
            [['Fecha_Inicial', 'Fecha_Final', 'Duracion'], 'safe'],
            [['Titulo', 'Enlace', 'Imagen_Publicitaria'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'publicidadID' => 'Publicidad ID',
            'usuarioID' => 'Usuario ID',
            'Titulo' => 'Titulo',
            'Fecha_Inicial' => 'Fecha  Inicial',
            'Fecha_Final' => 'Fecha  Final',
            'Duracion' => 'Duracion',
            'Enlace' => 'Enlace',
            'Imagen_Publicitaria' => 'Imagen  Publicitaria',
            'status_publi' => 'Status Publi',
        ];
    }
}
