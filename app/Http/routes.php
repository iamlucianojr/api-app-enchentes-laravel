<?php
Route::resource('/  ', 'EventController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
