<?php
    Route::resource('/event', 'EventController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
    Route::resource('/quota', 'QuotaController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
