<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "anuncio_imagen".
 *
 * @property integer $anuncioID
 * @property integer $imagenID
 * @property integer $status_ai
 */
class AnuncioImagen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anuncio_imagen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anuncioID', 'imagenID', 'status_ai'], 'required'],
            [['anuncioID', 'imagenID', 'status_ai'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'anuncioID' => 'Anuncio ID',
            'imagenID' => 'Imagen ID',
            'status_ai' => 'Status Ai',
        ];
    }
}
