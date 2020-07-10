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
	<h3>Tambah Data Track</h3>
<form action="{{ url('/track') }}">
@csrf
 <table>
 <tr>
 <td>ID</td>
 <td><input type="text" name="track_id"></td>
 </tr>
 <tr>
 <td>NAMA</td>
 <td><input type="text" name="track_name"></td>
 </tr>
  <tr>
 <td>ID ARTIST</td>
 <td><input type="text" name="artist_id"></td>
 </tr>
  <tr>
 <td>ID ALBUM</td>
 <td><input type="text" name="album_id"></td>
 </tr>
 <tr>
 <td>TIME</td>
 <td><input type="text" name="time"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection 