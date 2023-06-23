<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorModel extends Model
{
    use HasFactory;
    protected $table='doctors';
    protected $fillable =['doctor_name','doctor_address','doctor_fees','doctor_type','doctor_contact_no','doctor_email'];
    public function doctorType(){
        return $this->belongsTo(specialization::class, 'doctor_type');
    }

}
