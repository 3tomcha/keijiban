<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
         'title' => '欅坂46の新曲について' ,
         'body' => '欅坂46の新曲について語るスレです。パスワードは欅坂46の新曲のタイトルです。',
         'password'  => 'kuroihitsuji',
        ]);
        DB::table('rooms')->insert([
         'title' => '欅坂46のメンバーについて' ,
         'body' => '欅坂46のメンバーについて語るスレです。パスワードは欅坂46のセンターの本名です。',
         'password'  => 'hirateyurina',
        ]);
        DB::table('rooms')->insert([
         'title' => '乃木坂46の新曲について' ,
         'body' => '乃木坂46の新曲について語るスレです。パスワードは乃木坂46の新曲のタイトルです。',
         'password'  => 'singout!',
        ]);
        DB::table('rooms')->insert([
         'title' => '乃木坂46のメンバーについて' ,
         'body' => '乃木坂46のメンバーについて語るスレです。パスワードは乃木坂46のセンターの本名です。',
         'password'  => 'saitouasuka',
        ]);
    }
}
