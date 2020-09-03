<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        /*$student=new Student;
        $student->name="mgmg";
        $student->email="mgmg@gmail.com";
        $student->address="Bahan";
        $student->save();

        $s2=new Student;
        $student->name="Kyaw";
        $student->email="kyaw@gmail.com";
        $student->address="lathar";
        $student->save();*/
        factory(App\Student::class,10)->create();

    }
}
