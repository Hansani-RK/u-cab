<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vehicles".
 *
 * @property int $id
 * @property string $model
 * @property string $vehicle_name
 * @property string $number_plate
 * @property string $user_name
 * @property string $user_address
 * @property int $user_phone
 * @property int $number_of_seat
 * @property string $value_per_km
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Vehicles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model', 'vehicle_name', 'number_plate'], 'required'],
            [['user_phone', 'number_of_seat', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['model', 'vehicle_name', 'number_plate', 'user_name', 'user_address', 'value_per_km'], 'string', 'max' => 255],
            [['number_plate'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'vehicle_name' => 'Vehicle Name',
            'number_plate' => 'Number Plate',
            'user_name' => 'User Name',
            'user_address' => 'User Address',
            'user_phone' => 'User Phone',
            'number_of_seat' => 'Number Of Seat',
            'value_per_km' => 'Value Per Km',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
