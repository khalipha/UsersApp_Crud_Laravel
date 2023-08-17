<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name'     => 'Swelihle',
            'surname'  => 'Mkhwanazi', 
            'email'    => 'skmkhwanazi1@gmail.com',
            'position' => 'Software Developer'
           ],
           [
            'name'     => 'John',
            'surname'  => 'Smith', 
            'email'    => 'js@gmail.com',
            'position' => 'Software Developer'
           ] 
    ]);
       
    }
}
