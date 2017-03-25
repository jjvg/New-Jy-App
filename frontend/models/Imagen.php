<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "imagen".
 *
 * @property integer $imagenID
 * @property string $direccion_imagen
 * @property integer $status_imagen
 */
class Imagen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imagen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['direccion_imagen', 'status_imagen'], 'required'],
            [['status_imagen'], 'integer'],
            [['direccion_imagen'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'imagenID' => 'Imagen ID',
            'direccion_imagen' => 'Direccion Imagen',
            'status_imagen' => 'Status Imagen',
        ];
    }
}
