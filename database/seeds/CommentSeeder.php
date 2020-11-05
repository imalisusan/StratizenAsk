<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
        [
            'comment' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
            'user_id' => '1',
            'post_id' => '62',
        ],
        [
            'comment' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
            'user_id' => '2',
            'post_id' => '63',
        ],
        [
            'comment' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
            'user_id' => '3',
            'post_id' => '62',
        ],
        [
            'comment' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
            'user_id' => '4',
            'post_id' => '63',
        ],
        [
            'comment' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
            'user_id' => '5',
            'post_id' => '60',
        ],
        [
            'comment' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
            'user_id' => '6',
            'post_id' => '61',
        ],
        
        ];

        foreach($comments as $comment)
          {
              Comment::create([
               'comment' => $comment['comment'],
               'user_id' => $comment['user_id'],
               'post_id' => $comment['post_id'],
             ]);
           }


    }
}
