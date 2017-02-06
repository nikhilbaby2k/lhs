<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('course_id');
            $table->string('course_name');
            $table->longText('course_detail');
            $table->integer('course_duration')->comments = "In Hours";
            $table->dateTime('course_start');
            $table->dateTime('course_end');
        });

        Schema::create('course_category', function (Blueprint $table) {
            $table->increments('course_category_id');
            $table->string('course_category_name');
            $table->longText('course_category_detail');
        });

        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('subject_id');
            $table->string('subject_name');
            $table->longText('subject_detail');
        });

        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('chapter_id');
            $table->string('chapter_name');
            $table->longText('chapter_detail');
        });

        Schema::create('topics', function (Blueprint $table) {
            $table->increments('topic_id');
            $table->string('topic_name');
            $table->longText('topic_detail');
        });

        //Course Category => Courses [Down]
        Schema::create('course_category_mapping', function (Blueprint $table) {
            $table->increments('course_category_mapping_id');
            $table->integer('course_category_id');
            $table->integer('course_id');
        });

        //Course => Subject [Down]
        Schema::create('course_subject_mapping', function (Blueprint $table) {
            $table->increments('course_subject_mapping_id');
            $table->integer('course_category_mapping_id');
            $table->integer('subject_mapping_id');
        });

        //Subject => Topic [Down]
        Schema::create('subject_mapping', function (Blueprint $table) {
            $table->increments('subject_mapping_id');
            $table->integer('subject_id');
            $table->integer('topic_mapping_id');
        });

        //Topic => Chapter [Down]
        Schema::create('topic_mapping', function (Blueprint $table) {
            $table->increments('topic_mapping_id');
            $table->integer('topic_id');
            $table->integer('chapter_id');
        });

        DB::table('chapters')
            ->insert([
                    [
                        'chapter_id' => 1,
                        'chapter_name' => 'Chapter 1',
                        'chapter_detail' => 'Chapter Detail long text 1',
                    ],
                    [
                        'chapter_id' => 2,
                        'chapter_name' => 'Chapter 2',
                        'chapter_detail' => 'Chapter Detail long text 2',
                    ],
                    [
                        'chapter_id' => 3,
                        'chapter_name' => 'Chapter 3',
                        'chapter_detail' => 'Chapter Detail long text 3',
                    ],
                ]);

        DB::table('topics')
            ->insert([
                [
                    'topic_id' => 1,
                    'topic_name' => 'Topic 1',
                    'topic_detail' => 'Topic Detail long text 1',
                ],
                [
                    'topic_id' => 2,
                    'topic_name' => 'Topic 2',
                    'topic_detail' => 'Topic Detail long text 2',
                ],

            ]);

        DB::table('subjects')
            ->insert([
                [
                    'subject_id' => 1,
                    'subject_name' => 'Subject 1',
                    'subject_detail' => 'Subject Detail long text 1',
                ],
                [
                    'subject_id' => 2,
                    'subject_name' => 'Subject 2',
                    'subject_detail' => 'Subject Detail long text 2',
                ],
                [
                    'subject_id' => 3,
                    'subject_name' => 'Subject 3',
                    'subject_detail' => 'Subject Detail long text 3',
                ],


            ]);

        DB::table('courses')
            ->insert([
                [
                    'course_id' => 1,
                    'course_name' => 'Course 1',
                    'course_detail' => 'Course Detail long text 1',
                    'course_duration' => '56',
                    'course_start' => '2017-03-03 10:00:00',
                    'course_end' => '2017-03-05 18:00:00',
                ],
                [
                    'course_id' => 2,
                    'course_name' => 'Course 2',
                    'course_detail' => 'Course Detail long text 2',
                    'course_duration' => '48',
                    'course_start' => '2017-03-04 13:00:00',
                    'course_end' => '2017-03-06 13:00:00',
                ],
                [
                    'course_id' => 3,
                    'course_name' => 'Course 3',
                    'course_detail' => 'Course Detail long text 3',
                    'course_duration' => '48',
                    'course_start' => '2017-03-04 13:00:00',
                    'course_end' => '2017-03-06 13:00:00',
                ],
                [
                    'course_id' => 4,
                    'course_name' => 'Course 4',
                    'course_detail' => 'Course Detail long text 4',
                    'course_duration' => '26',
                    'course_start' => '2017-03-04 13:00:00',
                    'course_end' => '2017-03-05 15:00:00',
                ],



            ]);

        DB::table('course_category')
            ->insert([
                [
                    'course_category_id' => 1,
                    'course_category_name' => 'Course Category 1',
                    'course_category_detail' => 'Course Category Detail long text 1',
                ],
                [
                    'course_category_id' => 2,
                    'course_category_name' => 'Course Category 2',
                    'course_category_detail' => 'Course Category Detail long text 2',
                ],
            ]);

        DB::table('course_category_mapping')
            ->insert([
                [
                    'course_category_mapping_id' => 1,
                    'course_category_id' => 1,
                    'course_id' => 1,
                ],
                [
                    'course_category_mapping_id' => 2,
                    'course_category_id' => 1,
                    'course_id' => 2,
                ],
                [
                    'course_category_mapping_id' => 3,
                    'course_category_id' => 1,
                    'course_id' => 3,
                ],

                //Cat 2
                [
                    'course_category_mapping_id' => 4,
                    'course_category_id' => 2,
                    'course_id' => 1,
                ],
                [
                    'course_category_mapping_id' => 5,
                    'course_category_id' => 2,
                    'course_id' => 3,
                ],
                [
                    'course_category_mapping_id' => 6,
                    'course_category_id' => 2,
                    'course_id' => 4,
                ],

            ]);

        DB::table('topic_mapping')
            ->insert([
                [
                    'topic_mapping_id' => 1,
                    'topic_id' => 1,
                    'chapter_id' => 1,
                ],
                [
                    'topic_mapping_id' => 2,
                    'topic_id' => 1,
                    'chapter_id' => 2,
                ],

                [
                    'topic_mapping_id' => 3,
                    'topic_id' => 2,
                    'chapter_id' => 3,
                ],
                [
                    'topic_mapping_id' => 4,
                    'topic_id' => 2,
                    'chapter_id' => 1,
                ],


            ]);

        DB::table('subject_mapping')
            ->insert([
                [
                    'subject_mapping_id' => 1,
                    'subject_id' => 1,
                    'topic_mapping_id' => 1,
                ],
                [
                    'subject_mapping_id' => 2,
                    'subject_id' => 1,
                    'topic_mapping_id' => 2,
                ],
                [
                    'subject_mapping_id' => 3,
                    'subject_id' => 2,
                    'topic_mapping_id' => 3,
                ],
                [
                    'subject_mapping_id' => 4,
                    'subject_id' => 2,
                    'topic_mapping_id' => 4,
                ],
                [
                    'subject_mapping_id' => 5,
                    'subject_id' => 3,
                    'topic_mapping_id' => 1,
                ],


            ]);

        DB::table('course_subject_mapping')
            ->insert([
                [
                    'course_subject_mapping_id' => 1,
                    'course_category_mapping_id' => 1,
                    'subject_mapping_id' => 1,
                ],
                [
                    'course_subject_mapping_id' => 2,
                    'course_category_mapping_id' => 1,
                    'subject_mapping_id' => 2,
                ],

                //
                [
                    'course_subject_mapping_id' => 3,
                    'course_category_mapping_id' => 2,
                    'subject_mapping_id' => 3,
                ],

                //
                [
                    'course_subject_mapping_id' => 4,
                    'course_category_mapping_id' => 3,
                    'subject_mapping_id' => 1,
                ],
                [
                    'course_subject_mapping_id' => 5,
                    'course_category_mapping_id' => 3,
                    'subject_mapping_id' => 3,
                ],
                [
                    'course_subject_mapping_id' => 6,
                    'course_category_mapping_id' => 3,
                    'subject_mapping_id' => 4,
                ],

                //
                [
                    'course_subject_mapping_id' => 7,
                    'course_category_mapping_id' => 4,
                    'subject_mapping_id' => 1,
                ],

                //
                [
                    'course_subject_mapping_id' => 8,
                    'course_category_mapping_id' => 5,
                    'subject_mapping_id' => 3,
                ],



            ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('course_category');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('chapters');
        Schema::dropIfExists('topics');
        Schema::dropIfExists('course_category_mapping');
        Schema::dropIfExists('topic_mapping');
        Schema::dropIfExists('course_mapping');
        Schema::dropIfExists('subject_mapping');
        Schema::dropIfExists('course_subject_mapping');
    }
}
