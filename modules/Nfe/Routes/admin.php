<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'admin',
    'as' => 'nfe.',
    'namespace' => 'Modules\Nfe\Http\Controllers'
], function () {
    Route::prefix('nfe')->group(function() {
        Route::get('/', 'Main@index')->name('index');
        Route::get('create', 'Main@create')->name('create');
    });
});
