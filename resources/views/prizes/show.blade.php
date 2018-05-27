@extends('layouts.app')

@section('content')

<h1>{{ $prize->title }}</h1>
<p class="lead">{{ $prize->description }}</p>
<hr>

<div class="container">
	<table class="table table-striped">
    
    <tbody>
      <tr>
        <td>Name</td>
        <td>{{ $prize->name}}</td>        
      </tr>  
      <tr>
        <td>No Of Prizes</td>
        <td>{{ $prize->no_of_prizes}}</td>    
      </tr> 
      <tr>
        <td>Total value</td>
        <td>{{ $prize->total_value}}</td>         
      </tr> 
      <tr>
        <td>Organisation</td>
        <td>{{ $prize->organisation}}</td>    
      </tr> 
      <tr>
        <td>Last selling date</td>
        <td>{{ $prize->last_selling_date}}</td>       
      </tr> 
      <tr>
        <td>Draw date</td>
        <td>{{ $prize->draw_date}}</td>    
      </tr> 
      <tr>
        <td>Draw Place</td>
        <td>{{ $prize->draw_place}}</td>     
      </tr> 
      <tr>
        <td>Max tickets</td>
        <td>{{ $prize->max_tickets}}</td>      
      </tr>
      <tr>
        <td>Price per ticket</td>
        <td>{{ $prize->prize_per_ticket}}</td>        
      </tr> 
      <tr>
        <td>status</td>
        <td>{{ $prize->status}}</td>     
      </tr> 

    </tbody>
  </table>
</div>


		

<a href="{{ route('prizes.index') }}" class="btn btn-info">Back to all prizes</a>
<a href="{{ route('prizes.edit', $prize->id) }}" class="btn btn-primary">Edit Task</a>

      {!! Form::open([
            'method' => 'DELETE',
            'route' => ['prizes.destroy', $prize->id]
        ]) !!}
            {!! Form::submit('Delete this prize?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}	



@stop