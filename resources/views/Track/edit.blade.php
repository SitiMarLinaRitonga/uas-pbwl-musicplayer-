@extends('layouts.app') 
@section('content') 
<div class="container"> 
	<h3>EDIT Data Track</h3>
	<form action="{{ url('/track/'.$row->track_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table> 
			<tr> 
			 	<td>ID TRACK</td> 
			 	<td><input type="text" name="track_id" value="{{$row->track_id }}"></td> 
			</tr> 
			<tr> 
			 	<td>NAMA TRACK</td> 
			 	<td><input type="text" name="track_name" value="{{$row->track_name}}"></td> 
			</tr>
			<tr> 
			 	<td>ID ARTIST</td> 
			 	<td><input type="text" name="artist_id" value="{{$row->artist_id }}"></td> 
			</tr>
			<tr> 
			 	<td>ID ALBUM</td> 
			 	<td><input type="file" name="album_id" value="{{$row->album_id}}"></td> 
			</tr>
			<tr> 
			 	<td>TIME</td> 
			 	<td><input type="file" name="album_id" value="{{$row->time}}"></td> 
			</tr>
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection