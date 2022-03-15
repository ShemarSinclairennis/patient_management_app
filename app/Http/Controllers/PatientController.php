<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("Patients", [
            "patients"=> Patient::all(),
                
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $patient = new Patient;
        $patient->gender = $request->gender;
        $patient->title = $request->title;
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->street_address = $request->street_address;
        $patient->city = $request->city;
        $patient->parish = $request->parish;
        $patient->email = $request->email;
        $patient->home_number = $request->home_number;
        $patient->mobile_number = $request->mobile_number;
        $patient->work_number = $request->work_number;
        $patient->dob = $request->dob;
        $patient->pob = $request->pob;
        $patient->birth_parish = $request->birth_parish;
        $patient->emergency_title = $request->emergency_title;
        $patient->emergency_first_name = $request->emergency_first_name;
        $patient->emergency_last_name = $request->emergency_last_name;
        $patient->emergency_street_address = $request->emergency_street_address;
        $patient->emergency_city = $request->emergency_city;
        $patient->emergency_parish = $request->emergency_parish;
        $patient->emergency_email = $request->emergency_email;
        $patient->emergency_home_number = $request->emergency_home_number;
        $patient->emergency_mobile_number = $request->emergency_mobile_number;
        $patient->emergency_work_number = $request->emergency_work_number;
        $patient->save();
        return back()->withSuccess("Patient added to the system");



        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return Inertia::render("PatientProfile", [
            "patient" => $patient,
            "reports" => $patient->reports,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->gender = $request->gender;
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->street_address = $request->street_address;
        $patient->city = $request->city;
        $patient->parish = $request->parish;
        $patient->home_number = $request->home_number;
        $patient->mobile_number = $request->mobile_number;
        $patient->work_number = $request->work_number;
        $patient->dob = $request->dob;
        $patient->pob = $request->pob;
        $patient->birth_parish = $request->birth_parish;
        $patient->emergency_title = $request->emergency_title;
        $patient->emergency_first_name = $request->emergency_first_name;
        $patient->emergency_last_name = $request->emergency_last_name;
        $patient->emergency_street_address = $request->emergency_street_address;
        $patient->emergency_city = $request->emergency_city;
        $patient->emergency_parish = $request->emergency_parish;
        $patient->emergency_home_number = $request->emergency_home_number;
        $patient->emergency_mobile_number = $request->emergency_mobile_number;
        $patient->emergency_work_number = $request->emergency_work_number;
        $patient->save();
        return back()->withSuccess("Patient added to the system");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return back()->withSuccess("Deleted successfully");
    }
}
