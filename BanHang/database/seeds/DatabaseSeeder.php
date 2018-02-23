<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaptopCity::class);
    }
}
/**
* 
*/
/**
* 
*/
class LaptopCity extends Seeder
{
	/*9/2/2018*/
	public function run()
    {
        DB::table('users')->insert(
            ['name'=>'Trần Tiến Đạt','email'=>'tr.tiendat.hcmunre@gmail.com','password'=>bcrypt('20101996')]
        );
        
    }
	
}