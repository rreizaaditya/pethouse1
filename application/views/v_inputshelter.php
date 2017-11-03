<!DOCTYPE html>
<html>
<head>
	<title>Tambah Shelter</title>
</head>
<body>
	<center>
		<h1>Tambah Shelter/h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crudshelter/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id</td>
				<td><input type="text" name="Id"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama lengkap"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>No Handphone</td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Jumlah Maksimal Hewan</td>
				<td><input type="text" name="jumlah makshewan"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>