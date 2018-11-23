<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sambung Ilmu</title>
</head>
<body>
	<form action="{{ route('update_mahasiswa') }}" method="POST">
	{{ csrf_field() }}


<table width="300px">
   <tr>
    <td> <label>Nama</label> </td>
    
    <td><input  type="text" placeholder="Masukkan Nama" name="nama" value="{{ $mahasiswa->nama}}"/></td> </br>
   </tr>
  
   <tr>
    <td>Nim</td>
    
    <td> <input type="text" placeholder="Masukkan Nim" name="nim" value="{{ $mahasiswa->nim}}" /> </td> </br>
   </tr>
   <tr>
     <td> <input type="submit" value="Submit"> </td>
</tr>
  <input type="hidden" name="id" value="{{ $mahasiswa->id }}">
  
</form> 

</body>
</html>