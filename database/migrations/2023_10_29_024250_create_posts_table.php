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
            $table->date('tgl');
            $table->string('name');
            $table->string('alamat');
            $table->string('telp');
            $table->string('email')->unique();
            $table->string('last_education');
            $table->string('lama_bekerja');
            $table->string('work_experiences_place1');
            $table->string('work_experiences_tgl1');
            $table->string('work_experiences_description1', 1000);
            $table->string('work_experiences_place2')->nullable();
            $table->string('work_experiences_tgl2')->nullable();
            $table->string('work_experiences_description2', 1000)->nullable();
            $table->string('work_experiences_place3')->nullable();
            $table->string('work_experiences_tgl3')->nullable();
            $table->string('work_experiences_description3', 1000)->nullable();
            $table->string('skill', 1000);
            $table->string('languange');
            $table->string('certified')->nullable();
            $table->string('job_group');
            $table->string('job_lists');
            $table->string('dokumen_cv')->nullable();
            $table->string('status');
            $table->string('gaji');
            $table->date('tanggal_masuk');
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
