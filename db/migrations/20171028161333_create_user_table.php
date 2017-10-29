<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('User');
        $table->addColumn('name', 'string')
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('password', 'string', ['limit' => 100])
            ->addColumn('created_at', 'datetime', ['null' => false, 'default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('remember_token', 'string', ['limit' => 60, 'default' => ''])
            ->addIndex('email', ['unique' => true])
            ->save();
    }

    public function down()
    {
        $this->dropTable('User');
    }
}
