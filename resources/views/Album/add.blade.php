
@extends('layouts.app')

 @section('content')

<div class="container">

<h3>Tambah Data Album</h3>
<form action="{{ url('/album') }}">
@csrf
 <table>
 <tr>
 <td>ID ARTIST</td>
 <td><input type="text" name="artist_id"></td>
 </tr>
 <tr>
 <td>ID ALBUM</td>
 <td><input type="text" name="album_id"></td>
 </tr>
 <tr>
 <td>NAMA ALBUM</td>
 <td><input type="text" name="album_name"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection 