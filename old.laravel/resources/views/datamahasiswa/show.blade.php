@extends('layouts.app')

@section('content')
<div class="container">

    <h1>DATA MAHASISWA {{ $datamahasiswa->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>No</th><td>{{ $datamahasiswa->id }}</td>
                </tr>
                <tr><th> {{ trans('datamahasiswa.nim') }} </th><td> {{ $datamahasiswa->nim }} </td></tr><tr><th> {{ trans('datamahasiswa.nama') }} </th><td> {{ $datamahasiswa->nama }} </td></tr><tr><th> {{ trans('datamahasiswa.fakultas') }} </th><td> {{ $datamahasiswa->fakultas }} </td></tr><tr><th> {{ trans('datamahasiswa.jurusan') }} </th><td> {{ $datamahasiswa->jurusan }} </td></tr> <tr><th> {{ trans('datamahasiswa.alamat') }} </th><td> {{ $datamahasiswa->alamat }} </td></tr><tr><th> {{ trans('datamahasiswa.email') }} </th><td> {{ $datamahasiswa->email }} </td></tr> <tr><th> {{ trans('datamahasiswa.telp') }} </th><td> {{ $datamahasiswa->telp }} </td></tr> <tr><th> {{ trans('datamahasiswa.foto') }} </th><td> {{ $datamahasiswa->foto }} </td></tr> 
            </tbody>
            <tfoot>
                <tr> 
                    <td colspan="2">
                        <a href="{{ url('datamahasiswa/' . $datamahasiswa->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Datamahasiswa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/> EDIT </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['datamahasiswa', $datamahasiswa->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/> DELETE', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Datamahasiswa',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
@endsection