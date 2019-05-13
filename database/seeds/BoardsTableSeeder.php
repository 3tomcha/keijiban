<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('boards')->insert([
         'room_id' => 1 ,
         'message' => '欅坂46の新曲サイコー',
         'created_at' => Carbon::now(),
       ]);
       DB::table('boards')->insert([
         'room_id' => 2 ,
         'message' => '平手ちゃん可愛い！',
         'created_at' => Carbon::now(),
       ]);
       DB::table('boards')->insert([
         'room_id' => 3 ,
         'message' => '乃木坂46の新曲サイコー',
         'created_at' => Carbon::now(),
       ]);
       DB::table('boards')->insert([
         'room_id' => 4 ,
         'message' => '飛鳥ちゃん可愛い！',
         'created_at' => Carbon::now(),
       ]);
     }
}
