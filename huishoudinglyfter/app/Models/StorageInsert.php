<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageInsert extends Model
{
    use HasFactory;
    protected $table ='storage';
    public $timestamps = false;
}
