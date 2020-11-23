<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tags';

    /** 
     * Run the migrations.
     * @table categories
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->string('description', 255)->nullable();

            $table->nullableTimestamps();
        });
        Schema::create('post_tag', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->nullable();
            $table->integer('tag_id')->nullable();
            $table->primary(['post_id','tag_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
       Schema::dropIfExists('post_tag');

     }
}
