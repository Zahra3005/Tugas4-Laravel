@extends('layouts.app')

@section('title','Friends')

@section('content')


  <form action="/friends/{{$friend['id']}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
      <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp"
      value="{{ old('nama')? old('nama') : $friend['nama'] }}">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">No Telepon</label>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
      <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1"
      value="{{ old('no_tlp')? old('no_tlp') : $friend['no_tlp'] }}">
      @error('no_tlp')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Alamat</label>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
      <input type="text" class="form-control" name="alamat" id="exampleInputPassword1"
      value="{{ old('alamat')? old('alamat') : $friend['alamat'] }}">
      @error('alamat')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
    