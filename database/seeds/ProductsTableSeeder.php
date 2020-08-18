 <?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
if (1==1) exit;
    	$date=new DateTime();
        DB:table('products')->insert([
        	'name'=>str_random(10),
        	'description'=>str_random(10),
        	'price'=>rand(5000, 45000),
        	'created_at'=>$date
        ]);
    }
}
