@extends('layouts.app')

@section('content')

<div class="container">
<h1>Add a New Prize</h1>
<hr>


{!! Form::open([
    'route' => 'prizes.store'
]) !!}

<div class="form-group">
    {!! Form::label('number', 'Prize Number:', ['class' => 'control-label']) !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Prize Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('val', 'Price Value(AUD)', ['class' => 'control-label']) !!}
    {!! Form::text('val', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>




{!! Form::submit('Create New Prize', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>

@stop