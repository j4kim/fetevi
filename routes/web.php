<?php

use App\Models\Campaign;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $campaign = Campaign::getActive();
    return $campaign?->view() ?? redirect('archive');
});

Route::get('/archive', function () {
    return view('archive', ['campaigns' => Campaign::all()]);
})->name('archive');

Route::get('/{campaignName}', function (string $campaignName) {
    return Campaign::where('name', $campaignName)
        ->firstOrFail()
        ->view();
})->name('campaign');
