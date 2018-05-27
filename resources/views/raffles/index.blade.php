@extends('layouts.app')

@section('content')
<div class="container"><br>
<a href='{!! url('/raffles/create'); !!}'>Add new </a>
<div class="row">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Organisation</th>
        <th>Last selling date</th>
        <th>Draw date</th>
        <th>Draw place</th>
        <th>Maximum tickets</th>
        <th>Action</th>
        
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($raffles as $raffle)
      <tr>
       <td>{{ $raffle->name }}</td>
       
       <td>{{ $raffle->organisation }}</td>
       <td>{{ $raffle->last_selling_date }}</td>
       <td>{{ $raffle->draw_date }}</td>
       <td>{{ $raffle->draw_place }}</td>
       <td>{{ $raffle->max_tickets }}</td>      
       <td>{{ $raffle->status }}</td>
       <td>
       
        <a href="{{ route('raffles.show', $raffle->id) }}" class="btn btn-info">View </a>
        <a href="{{ route('raffles.edit', $raffle->id) }}" class="btn btn-primary">Edit </a>
        
        </td>
      </tr>
     @endforeach 
    </tbody>
  </table>
  </div>
</div>  

@endsection