<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sambung Ilmu</title>
</head>
<body>
	<form action="{{ route('dosen_add') }}" method="POST">
	{{ csrf_field() }}

    <h3>Silahkan input data Dosen : </h3>

<table width="300px">
   <tr>
    <td> <label>Nama</label> </td>
    
    <td><input  type="text" placeholder="Masukkan Nama" name="nama" /></td> </br>
   </tr>
  
   <tr>
    <td>Nip</td>
    
    <td> <input type="text" placeholder="Masukkan Nip" name="nip"  /> </td> </br>
   </tr>
  <tr>
    <td><input type="submit" value="Submit"> </td>
  </tr>
</form> 

</body>
</html>