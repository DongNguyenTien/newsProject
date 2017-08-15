<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNewsPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 128);
            $table->string('thumbnail', 128)->nullable();
            $table->text('images')->nullable();
            $table->string('summary', 512)->nullable();
            $table->text('data')->nullable();
            $table->enum('post_type', ['news', 'image', 'video'])->default('news')->nullable();
            $table->tinyInteger('post_status')->default(0)->comment('-1: deleted; 0: draft; 1: published');
            $table->integer('post_view', false, true)->default(0)->nullable();
            $table->dateTime('published_at')->nullable();
            $table->integer('created_id')->default(0)->nullable();
            $table->integer('updated_id')->default(0)->nullable();
            $table->integer('deleted_id')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_posts');
    }
}
