<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = [
            [
                'title'=>'Statistic',
                'views'=>125,
                'description'=>'ini Statistic'
            ],
            [
                'title'=>'Calculus',
                'views'=>200,
                'description'=>'ini Calculus'
            ],
            [
                'title'=>'Algorithm',
                'views'=>300,
                'description'=>'ini Algorithm'
            ],
            [
                'title'=>'Math Discrete',
                'views'=>121,
                'description'=>'ini Math Discrete'
            ],
            [
                'title'=>'Math Linear',
                'views'=>165,
                'description'=>'ini Math Linear'
            ],
            [
                'title'=>'Web Design',
                'views'=>305,
                'description'=>'ini Web Design'
            ],
            [
                'title'=>'Java GUI',
                'views'=>248,
                'description'=>'ini Java GUI'
            ],
            [
                'title'=>'Database',
                'views'=>325,
                'description'=>'ini Database'
            ],
            [
                'title'=>'Laravel',
                'views'=>415,
                'description'=>'ini Laravel'
            ],
            [
                'title'=>'Operating System',
                'views'=>225,
                'description'=>'ini Operating System'
            ],
            [
                'title'=>'Unity',
                'views'=>586,
                'description'=>'ini Unity'
            ],
            [
                'title'=>'Python',
                'views'=>320,
                'description'=>'ini Python'
            ],
        ];

        foreach ($course as $c) {
            DB::table('courses')->insert([
                'title'=>$c['title'],
                'views' =>  $c['views'],
                'description' => $c['description']
            ]);
        }
    }
}
