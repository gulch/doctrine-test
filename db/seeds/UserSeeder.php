<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];

        for ($i = 1; $i < 6; $i++) {
            $data[] = [
                'id' => $i,
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => password_hash($faker->password(), PASSWORD_DEFAULT),
            ];
        }

        $this->insert('User', $data);
    }
}
