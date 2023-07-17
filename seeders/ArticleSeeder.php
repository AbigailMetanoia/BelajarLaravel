<?php

namespace Database\Seeders;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        foreach(range(1,5) as $item){
            Article::create([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true), //menampilkan text dengan panjang 6 Kata
                'body' => $faker->sentence($nbWords = 30, $variableNbWords = true), //menampilkan text dengan panjang 30 Kata
            ]);
        }
    }
}
