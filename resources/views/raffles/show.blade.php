@extends('layouts.app')

@section('content')

<h1>{{ $raffle->title }}</h1>
<p class="lead">{{ $raffle->description }}</p>
<hr>

<div class="container">
	<table class="table table-striped">
    
    <tbody>
      <tr>
        <td>Name</td>
        <td>{{ $raffle->name}}</td>        
      </tr>  
      <tr>
        <td>No Of Prizes</td>
        <td>{{ $raffle->no_of_prizes}}</td>    
      </tr> 
      <tr>
        <td>Total value</td>
        <td>{{ $raffle->total_value}}</td>         
      </tr> 
      <tr>
        <td>Organisation</td>
        <td>{{ $raffle->organisation}}</td>    
      </tr> 
      <tr>
        <td>Last selling date</td>
        <td>{{ $raffle->last_selling_date}}</td>       
      </tr> 
      <tr>
        <td>Draw date</td>
        <td>{{ $raffle->draw_date}}</td>    
      </tr> 
      <tr>
        <td>Draw Place</td>
        <td>{{ $raffle->draw_place}}</td>     
      </tr> 
      <tr>
        <td>Max tickets</td>
        <td>{{ $raffle->max_tickets}}</td>      
      </tr>
      <tr>
        <td>Price per ticket</td>
        <td>{{ $raffle->prize_per_ticket}}</td>        
      </tr> 
      <tr>
        <td>status</td>
        <td>{{ $raffle->status}}</td>     
      </tr> 

    </tbody>
  </table>
</div>


		

<a href="{{ route('raffles.index') }}" class="btn btn-info">Back to all raffles</a>
<a href="{{ route('raffles.edit', $raffle->id) }}" class="btn btn-primary">Edit Task</a>

<div class="pull-right">
    <a href="#" class="btn btn-danger">Delete this raffle</a>
</div>

@stop