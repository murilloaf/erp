<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'portal',
    'middleware' => 'portal',
    'namespace' => 'Modules\Nfe\Http\Controllers'
], function () {
    // Route::get('invoices/{invoice}/nfe', 'Main@show')->name('portal.invoices.nfe.show');
    // Route::post('invoices/{invoice}/nfe/confirm', 'Main@confirm')->name('portal.invoices.nfe.confirm');
});
