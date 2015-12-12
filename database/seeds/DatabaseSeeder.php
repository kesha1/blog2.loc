<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $faker = Faker::create();
        for ($i = 0; $i <= 100; $i++) {
            DB::table('posts')->insert([
                'published' => 1,
                'title' => $faker->sentence(),
                'body' => $faker->text(500),
            ]);
        }
        Model::reguard();
    }
}
