@extends('layouts.app')

@section('content')
<div class="container">

    <h1><center> DATA MAHASISWA </h1></center>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
				 
		  <a href="{{ url('/datamahasiswa/create') }}" class="btn btn-success"> TAMBAH </a></br>
			<!-- FORM PENCARIAN -->
				</br>
				<form method="GET" action="{{ url('belumfix') }}">
    <div class="search_promo">
      <div class="input-group">
        <input type="text" name="q" value="{{$query or ''}}" placeholder="Belum FIX | Jangan klik C A R I ERROR" class="form-control" aria-label="...">
 
        <div class="input-group-btn btn_promo_search">
          <button type="submit" class="btn btn-success">C a r i</button> 
		     </div>
    </div>
    {!! Form::close() !!}
		 
		 
        </div>
 
   
	
	
				<!-- FORM PENCARIAN -->
				</br>
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
                        <a href="{{ url('/datamahasiswa/' . $item->id) }}" class="btn btn-success btn-xs" title="View Datamahasiswa"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>  </a>
                        <a href="{{ url('/datamahasiswa/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Datamahasiswa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/>  </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/datamahasiswa', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Datamahasiswa" /> ', array(
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
