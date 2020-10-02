<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses =[
        [
        'name' => 'Bachelor of Science in Informatics and Computer Science',
        ],
        [
            'name' => 'Bachelor of Commerce',
        ],
        [
            'name' => 'Bachelor of Tourism Management',
        ],
        [
            'name' => 'Bachelor of Science in Hospitality and Hotel Management',
        ],
        [
            'name' => 'Bachelor of Business Science: Financial Engineering',
        ],
        [
            'name' => 'Bachelor of Business Science: Financial Economics',
        ],
        [
            'name' => 'Bachelor of Business Science: Actuarial Science',
        ],
        [
            'name' => 'Bachelor of Science in Telecommunications',
        ],
        [
            'name' => 'Bachelor of Laws',
        ],
        [
            'name' => 'Bachelor of Arts in Communication',
        ],
        [
            'name' => 'Bachelor of Arts in International Studies',
        ],
        [
            'name' => 'Bachelor of Arts in Development Studies and Philosophy',
        ],
        [
            'name' => 'Bachelor of Arts in Supply Chain and Operations Management',
        ],
        [
            'name' => 'Bachelor of Arts in Financial Services',
        ],
        [
            'name' => 'Bachelor of Science in Electrical and Electronics Engineering',
        ]
        ];
        
    foreach($courses as $course)
          {
              Course::create([
               'name' => $course['name'],
             ]);
           }
    }
}
