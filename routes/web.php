<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

// 1 - Route biasa Home
Route::get('/', function(){
   return redirect('https://www.educastudio.com/');
});

// 2. Route Prefix Category
Route::prefix('/category')->group(function(){
   Route::get('/marbel-edu-games', function(){
       return redirect('https://www.educastudio.com/category/marbel-edu-games');
   });

   Route::get('/riri-story-books', function(){
       return redirect('https://www.educastudio.com/category/riri-story-books');
   });

   Route::get('/kolak-kids-songs', function(){
       return redirect('https://www.educastudio.com/category/kolak-kids-songs');
   });
});

// 3. Route Param News
Route::get('news', function(){
   return redirect('https://www.educastudio.com/news');
});

Route::get('news/{title}', function($title){
   return redirect('https://www.educastudio.com/news/' . $title);
});

// 4. Route Prefix Program
Route::prefix('/program')->group(function(){
   Route::get('/karir', [ProgramController::class, 'karir']);

   Route::get('/magang', [ProgramController::class, 'magang']);

   Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

// 5 - Route biasa About Us
Route::get('/about-us', function(){
   return redirect('https://www.educastudio.com/about-us');
});

// 6 - Route Resource Contact
Route::resource('/contact-us', ContactController::class, [
   'only' => ['index', 'create', 'store']
]);