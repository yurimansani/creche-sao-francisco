<?php

use Illuminate\Database\Seeder;

class eventos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
        ]);
        DB::table('events')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
        ]);
        DB::table('events')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
        ]);
        DB::table('events')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
        ]);
        DB::table('events')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
        ]);
    }
}
