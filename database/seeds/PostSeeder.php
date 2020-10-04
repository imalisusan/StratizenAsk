<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        [
            'user_id' => '1',
            'title' => 'Laravel Installation',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '2',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Business Science: Financial Engineering',
        ],
        [
            'user_id' => '3',
            'title' => 'Database Schemas',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '4',
            'title' => 'Do we need more international diplomats',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in International Studies',
        ],
        [
            'user_id' => '5',
            'title' => 'Website Application Development Tools',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '5',
            'title' => 'Financial Data Analysis Tools',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in Financial Services',
        ],
        [
            'user_id' => '1',
            'title' => 'Debugging a Heroku application on production',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '2',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '6',
            'title' => 'Stock markets analysis',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Business Science: Actuarial Science',
        ],
        [
            'user_id' => '5',
            'title' => 'Media conglomerates, ownership',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in Communication',
        ],
        [
            'user_id' => '2',
            'title' => 'Police brutality',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Laws',
        ],
        [
            'user_id' => '3',
            'title' => 'Educating special needs students',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Technology in education',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Bioterrorism',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in International Studies',
        ],
        [
            'user_id' => '1',
            'title' => 'Laravel Installation',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '2',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Business Science: Financial Engineering',
        ],
        [
            'user_id' => '3',
            'title' => 'Database Schemas',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '4',
            'title' => 'Do we need more international diplomats',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in International Studies',
        ],
        [
            'user_id' => '5',
            'title' => 'Website Application Development Tools',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '5',
            'title' => 'Financial Data Analysis Tools',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in Financial Services',
        ],
        [
            'user_id' => '1',
            'title' => 'Debugging a Heroku application on production',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '2',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '6',
            'title' => 'Stock markets analysis',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Business Science: Actuarial Science',
        ],
        [
            'user_id' => '5',
            'title' => 'Media conglomerates, ownership',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in Communication',
        ],
        [
            'user_id' => '2',
            'title' => 'Police brutality',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Laws',
        ],
        [
            'user_id' => '3',
            'title' => 'Educating special needs students',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Technology in education',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Bioterrorism',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in International Studies',
        ],
        [
            'user_id' => '1',
            'title' => 'Laravel Installation',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '2',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Business Science: Financial Engineering',
        ],
        [
            'user_id' => '3',
            'title' => 'Database Schemas',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '4',
            'title' => 'Do we need more international diplomats',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in International Studies',
        ],
        [
            'user_id' => '5',
            'title' => 'Website Application Development Tools',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '5',
            'title' => 'Financial Data Analysis Tools',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in Financial Services',
        ],
        [
            'user_id' => '1',
            'title' => 'Debugging a Heroku application on production',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '2',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '6',
            'title' => 'Stock markets analysis',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Business Science: Actuarial Science',
        ],
        [
            'user_id' => '5',
            'title' => 'Media conglomerates, ownership',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in Communication',
        ],
        [
            'user_id' => '2',
            'title' => 'Police brutality',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Laws',
        ],
        [
            'user_id' => '3',
            'title' => 'Educating special needs students',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Technology in education',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Bioterrorism',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in International Studies',
        ],
        [
            'user_id' => '1',
            'title' => 'Laravel Installation',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '2',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Business Science: Financial Engineering',
        ],
        [
            'user_id' => '3',
            'title' => 'Database Schemas',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '4',
            'title' => 'Do we need more international diplomats',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in International Studies',
        ],
        [
            'user_id' => '5',
            'title' => 'Website Application Development Tools',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '5',
            'title' => 'Financial Data Analysis Tools',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in Financial Services',
        ],
        [
            'user_id' => '1',
            'title' => 'Debugging a Heroku application on production',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Informatics and Computer Science',
        ],
        [
            'user_id' => '2',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '6',
            'title' => 'Stock markets analysis',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Food Sustainability',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Business Science: Actuarial Science',
        ],
        [
            'user_id' => '5',
            'title' => 'Media conglomerates, ownership',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in Communication',
        ],
        [
            'user_id' => '2',
            'title' => 'Police brutality',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Laws',
        ],
        [
            'user_id' => '3',
            'title' => 'Educating special needs students',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Technology in education',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Commerce',
        ],
        [
            'user_id' => '1',
            'title' => 'Bioterrorism',
            'detail' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'category'=> 'Bachelor of Arts in International Studies',
        ]
        ];

        foreach($posts as $post)
          {
              Post::create([
               'user_id' => $post['user_id'],
               'title' => $post['title'],
               'detail' => $post['detail'],
               'category' => $post['category'],
             ]);
           }
    }
}
