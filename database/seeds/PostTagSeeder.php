<?php
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder {
    public function run()
    {
        DB::table('post_tag')->insert(array(
        array('post_id' => 1, 'tag_id' => 1),
        array('post_id' => 2, 'tag_id' => 2),
        array('post_id' => 3, 'tag_id' => 1),
        array('post_id' => 3, 'tag_id' => 3),
        array('post_id' => 3, 'tag_id' => 5),
        array('post_id' => 4, 'tag_id' => 1),
        array('post_id' => 5, 'tag_id' => 2),
        array('post_id' => 6, 'tag_id' => 1),
        array('post_id' => 8, 'tag_id' => 5),
        array('post_id' => 9, 'tag_id' => 1),
        array('post_id' => 10, 'tag_id' => 2),
        array('post_id' => 11, 'tag_id' => 1),
        array('post_id' => 12, 'tag_id' => 3),
        array('post_id' => 13, 'tag_id' => 5),
        array('post_id' => 51, 'tag_id' => 1),
        array('post_id' => 52, 'tag_id' => 2),
        array('post_id' => 53, 'tag_id' => 1),
        array('post_id' => 53, 'tag_id' => 3),
        array('post_id' => 53, 'tag_id' => 5)
    ));
    }
}
?>