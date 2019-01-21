<?php

use yii\db\Migration;

/**
 * Class m190121_192415_example
 */
class m190121_192415_example extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'password' => $this->string(255)->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);

        $this->insert('user', [
            'username' => 'admin',
            'password' => \password_hash('admin', PASSWORD_DEFAULT),
            'created_at' => \time(),
            'updated_at' => \time()
        ]);

        $this->insert('user', [
            'username' => 'demo',
            'password' => \password_hash('demo', PASSWORD_DEFAULT),
            'created_at' => \time(),
            'updated_at' => \time()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
