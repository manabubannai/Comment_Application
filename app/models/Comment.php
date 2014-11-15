<?php

// app/models/Comment.php

class Comment extends Eloquent {
	// 以下のDB情報に書き込みを許可する
	protected $fillable = array('author', 'text');
}
