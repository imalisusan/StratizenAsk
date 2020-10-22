<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  
     * @return void
     */
    public function run()
    {
        $users = [
        [
            'name' => 'Imali Susan',
            'email' => 'susanimali@gmail.com',
            'username' => 'imalisusan',
            'phone' => '0772045689',
            'course'=> 'Bachelor of Informatics and Computer Science',
            'about' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'website' => 'imali.frog.co.ke',
            'password' => bcrypt('123456'),
        ], 
        [
            'name' => 'Malachi Moore',
            'email' => 'malachimoore@mailinator.com',
            'username' => 'malachimoore',
            'phone' => '0772045689',
            'course'=> 'Bachelor of Arts in Communication',
            'about' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'website' => 'malachimoore.co.ke',
            'password' => bcrypt('123456'),
        ],
        [
            'name' => 'Anthony Campbell',
            'email' => 'anthonycampbelli@mailinator.com',
            'username' => 'anthonycampbell',
            'phone' => '0772045689',
            'course'=> 'Bachelor of Tourism Management',
            'about' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'website' => 'anthonycampbell.co.ke',
            'password' => bcrypt('123456'),
        ],
        [
            'name' => 'Nora Molina',
            'email' => 'noramolina@mailinator.com',
            'username' => 'noramolina',
            'phone' => '0772045689',
            'course'=> 'Bachelor of Business Science: Financial Engineering',
            'about' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'website' => 'noramolina.co.ke',
            'password' => bcrypt('123456'),
        ],
        [
            'name' => 'Imani Hinton',
            'email' => 'imanihinton@mailinator.com',
            'username' => 'imanihinton',
            'phone' => '0772045689',
            'course'=> 'Bachelor of Arts in International Studies',
            'about' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'website' => 'imanihinton.co.ke',
            'password' => bcrypt('123456'),
        ],
        [
            'name' => 'Abra Byers',
            'email' => 'abrabyers@mailinator.com',
            'username' => 'abrabyers',
            'avatar'=> 'avatar.jpg',
            'phone' => '0772045689',
            'course'=> 'Bachelor of Business Science: Actuarial Science',
            'about' => 'StatizenAsk is an educational networking tool dedicated to Strathmore University that will facilitate collaboration between both students and faculty. This tool will allow students to pose questions or discussions to the forum and receive feedback from their peers or faculty. With this, we aim to create an open and collaborative environment that would promote learning and student to faculty engagement.',
            'website' => 'abrabyers.co.ke',
            'password' => bcrypt('123456'),
        ]
        ];
    
    foreach($users as $user)
          {
              User::create([
               'name' => $user['name'],
               'email' => $user['email'],
               'username' => $user['username'],
               'phone' => $user['phone'],
               'course' => $user['course'],
               'about' => $user['about'],
               'website' => $user['website'],
               'password' => $user['password']
             ]);
           }
    }
}
