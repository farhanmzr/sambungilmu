<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tampilan Data Mahasiswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h2><center><b>DATA MAHASISWA TEKNIK KOMPUTER</center></b></h2> 

<h2><center><b>UNIVERSITAS DIPONEGORO</center></b></h2>
</br>
	<table class="table table-hover";
	<tr>
		<th>NIM</th>
		<th>NAMA</th>
		<th colspan="2"> AKSI</th>
	</tr>
  @foreach($mahasiswas as $mahasiswa)
	<tr>
		<td>{{ $mahasiswa->nim }}</td>
		<td>{{ $mahasiswa->nama }}</td>
		<td><a class="btn btn-default" href="{{ url('mahasiswa/edit/'.$mahasiswa->id) }}">Edit</a></td>
		<td><a class ="btn btn-danger" href="{{ url('mahasiswa/delete/'.$mahasiswa->id) }}">Delete</a></td>
	</tr>
  @endforeach
</table>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>