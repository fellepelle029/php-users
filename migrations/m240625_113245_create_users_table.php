<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m240625_113245_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'firstName' => $this->string(255)->notNull(),
            'lastName' => $this->string(255)->notNull(),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB');


        $this->batchInsert('users', ['firstName', 'lastName'], [
            ['Антон', 'Антонов'],
            ['Иван', 'Ивановов'],
            ['Петр', 'Петров'],
            ['Иннокентий', 'Федедоров'],
            ['Федор', 'Иннокентьев'],
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
