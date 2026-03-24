<?php

use App\Models\Campaign;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello';
});

Route::get('/{campaignName}', function (string $campaignName) {
    $campaign = Campaign::where('name', $campaignName)->firstOrFail();
    return view("themes.$campaign->theme.index", $campaign);
})->name('campaign');
