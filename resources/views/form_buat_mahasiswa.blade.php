<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sambung Ilmu</title>
</head>
<body>
	<form action="{{ route('add_mahasiswa') }}" method="POST">
	{{ csrf_field() }}

  <h3>Silahkan input data Mahasiswa : </h3>
  
  <table width="300px">
   <tr>
    <td> <label>Nama</label> </td>
    
    <td><input  type="text" placeholder="Masukkan Nama" name="nama" /></td> </br>
   </tr>
  
   <tr>
    <td>Nim</td>
    
    <td> <input type="text" placeholder="Masukkan Nim" name="nim"  /> </td> </br>
   </tr>
  <tr>
    <td><input type="submit" value="Submit"> </td>
  </tr>
</form> 

</body>
</html>