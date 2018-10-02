<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = factory(\App\Models\Course::class, 4)->create();

        $courses->each(function ($course) {
            factory(\App\Models\Lesson::class, rand(5, 8))->create(['course_id' => $course]);
        });
    }
}
