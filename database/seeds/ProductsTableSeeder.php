 <?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	$date=new DateTime();
        DB:table('products')->insert[
        	'name'=>str_random(10),
        	'description'=>str_random(10),
        	'price'=>rand(5000, 45000),
        	'created_at'=>$date
        ]
    }
}
