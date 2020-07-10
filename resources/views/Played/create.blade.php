@extends('layouts.app') 
@section('content') 
<div class="container-fluid bg-white">
<div class="container bg-white">
            <nav class="navbar navbar-expand-sm bg-white navbar-white">
<ul class="navbar-nav">
	        <a class="nav-link" href="{{ url('/home') }}">Home</a>
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
            </a>
            <a class="nav-link" href="{{ url('/artist') }}">Artist</a>
            <a class="nav-link" href="{{ url('/album') }}">Album</a>
            <a class="nav-link" href="{{ url('/track') }}">Track</a>
            <a class="nav-link" href="{{ url('/played') }}">Played</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</ul>
</nav>
    <div class="row justify-content-center">
        <div class="col-md-8 bg-light">
<div class="container"> 
<h3>Tambah Data Played</h3>
<form action="{{ url('/played') }}">
@csrf
 <table>
 <tr>
 <td>ID artist</td>
 <td><input type="text" name="artist_id"></td>
 </tr>
 <tr>
 <td>ID album</td>
 <td><input type="text" name="album_id"></td>
 </tr>
  <tr>
 <td>ID Track</td>
 <td><input type="text" name="track_id"></td>
 </tr>
  <tr>
 <td>Played</td>
 <td><input type="text" name="played"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection 