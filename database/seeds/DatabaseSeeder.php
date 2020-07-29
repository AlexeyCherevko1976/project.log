<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       for($i=0; $i<5; $i++){
	        //$dateSrc=new DateTime();
       		//$dateSrc=date('l');
       		$dateSrc=new DateTime();
       		$dateCreated=$dateSrc->setDate(rand(1976, 1985), rand(1,12), rand(1,30))->setTime(14, 55);
       		
	        DB::table('posts')->insert([
	        	'name'=>str_random(8),
	        	'created_at'=>$dateCreated,
	        	'updated_at'=>new DateTime()
	        ]);
       }

    }
}
