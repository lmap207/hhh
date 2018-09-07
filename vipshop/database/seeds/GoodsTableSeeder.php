<?php

use App\Good;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
        	$article = new Good;

        	$article -> name = $faker -> name;
	        $article -> cate_id = rand(1,5);
	        $article -> title = str_random(10);
	        $article -> intro = str_random(20);
	        $article -> aintro = str_random(20);
	        $article -> picture = $faker -> imageUrl(222,250);
	        $article -> author = $faker -> name;
	        $article -> apic = $faker -> imageUrl(25,25);

	        $article -> save();
        }
    }
}
