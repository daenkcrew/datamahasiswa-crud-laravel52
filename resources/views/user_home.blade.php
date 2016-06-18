@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard User <b>{{ Auth::user()->name}}</b>
				</div>

                <div class="panel-body">
				 ADA BERADA DI ZONA USER BIASA dimana zona ini hanya bisa melihat saja tidak bisa menambah, mengedit atau menghapus. 
				</br>Jika itu terjadi maka akan mendirect ke halaman pertama 
				<b></br></br>Silahkan klik DATA MAHASISWA (untuk melihat sebagaian data)</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
