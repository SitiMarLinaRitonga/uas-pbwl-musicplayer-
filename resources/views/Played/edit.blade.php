@extends('layouts.app') 
@section('content') 
<div class="container"> 
	<h3>Edit Data Played</h3>
	<form action="{{ url('/played/'.$row->play_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table> 
			<tr> 
			 	<td>ID ARTIST</td> 
			 	<td><input type="text" name="id_artist" value="{{$row->id_artist }}"></td> 
			</tr> 
			<tr> 
			  	<td>ID ALBUM</td> 
			  	 <td><input type="text" name="album_id" value="{{$row->album_id}}"></td> 
			</tr> 
			<tr> 
			  	<td>ID TRACK</td> 
			  	 <td><input type="text" name="track_id" value="{{$row->track_id}}"></td> 
			</tr> 
			<tr> 
			  	<td> NAMA </td> 
			  	 <td><input type="text" name="played" value="{{$row->played}}"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection