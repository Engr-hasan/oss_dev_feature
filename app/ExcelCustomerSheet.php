<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcelCustomerSheet extends Model
{
    protected $table = 'excel_customer_sheets';
    protected $fillable = array(
        'customer_name',
		'customer_address',
		'customer_mobile',
		'customer_email',
		'product_name'
    );
}
