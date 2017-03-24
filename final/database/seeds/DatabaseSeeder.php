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
        // $this->call(UsersTableSeeder::class);
        //$this->call(StudentsTableSeeder::class);


        DB::table('students')->insert([
            'student_ID' => '20150001',
            'name'=> 'Allyson Mae Tubtub',
            'course'=> 'BSIS',
            'address'=> '127.0.0.1',
            'contact_person' => 'My Mother',
            'contact_num' => '0905234567'
        ]);
    }
}
