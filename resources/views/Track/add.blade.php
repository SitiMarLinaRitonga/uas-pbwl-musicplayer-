
@extends('layouts.app')

 @section('content')

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