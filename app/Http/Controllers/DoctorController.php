<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\specialization;
use App\Models\DoctorModel;

class DoctorController extends Controller
{
    public function fetch_specialization(){
        $specialization =specialization::get();
        return $specialization;
    }
    public function add_doctor(Request $request){
        $doctor = DoctorModel::create([
        'doctor_name'=>$request->doctor_name,
        'doctor_address'=>$request->doctor_address,
        'doctor_fees'=>$request->doctor_fees,
        'doctor_type'=>$request->doctor_type,
        'doctor_contact_no'=>$request->doctor_contact_no,
        'doctor_email'=>$request->doctor_email]);
       return 'Doctor added successfully....'. $doctor;
    }
    public function add_specialist_type(Request $request){
        $add_type = specialization::create([
            'specialization_name' =>$request->specialization_name
        ]) ;
        return 'Specialization added successfully.....'.$add_type;
    }
    public function fetch_doctor(){
        $doctor = DoctorModel::with('doctorType')->get();
        return $doctor;
    }
    public function update_type(Request $request){
        $update_type = specialization::where('id',$request->id)->update(['specialization_name'=>$request->specialization_name]);
        return 'Specialization is updated sucessfully......'.$update_type;
    }
    public function delete_type(Request $request){
        $delete_type = specialization::where('id',$request->id)->delete();
        return 'Specialization is deleted sucessfully......'.$request->id;
    }
    public function delete_doctor(Request $request){
        $delete_type = DoctorModel::where('id',$request->id)->delete();
        return 'Doctor is deleted sucessfully......'.$request->id;
    }
}
