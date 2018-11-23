<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sambung Ilmu</title>
</head>
<body>
	<form action="{{ route('matkul_add') }}" method="POST">
	{{ csrf_field() }}

  <h3>Silahkan input Mata Kuliah Mahasiswa : </h3>
  
  <table width="300px">
   <tr>
    <td> <label>Mata Kuliah</label> </td>
    
    <td><input  type="text" placeholder="Masukkan Mata Kuliah" name="nama" /></td> </br>
   </tr>
    <td><input type="submit" value="Submit"> </td>
  </tr>
</form> 

</body>
</html>