<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->default('default.png')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('gallaryimage');
            $table->text('body');
            $table->integer('view_count')->default(0);
            $table->boolean('status')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->integer('rightsidebar_id');
            $table->integer('leftsidebar_id');
            $table->string('files');
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
        Schema::dropIfExists('posts');
    }
}
