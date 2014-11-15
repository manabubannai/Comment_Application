<?php
// app/database/seeds/CommentTableSeeder.php

class CommentTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('comments')->delete();

		Comment::create(array(
			'author' => '名無しさん',
			'text' => '今日はいい天気ですね。気持ちが良いですね。'
		));

		Comment::create(array(
			'author' => '山田さん',
			'text' => '久しぶり。山田です。'
		));

		Comment::create(array(
			'author' => '太郎さん',
			'text' => 'Laravelって便利なんですね。はじめて知りました。'
		));
	}

}