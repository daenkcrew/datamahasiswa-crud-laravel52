<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\datamahasiswa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class datamahasiswaController extends Controller
{
	
	 /** khusus admin user biasa hanya bisa melihat sebagian data mahasiswa jika diklik button tambah, view, edit atau hapus akan redirec ke home*/
	public function __construct()
{
$this->middleware('admin', ['except' => ['index']]);
}
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
	 
	 
    public function index()
    {
        $datamahasiswa = datamahasiswa::paginate(15);

        return view('datamahasiswa.index', compact('datamahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('datamahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        datamahasiswa::create($request->all());

        Session::flash('flash_message', 'datamahasiswa added!');

        return redirect('datamahasiswa');
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
        $datamahasiswa = datamahasiswa::findOrFail($id);

        return view('datamahasiswa.show', compact('datamahasiswa'));
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
        $datamahasiswa = datamahasiswa::findOrFail($id);

        return view('datamahasiswa.edit', compact('datamahasiswa'));
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
        
        $datamahasiswa = datamahasiswa::findOrFail($id);
        $datamahasiswa->update($request->all());

        Session::flash('flash_message', 'datamahasiswa updated!');

        return redirect('datamahasiswa');
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
        datamahasiswa::destroy($id);

        Session::flash('flash_message', 'datamahasiswa deleted!');

        return redirect('datamahasiswa');
    }
}
