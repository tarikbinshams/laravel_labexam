<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h1>Buy</h1>

	<a href="{{route('userhome.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$user['name']}}" readonly></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category" value="{{$user['category']}}" readonly></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{$user['price']}}" readonly></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>