<?php

Route::get('/','DashboardController@getDashbord');
//Excel import & export in Database using laravel
Route::get('/excel-data-list','ExcelController@getCuntomer');
Route::get('/import-cus-data','ExcelController@importCuntomerData');
Route::post('/import','ExcelController@cusDataImport');
Route::get('/export','ExcelController@cusDataExport');
Route::get('/del-cus-data','ExcelController@delCusData');
//Excel end
//Textarea maxlength using jQ plugin
Route::get('/textarea_max_length_count','MaxlengthTextareaController@getText');

//File upload using php
Route::get('/file-upload-php','FileUploadController@phpFileUpload');
Route::post('/file_store_php','FileUploadController@phpFileStore');

//add row
Route::get('/create_row','AddrowController@getAddrow');
Route::post('/addrow_store','AddrowController@storeAddrow');
