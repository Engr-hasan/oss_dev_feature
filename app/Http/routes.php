<?php

Route::get('/','DashboardController@getDashbord');
Route::get('/excel-data-list','ExcelController@getCuntomer');
Route::get('/import-cus-data','ExcelController@importCuntomerData');
Route::post('/import','ExcelController@cusDataImport');
Route::get('/export','ExcelController@cusDataExport');
Route::get('/del-cus-data','ExcelController@delCusData');
Route::get('/textarea_max_length_count','ExcelController@getText');
