<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        		"student_ID"=>'11104988',
                "name"=>'Allyson Mae Tubtub',
                "course"=>'BSIS',
                "address"=>'Pasig City',
                "contact_person"=>'Mrs Tubtub',
                "contact_num"=>'0912346578',
        	]);
    }
}
