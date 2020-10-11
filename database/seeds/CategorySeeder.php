<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            [
                'name'=>'computerscience',
                'description'=>'For questions regarding the study of computers and computational systems',
            ],
            [
                'name'=>'technology',
                'description'=>'Technology is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation",
                '
            ],
            [
                'name'=>'programming',
                'description'=>'Process of creating a set of instructions that tell a computer how to perform a task.Questions involve a variety f programming languages.',
            ],
            [
                'name'=>'webdesign',
                'description'=>'Posts regarding the design of websites displayed on the Internet',
            ],
            [
                'name'=>'software',
                'description'=>'Posts dealing with the programs and operating systems of the computer',
            ],
            [
                'name'=>'accounting',
                'description'=>'Accounting or accountancy is the measurement, processing, and communication of financial and non financial information about economic entities such as businesses and corporation.',
            ],
            [
                'name'=>'marketing',
                'description'=>'Related to activities a company undertakes to promote the buying or selling of a product or service.',
            ],
            [
                'name'=>'finance',
                'description'=>'The management of large amounts of money, especially by governments or large companies',
            ],
            [
                'name'=>'entrepreneurship',
                'description'=>'The activity of setting up a business or businesses, taking on financial risks in the hope of profit.',
            ],
            [
                'name'=>'tourism',
                'description'=>'Related to travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours.',
            ],
            [
                'name'=>'hospitality',
                'description'=>'The friendly and generous reception and entertainment of guests, visitors, or strangers.',
            ],
            [
                'name'=>'riskmanagement',
                'description'=>'The forecasting and evaluation of financial risks together with the identification of procedures to avoid or minimize their impact.',
            ],
            [
                'name'=>'math',
                'description'=>'Mathematics',
            ],
            [
                'name'=>'commerce',
                'description'=>'The activity of buying and selling, especially on a large scale.',
            ],
            [
                'name'=>'financialengineering',
                'description'=>'The application of technical methods, especially from mathematical finance and computational finance, in the practice of finance',
            ],
            [
                'name'=>'economics',
                'description'=>'Social science concerned with the production, distribution, and consumption of goods and services.',
            ],
            [
                'name'=>'telecommunications',
                'description'=>'Communication over a distance by cable, telegraph, telephone, or broadcasting.Also the branch of technology concerned with telecommunication.',
            ],
            [
                'name'=>'law',
                'description'=>'The system of rules which a particular country or community recognizes as regulating the actions of its members and which it may enforce by the imposition of penalties.',
            ],
            [
                'name'=>'philosphy',
                'description'=>'The study of the fundamental nature of knowledge, reality, and existence, especially when considered as an academic discipline.',
            ],
            [
                'name'=>'developmentstudies',
                'description'=>'Related to the evolution of nations from political, cultural, geographical, and socio-economic perspectives.',
            ],
            [
                'name'=>'engineering',
                'description'=>'The branch of science and technology concerned with the design, building, and use of engines, machines, and structures.',
            ]
            
        ];
        foreach($categories as $category)
          {
              Category::create([
               'name' => $category['name'],
               'description' => $category['description'],
             ]);
           }
    }
}
