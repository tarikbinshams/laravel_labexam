<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	
	<br>
	<a href="{{ route('userhome.index')}}">Home</a> |
	<a href="{{ route('userhome.processor')}}">Processor</a> |
	<a href="{{ route('userhome.ram')}}">Ram</a> |
	<a href="{{ route('userhome.casing')}}">Casing</a> |
	<a href="{{ route('userhome.gcard')}}">Graphics Card</a> |
	<a href="{{ route('logout.index')}}">logout</a>
	<br><br>
		<h1>All Avilable Storage's</h1>
	<br>

	<table border="1">
		<tr>
			<td>Name</td>
			<td>Price</td>
			<td>Review</td>
			<td>Action</td>
		</tr>


	@foreach($users as $std)
		<tr>
			<td>{{ $std->name }}</td>
			<td>{{ $std->price }}</td>
			<td>{{ $std->category }}</td>
			<td>
				<a href="{{ route('cart', $std->id)}}"> Add to Cart </a> | 
				<a href="{{ route('userhome.buy', $std->id) }}"> Buy Now </a>
				
			</td>
		</tr>
	@endforeach

	</table>


</body>
</html>