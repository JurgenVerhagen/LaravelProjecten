<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageUpdate extends Model
{
    use HasFactory;
    protected $table ='storage';
    protected $fillable = ['product', 'amount'];
    public $timestamps = false;
}
