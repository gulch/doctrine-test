<?php


use Phinx\Migration\AbstractMigration;

class CreateTagTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('Tag');
        $table->addColumn('slug', 'string', ['limit' => 100])
            ->addColumn('title', 'string')
            ->addColumn('content', 'text')
            ->addColumn('seo_title', 'string', ['null' => true])
            ->addColumn('seo_description', 'string', ['null' => true])
            ->addColumn('seo_keywords', 'string', ['null' => true])
            ->addColumn('created_at', 'datetime', ['null' => false, 'default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->addIndex('slug', ['unique' => true])
            ->save();
    }

    public function down()
    {
        $this->dropTable('Tag');
    }
}
