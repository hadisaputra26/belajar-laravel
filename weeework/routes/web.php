<?php

Route::get('/', function () {
    return view('welcome');
});
//======================================================================
// 							Belajar Route
//======================================================================
Route::get('route', function(){
	$posts = [
		['id' => 1, 'title' => 'Post ke 1'],
		['id' => 2, 'title' => 'Post ke 2'],
		['id' => 3, 'title' => 'Post ke 3'],
		['id' => 4, 'title' => 'Post ke 4'],
		['id' => 5, 'title' => 'Post ke 5'],
	];
	echo '<ul>';
	foreach ($posts as $post) {
		echo '<li><a href="'.route('test.aja', $post['id']).'">'.$post['title'].'</a></li>';
	}
	echo '</ul>';
});

Route::get('route/{id}', ['as' => 'test.aja', function($id){
	echo "Post $id";
	echo "<br>";
	echo "Body post in ID $id";
}]);
//======================================================================
// 							Belajar Route
//======================================================================

//======================================================================
// 							Belajar Controller
//======================================================================
// Route::get('blog', 'PostController@index');
// Route::post('store', 'PostController@store');
//======================================================================
// 							Belajar Route
//======================================================================

Route::resource('get', 'GetController');