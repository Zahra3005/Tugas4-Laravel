@extends('layouts.app')

@section('title','Friends')

@section('content')

@foreach ($friends as $friend)
    <div class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="card-body">
    <a href="/friends/{{$friend['id']}}"class="card-title">{{ $friend['nama'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
    <p class="card-text">{{ $friend['alamat'] }}.</p>

    <a href="/friends/{{$friend['id']}}/edit" class="card-link btn-warning">Edit teman</a>
    <form action ="/friends/{{ $friend['id']}}" method="POST">
      @csrf 
      @method('DELETE')
      <button class="card-link btn-danger">Delete teman</button>
    </form>
  </div>
</div>

@endforeach
<div>
  {{$friends->links() }}
</div>
    
@endsection
    