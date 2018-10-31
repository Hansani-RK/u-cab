<?php

use yii\db\Migration;

/**
 * Handles the creation of table `vehicles`.
 */
class m180926_182241_create_vehicles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('vehicles', [
            'id' => $this->primaryKey(),
            'model' => $this->string()->notNull(),
            'vehicle_name' => $this->string()->notNull(),
            'number_plate' => $this->string()->unique()->notNull(),
            'user_name' => $this->string(),
            'user_address' => $this->string(),
            'user_phone' => $this->integer(),
            'number_of_seat' => $this->integer(),
            'value_per_km' => $this->string(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('vehicles');
    }
}
