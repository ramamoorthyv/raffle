@extends('layouts.app')

@section('content')
<div class="container"><br>
<a href='{!! url('/prizes/create'); !!}'>Add new </a>
<div class="row">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Prize Number</th>
        <th>Prize Name</th>
        <th>description</th>
        <th>Draw date</th>
        <th>Price Value</th>
        
        <th>Action</th>
        
        
      </tr>
    </thead>
    <tbody>
    @foreach($prizes as $prize)
      <tr>
       <td>{{ $prize->number }}</td>
       
       <td>{{ $prize->name }}</td>
       <td>{{ $prize->description }}</td>
       <td>{{ $prize->val }}</td>
       <td>
       
        <a href="{{ route('prizes.show', $prize->id) }}" class="btn btn-info">View Task</a>
        <a href="{{ route('prizes.edit', $prize->id) }}" class="btn btn-primary">Edit Task</a>
        
        </td>
      </tr>
     @endforeach 
    </tbody>
  </table>
  </div>
</div>  

@endsection