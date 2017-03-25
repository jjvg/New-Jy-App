<?php

namespace backend\models;

use Yii;
use common\models\User;
use backend\models\RolOperacion;
use backend\models\Operacion;

/**
 * This is the model class for table "rol".
 *
 * @property integer $rol_ID
 * @property string $nombre_rol
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $operaciones;
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_rol'], 'required'],
            [['rol_ID'],'integer'],
            ['operaciones', 'safe'],
            [['nombre_rol'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rol_ID' => 'Rol ',
            'nombre_rol' => 'Nombre Rol',
        ];
    }
    public function getUsers()

      {
        return $this->hasMany(User::className(), ['rol_ID' => 'rol_ID']);
      }

      public function afterSave($insert, $changedAttributes){
      \Yii::$app->db->createCommand()->delete('rol_operacion', 'rol_id = '.(int) $this->rol_ID)->execute();

      foreach ($this->operaciones as $id) {
          $ro = new RolOperacion();
          $ro->rol_id = $this->rol_ID;
          $ro->operacion_ID = $id;
          $ro->save();
      }
    }

    public function getRolOperaciones()
    {
    return $this->hasMany(RolOperacion::className(), ['rol_id' => 'rol_ID']);
    }

  public function getOperacionesPermitidas()
  {
    return $this->hasMany(Operacion::className(), ['operacion_ID' => 'operacion_ID'])
        ->viaTable('rol_operacion', ['rol_id' => 'rol_ID']);
      }

      public function getOperacionesPermitidasList()
      {
    return $this->getOperacionesPermitidas()->asArray();
      }
}
