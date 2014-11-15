<?php
// app/routes.php

Route::get('/', function()
{
	return View::make('index'); // app/views/index.php を出力する
});


// ルートグループ
// フィルターをルートのグループに対して使用する必要がある場合に使う。
// それぞれのルートにフィルターを個別に指定する代わりに、ルートグループを使用できます。
Route::group(array('prefix' => 'api'), function()
{
	// array('onry')を使うことで、指定されたコントローラー以外へユーザーアクセスを禁止する。
	Route::resource('comments', 'CommentController',
		array('only' => array('index', 'store', 'destroy')));
});

// 404エラーを登録する
App::missing(function($exception)
{
	return View::make('index');
});
