
@extends('layouts.app')

 @section('content')

<div class="container">

<h3>Tambah Data Artist</h3>
<form action="{{ url('/artist') }}">
@csrf
 <table>
 <tr>
 <td>ID</td>
 <td><input type="text" name="artist_id"></td>
 </tr>
 <tr>
 <td>NAMA</td>
 <td><input type="text" name="artist_name"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection 