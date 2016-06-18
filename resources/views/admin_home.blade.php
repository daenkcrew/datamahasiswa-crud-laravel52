@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Admin</div>

                <div class="panel-body">
				{{ Auth::user()->name}}</br></br>
				<b>ADA BERADA DI ZONA FULL AKSES dimana zona ini hanya bisa mengakses apapun!.</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
