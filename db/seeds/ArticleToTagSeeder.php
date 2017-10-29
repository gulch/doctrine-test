<?php

use Phinx\Seed\AbstractSeed;

class ArticleToTagSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['id__Article' => 1, 'id__Tag' => 2],
            ['id__Article' => 1, 'id__Tag' => 3],
            ['id__Article' => 1, 'id__Tag' => 4],
            ['id__Article' => 3, 'id__Tag' => 2],
            ['id__Article' => 4, 'id__Tag' => 2],
            ['id__Article' => 5, 'id__Tag' => 2],
            ['id__Article' => 6, 'id__Tag' => 8],
            ['id__Article' => 9, 'id__Tag' => 4],
        ];

        $this->insert('Article_Tag', $data);
    }
}