<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('project');
            $table->unsignedBigInteger('user')->nullable();
            $table->unsignedBigInteger('status')->nullable();
            $table->unsignedBigInteger('type')->nullable();
            $table->unsignedBigInteger('priority')->nullable();
            $table->timestamps();

            $table->foreign('user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('project')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade');

            $table->foreign('status')
                ->references('id')
                ->on('statuses')
                ->onDelete('cascade');

            $table->foreign('type')
                ->references('id')
                ->on('types')
                ->onDelete('cascade');

            $table->foreign('priority')
                ->references('id')
                ->on('priorities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
