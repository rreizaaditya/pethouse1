<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Shelter</title>
</head>
<body>
	<center>
		<h1>Edit Data Shelter</h1>
		<h3>Edit Data</h3>

	<?php foreach($shelter as $u){ ?>
	<form action="<?php echo base_url(). 'crudshelter/edit'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id_shelter ?>">
					<input type="text" name="nama" value="<?php echo $u->username ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="namat" value="<?php echo $u->nama_lengkap ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td>No Handphone</td>
				<td><input type="text" name="no hp" value="<?php echo $u->no_hp ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $u->password ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Maks</td>
				<td><input type="text" name="jumlah maks hewan" value="<?php echo $u->jumlah_makshewan ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi" value="<?php echo $u->deskripsi ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>		</center>
	<?php } ?>
</body>
</html>