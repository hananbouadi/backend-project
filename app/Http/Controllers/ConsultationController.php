<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $consultations = Consultation::all();

        $search = $request->input('search');
    
        $consultations = Consultation::query()
            ->where('id_c', $search)
            ->orWhere('date', 'LIKE', "%{$search}%")
            ->orWhere('type', 'LIKE', "%{$search}%")
            ->paginate(10);

        return view('consultation.home' ,compact('consultations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consultation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Consultation::create([
            'id_p'=>$request->id_p,
            'date'=>$request->date,
            'type'=>$request->type,
            
        ]);
        return redirect()->route('consultation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consultation)
    {
        return view('consultation.show',compact('consultation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultation $consultation)
    {
        return view('consultation.edit' ,compact('consultation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultation $consultation)
    {
        $consultation->update([
            'id_p'=>$request->id_p,
            'date'=>$request->date,
            'type'=>$request->type,
            
        ]);
        return redirect()->route('consultation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consultation)
    {
        $consultation->delete();
        return redirect()->route('consultation.index');
    }
}
