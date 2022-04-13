<?php

use Illuminate\Support\Facades\Route;


Route::prefix('koordinator')
    ->middleware('can:persuratan-koordinator')
    ->group(function () {
        include "persuratan/koordinator.php";
    });
