<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sambung Ilmu</title>
</head>
<body>
	<form action="{{ route('update_dosen') }}" method="POST">
	{{ csrf_field() }}


<table width="300px">
   <tr>
    <td> <label>Nama</label> </td>
    
    <td><input  type="text" placeholder="Masukkan Nama" name="nama" value="{{ $dosen->nama}}"/></td> </br>
   </tr>
  
   <tr>
    <td>Nip</td>
    
    <td> <input type="text" placeholder="Masukkan Nim" name="nim" value="{{ $dosen->nip}}" /> </td> </br>
   </tr>
   <tr>
     <td> <input type="submit" value="Submit"> </td>
</tr>
  <input type="hidden" name="id" value="{{ $dosen->id }}">
  
</form> 

</body>
</html>