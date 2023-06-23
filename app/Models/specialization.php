<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class specialization extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'doctor_specialization_list';
    protected $fillable =['specialization_name'];
}
