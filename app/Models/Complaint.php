<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaints';

    protected $fillable = [
        'complaint_code',
        'name',
        'category',
        'address',
        'description',
        'status'
    ];
}