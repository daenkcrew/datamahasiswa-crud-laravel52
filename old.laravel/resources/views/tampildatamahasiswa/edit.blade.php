@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Datamahasiswa {{ $datamahasiswa->id }}</h1>

    {!! Form::model($datamahasiswa, [
        'method' => 'PATCH',
        'url' => ['/datamahasiswa', $datamahasiswa->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nim') ? 'has-error' : ''}}">
                {!! Form::label('nim', trans('datamahasiswa.nim'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nim', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', trans('datamahasiswa.nama'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fakultas') ? 'has-error' : ''}}">
                {!! Form::label('fakultas', trans('datamahasiswa.fakultas'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fakultas', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fakultas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jurusan') ? 'has-error' : ''}}">
                {!! Form::label('jurusan', trans('datamahasiswa.jurusan'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('jurusan', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
                {!! Form::label('alamat', trans('datamahasiswa.alamat'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', trans('datamahasiswa.email'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telp') ? 'has-error' : ''}}">
                {!! Form::label('telp', trans('datamahasiswa.telp'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
                {!! Form::label('foto', trans('datamahasiswa.foto'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection