<?php
    Route::resource('/event', 'EventController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
