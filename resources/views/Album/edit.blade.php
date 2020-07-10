@extends('layouts.app') 
@extends('layouts.app') 
@section('content') 
<div class="container"> 
	<h3>Edit Data Album</h3>
	<form action="{{ url('/album/'.$row->album_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table> 
			<tr> 
			 	<td>ID ARTIST/td> 
			 	<td><input type="text" name="artist_id" value="{{$row->artist_id }}"></td> 
			</tr> 
			<tr> 
			  	<td>ID ALBUM</td> 
			  	 <td><input type="text" name="album_id" value="{{$row->album_id }}"></td> 
			</tr> 
			<tr> 
			  	<td>NAMA</td> 
			  	 <td><input type="text" name="album_name" value="{{$row->album_name }}"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection