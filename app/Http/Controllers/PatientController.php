<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    
    public function index()
    {
        $patients = Patient::all();
        return view('patient.home' ,compact('patients'));
    }

   
    public function create()
    {
        return view('patient.create');
    }

    
    public function store(Request $request)
    {
        Patient::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'age'=>$request->age,
            'email'=>$request->email,
            'CIN'=>$request->CIN,
            'address'=>$request->address,
            'tel'=>$request->tel
        ]);
        return redirect()->route('patient.index');
    }

   
    public function show(Patient $patient)
    {
        return view('patient.show' ,compact('patient'));
    }

    
    public function edit(Patient $patient)
    {
        return view('patient.edit' ,compact('patient'));
        
    }

  
    public function update(Request $request, Patient $patient)
    {
        $patient->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'age'=>$request->age,
            'email'=>$request->email,
            'CIN'=>$request->CIN,
            'tel'=>$request->tel,
            'address'=>$request->address,
        ]);
        return redirect()->route('patient.index');
    }

   
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.index');
    }
}
