@extends('layouts.app')

@section('content')

<div class="container">
<h1>Edit Raffle</h1>
<hr>


{!! Form::model($prize, [
    'method' => 'PATCH',
    'route' => ['prizes.update', $prize->id]
]) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('no_of_prizes', 'No of Prizes:', ['class' => 'control-label']) !!}
    {!! Form::text('no_of_prizes', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('total_value', 'Total Value:', ['class' => 'control-label']) !!}
    {!! Form::text('total_value', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('organisation', 'Organisation', ['class' => 'control-label']) !!}
    {!! Form::text('organisation', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('last_selling_date', 'Last Selling date:', ['class' => 'control-label']) !!}
    {!! Form::text('last_selling_date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('draw_date', 'Draw date:', ['class' => 'control-label']) !!}
    {!! Form::text('draw_date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('draw_place', 'Draw Place:', ['class' => 'control-label']) !!}
    {!! Form::text('draw_place', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('max_tickets', 'Max tickets:', ['class' => 'control-label']) !!}
    {!! Form::text('max_tickets', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('prize_per_ticket', 'Prize per ticket:', ['class' => 'control-label']) !!}
    {!! Form::text('prize_per_ticket', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('discount_multiple', 'Discount Multiple:', ['class' => 'control-label']) !!}
    {!! Form::text('discount_multiple', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price :', ['class' => 'control-label']) !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
    {!! Form::select('status',['Draft' => 'Draft', 'Activated Not Drawn' => 'Activated Not Drawn','Closed' => 'Closed'], ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Raffle', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>

@stop