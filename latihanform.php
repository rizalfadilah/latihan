<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="tugasform.php" METHOD="POST" NAME="input">
<table>
<tr>
<td>Nama : </td>
<input type="text" name="nama"<br></tr></td>;

<tr>
<td>NIS : 
<input type="number" name="nis"<br></tr></td>;

<tr>
<td>Alamat : </td>
<textarea name="saran" cols="40"
rows="5"></textarea><br></td></tr>

<tr>
<td> Jenis Kelamin</td>
</td> <input type="radio" name="agama" value="Lk" checked>
Laki Laki
<input type="radio" name="agama" value="pr"> Perempuan<br></tr></td>

<tr>

<td>agama </td>
<td><select name="agama">
<option value="islam">islam</option>
<option value="Kristen">kriseten</option>
<option value="Budha">budha</option>
</td></tr>

</select>
<br>
<tr>
<td>Asal Sekolah </td>
<td><input type="text" name ="asal"<br></tr></td><br>
<tr>
<td> mata pelajaran</td>
<td><input type = "checkbox" name="ips" value="ips"> ips
<td><input type = "checkbox" name="ipa" value="ipa"> ipa
</td>
<br>
</tr>
<tr>
<td>nilai ijazah</td>
<td><input type="text" name="ijazah"><br></tr></td>

<tr>
<br>
<tr>
<td>email </td>
<td><input type="text" name="email"><br></tr></td>

<tr>
<br>
</table>

<input type="submit" name="input" value="input">

</FORM>
</body>
</html>