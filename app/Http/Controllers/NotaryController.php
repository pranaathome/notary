<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NotaryRequest;
use App\Http\Requests\StoreNotaryRequest;
use App\Http\Requests\UpdateNotaryRequest;
use App\Models\Form;
use App\Models\Notary;
use App\Models\User;

class NotaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $forms = Form::with('notaries')->first();
        // $forms = Form::all();
        // $data = $forms->get(1)->notaries;
        // dd($forms->notaries);
        // dd($data);

        // $notaries = Notary::with('form')->paginate(10);

        // $forms = Form::when($request->keyword, function ($query) use ($request) {
        //     $query->where('nama_nasabah', 'like', "%{$request->keyword}%");
        // })->paginate(5);

        // $forms->appends($request->only('keyword'));

        // // dd($forms);

        // $keyword = $request->query('keyword');

        // if ($keyword) {
        //     $forms = Form::when($keyword, function ($query) {
        //         $query->where('nama_nasabah', 'like', "%{$keyword}%");
        //     })->paginate(5);
        //     //     $notaries = Notary::where('honor_notaris', 'LIKE', "{$search}")->with('form')->paginate(3);
        // } else {
        //     $notaries = Notary::with('form')->paginate(10);
        // }

        // $products = Product::whereHas(colors, function ($query) {
        //     $query->where('color', 'blue'); //'color' is the column on the Color table where 'blue' is stored.
        //     }])->get();

        // $notaries_search = Notary::whereHas(colors, function ($query) {
        //     $query->where('color', 'blue'); //'color' is the column on the Color table where 'blue' is stored.
        //     }])->get();

        // $notaries_search = Form::where('nama_nasabah', 'LIKE', '%' . $search . '%')->paginate(10);

        // $forms = Form::where([
        //     ['nama_nasabah', '!=', null],
        //     [function ($query) use ($request) {
        //         if (($term = $request->term)) {
        //             $query->orWhere('nama_nasabah', 'LIKE', '%' . $term . '%')->get();
        //         }
        //     }]
        // ])
        //     ->orderBy("id", "asc")
        //     ->paginate(10);

        // $notaries = Notary::whereHas('form', [
        //     ['nama_nasabah', '!=', null],
        //     [function ($query) use ($request) {
        //         if (($term = $request->term)) {
        //             $query->orWhere('nama_nasabah', 'LIKE', '%' . $term . '%')->get();
        //         }
        //     }]
        // ])
        //     ->orderBy("id", "asc")
        //     ->paginate(10);

        // ->with(['form' => function ($query) use ($term) {
        //     $query->where('nama_nasabah', 'LIKE', '%' . $term . '%');
        // }])

        $term = $request->query('term');
        // dd($term);

        $notaries = Notary::where('nama_nasabah', 'LIKE', '%' . $term . '%')->paginate(10);

        return view('notaries.index', [
            'notaries' => $notaries,
            // 'forms' => $forms
        ]);
    }

    // public function search(Request $request)
    // {
    //     $keyword = $request->input['keyword'];

    //     $query = Form::where('nama_nasabah', 'LIKE', '%' . $keyword . '%');
    //     // $query = Form::where('nama_nasabah', 'LIKE', "%{$keyword}%");
    //     $list = $query->paginate(2);

    //     // $notaries = Notary::query()
    //     //     ->where('nomor_proyek', 'LIKE', "%{$search}%")
    //     //     ->get();

    //     return view('notaries.index', [
    //         'keyword' => $keyword,
    //         'query' => $query,
    //         'list' => $list
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotaryRequest $request)
    {
        // dd($request);

        $validatedData = $request->validated();

        // $form = new Form();

        // $notary = new Notary();
        // $notary = Notary::create($request->all());

        // $request->$form->notaries()->save($notary);

        // $notary->honor_notaris = $request->honor_notaris;

        Notary::create($validatedData);

        // $form->notaries()->createMany($request->input('notaries'));

        // $notaries =
        // $test = $form->notaries()->save();

        $request->session()->flash('success', 'New notary form has been created');

        return redirect(route('notary.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notary = Notary::find($id);

        return view('notaries.show', [
            'notary' => $notary
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('notaries.edit', [
            'notary' => Notary::find($id)
            // 'form' => Form::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotaryRequest $request, $id)
    {

        // $notary = Notary::with('form')->findOrFail($id);
        // $form = Form::with('notaries')->findOrFail($id);
        // $notary = Notary::findOrFail($id);

        // $notary->honor_notaris = $request->honor_notaris;

        $validatedData = $request->validated();

        $notary = Notary::findOrFail($id);
        // $form->where('') fill($request->all());
        // $form->save();

        $notary->update($validatedData);

        $request->session()->flash('success', 'Notary form has been updated');

        return redirect(route('notary.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Notary::destroy($id);

        $request->session()->flash('success', 'Notary form has been deleted');

        return redirect(route('notary.index'));
    }
}
