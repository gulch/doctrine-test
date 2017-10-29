<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('User');
        $table->addColumn('name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('created_at', 'timestamp')
            ->save();
    }

    public function down()
    {
        $this->dropTable('User');
    }
}
