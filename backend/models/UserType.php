<?php

namespace backend\models;

use Yii;
use common\User;

/**
 * This is the model class for table "user_type".
 *
 * @property int $id
 * @property string $user_type_name
 * @property int $user_type_value
 */
class UserType extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'user_type';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_type_value'], 'required'],
            [['user_type_value'], 'integer'],
            [['user_type_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_type_name' => 'User Type Name',
            'user_type_value' => 'User Type Value',
        ];
    }
    
    public function getUsers(){
        return $this->hasMany(User::className(),['user_type_id','user_type_value']);
    }
}
