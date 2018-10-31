<?php

use yii\db\Migration;

/**
 * Handles the creation of table `trips`.
 */
class m180926_180238_create_trips_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('trips', [
            'id' => $this->primaryKey(),
            'from_date' => $this->dateTime()->notNull(),
            'to_date' => $this->dateTime()->notNull(),
            'customer_name' => $this->string()->unique()->notNull(),
            'customer_address' => $this->string(),
            'customer_phone' => $this->integer(),
            'pickup_address' => $this->string(),
            'distance' => $this->integer(),
            'trip_price' => $this->string(),
            'vehicle_id' => $this->integer(),

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
        $this->dropTable('trips');
    }
}
