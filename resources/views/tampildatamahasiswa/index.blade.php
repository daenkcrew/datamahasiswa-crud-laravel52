@extends('layouts.app')

@section('content')
<div class="container">

    <h1><center>DATA MAHASISWA</center></h1></br>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('datamahasiswa.nim') }} </th><th> {{ trans('datamahasiswa.nama') }} </th><th> {{ trans('datamahasiswa.fakultas') }} 
                </tr>
            </thead>
            
        </table>
        <div class="pagination"> {!! $datamahasiswa->render() !!} </div>
    </div>

</div>
@endsection
