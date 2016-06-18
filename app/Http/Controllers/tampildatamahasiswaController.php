<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tampildatamahasiswa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class tampildatamahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $tampildatamahasiswa = tampildatamahasiswa::paginate(15);

        return view('tampildatamahasiswa.index', compact('tampildatamahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('tampildatamahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        tampildatamahasiswa::create($request->all());

        Session::flash('flash_message', 'tampildatamahasiswa added!');

        return redirect('tampildatamahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $tampildatamahasiswa = tampildatamahasiswa::findOrFail($id);

        return view('tampildatamahasiswa.show', compact('tampildatamahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $tampildatamahasiswa = tampildatamahasiswa::findOrFail($id);

        return view('tampildatamahasiswa.edit', compact('tampildatamahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        
        $tampildatamahasiswa = tampildatamahasiswa::findOrFail($id);
        $tampildatamahasiswa->update($request->all());

        Session::flash('flash_message', 'tampildatamahasiswa updated!');

        return redirect('tampildatamahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        tampildatamahasiswa::destroy($id);

        Session::flash('flash_message', 'tampildatamahasiswa deleted!');

        return redirect('tampildatamahasiswa');
    }
}
