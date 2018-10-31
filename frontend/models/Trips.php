<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "trips".
 *
 * @property int $id
 * @property string $from_date
 * @property string $to_date
 * @property string $customer_name
 * @property string $customer_address
 * @property int $customer_phone
 * @property string $pickup_address
 * @property int $distance
 * @property string $trip_price
 * @property int $vehicle_id
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Trips extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trips';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from_date', 'to_date', 'customer_name'], 'required'],
            [['from_date', 'to_date', 'created_at', 'updated_at'], 'safe'],
            [['customer_phone', 'distance', 'vehicle_id', 'status'], 'integer'],
            [['customer_name', 'customer_address', 'pickup_address', 'trip_price'], 'string', 'max' => 255],
            [['customer_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'from_date' => 'From Date',
            'to_date' => 'To Date',
            'customer_name' => 'Customer Name',
            'customer_address' => 'Customer Address',
            'customer_phone' => 'Customer Phone',
            'pickup_address' => 'Pickup Address',
            'distance' => 'Distance',
            'trip_price' => 'Trip Price',
            'vehicle_id' => 'Vehicle ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
