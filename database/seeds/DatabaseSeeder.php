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
     if (1==2) exit;
       for($i=0; $i<5; $i++){
          //$dateSrc=new DateTime();
          //$dateSrc=date('l');
          $dateSrc=new DateTime();
          $dateCreated=$dateSrc->setDate(rand(1976, 1985), rand(1,12), rand(1,30))->setTime(14, 55);
          
          DB::table('products')->insert([
            'name'=>str_random(8),
            'description'=>str_random(10),
            'price'=>rand(2000,5000),
            'created_at'=>$dateCreated,
            'updated_at'=>new DateTime()
          ]);
       }       
     
        // $this->call(UsersTableSeeder::class);


    }
}
