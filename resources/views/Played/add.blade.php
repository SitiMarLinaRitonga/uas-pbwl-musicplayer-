
@extends('layouts.app')

 @section('content')

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