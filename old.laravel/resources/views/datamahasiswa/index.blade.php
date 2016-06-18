@extends('layouts.app')

@section('content')
<div class="container">

    <h1>DATA MAHASISWA <a href="{{ url('/datamahasiswa/create') }}" class="btn btn-primary btn-xs" title="Add New Datamahasiswa"><span class="glyphicon glyphicon-plus" aria-hidden="true"/> TAMBAH </a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th><th> {{ trans('datamahasiswa.nim') }} </th><th> {{ trans('datamahasiswa.nama') }} </th><th> {{ trans('datamahasiswa.fakultas') }} </th><th> {{ trans('datamahasiswa.jurusan') }} </th><th> {{ trans('datamahasiswa.alamat') }} </th><th><center>Actions</center></th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($datamahasiswa as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nim }}</td><td>{{ $item->nama }}</td><td>{{ $item->fakultas }}</td><td>{{ $item->jurusan }}</td><td>{{ $item->alamat }}</td>
                    <td> <center>
                        <a href="{{ url('/datamahasiswa/' . $item->id) }}" class="btn btn-success btn-xs" title="View Datamahasiswa"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/> VIEW </a>
                        <a href="{{ url('/datamahasiswa/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Datamahasiswa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/> EDIT </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/datamahasiswa', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Datamahasiswa" /> DELETE', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Datamahasiswa',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
						</center>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $datamahasiswa->render() !!} </div>
    </div>

</div>
@endsection
