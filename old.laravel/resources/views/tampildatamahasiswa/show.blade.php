@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Datamahasiswa {{ $datamahasiswa->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $datamahasiswa->id }}</td>
                </tr>
                <tr><th> {{ trans('datamahasiswa.nim') }} </th><td> {{ $datamahasiswa->nim }} </td></tr><tr><th> {{ trans('datamahasiswa.nama') }} </th><td> {{ $datamahasiswa->nama }} </td></tr><tr><th> {{ trans('datamahasiswa.fakultas') }} </th><td> {{ $datamahasiswa->fakultas }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('datamahasiswa/' . $datamahasiswa->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Datamahasiswa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['datamahasiswa', $datamahasiswa->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
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