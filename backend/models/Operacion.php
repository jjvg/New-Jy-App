<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "operacion".
 *
 * @property integer $operacion_ID
 * @property string $nombre_op
 */
class Operacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_op'], 'required'],
            [['nombre_op'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'operacion_ID' => 'Operacion  ID',
            'nombre_op' => 'Nombre Op',
        ];
    }

    public function getRolesconPermisos()
    {
      return $this->hasMany(Rol::className(), ['operacion_ID' => 'rol_ID'])
          ->viaTable('rol_operacion', ['operacion_ID' => 'operacion_ID']);
        }

        public function getRolesconPermisosList()
        {
      return $this->getRolesconPermisos()->asArray();
        }
}
