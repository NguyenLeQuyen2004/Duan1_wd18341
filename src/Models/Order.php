<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $columns = [
        'name',
        'email',
        'phone',
        'address',
        'total_price',
        'status_id',
        'created_at',
    ];
}
