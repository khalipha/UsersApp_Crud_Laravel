<?php

use Illuminate\Database\Seeder;

class CreateStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
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
