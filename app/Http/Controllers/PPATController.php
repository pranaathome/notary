<?php

namespace App\Http\Controllers;

use App\Models\PPAT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePPATRequest;
use App\Http\Requests\UpdatePPATRequest;
use App\Models\Form;
use Illuminate\Http\Request;

class PPATController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $term = $request->query('term');

        $ppats = PPAT::where('nama_nasabah', 'LIKE', '%' . $term . '%')->paginate(10);

        return view('ppat.index', [
            // 'forms' => Form::paginate(5),
            'ppats' => $ppats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePPATRequest $request)
    {
        $validatedData = $request->validated();

        // $ppat = new PPAT();

        // $ppat->honor_ppat = $request->honor_ppat;
        // $ppat->ppn = $request->ppn;
        // $ppat->pph = $request->pph;
        // $ppat->bphtb = $request->bphtb;

        PPAT::create($validatedData);

        $request->session()->flash('success', 'New PPAT form has been created');

        return redirect(route('ppat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PPAT  $pPAT
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppat = PPAT::find($id);

        return view('ppat.show', [
            'ppat' => $ppat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PPAT  $pPAT
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('ppat.edit', [
            'ppat' => PPAT::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PPAT  $pPAT
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePPATRequest $request, $id)
    {
        // $ppat = PPAT::with('form')->findOrFail($id);

        // $ppat->honor_ppat = $request->honor_ppat;
        // $ppat->ppn = $request->ppn;
        // $ppat->pph = $request->pph;
        // $ppat->bphtb = $request->bphtb;

        $validatedData = $request->validated();

        $ppat = PPAT::findOrFail($id);
        // $form = Form::find($id);
        // $form->update($request->all());

        // $form->ppat()->update($request->all());

        $ppat->update($validatedData);

        $request->session()->flash('success', 'PPAT form has been updated');

        return redirect(route('ppat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PPAT  $pPAT
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        PPAT::destroy($id);

        $request->session()->flash('success', 'PPAT form has been deleted');

        return redirect(route('ppat.index'));
    }
}
