<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Binh_luan extends Model {
    protected $table = 'binhluan';
    protected $columns = [
        'noidung',
        'iduser',
        'idpro',
        'ngaybinhluan',
    ];

