<!DOCTYPE html>
<html>
<head>
	<title>Data Shelter</title>
</head>
<body>
	<br><br><br><br><center><h1>Data Shelter</h1></center>
	<center><?php echo anchor('crudshelter/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>No Handphone</th>
			<th>Password</th>
			<th>Alamat</th>
			<th>Jumlah Hewan</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($shelter as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->nama_lengkap ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->no_hp ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->jumlah_makshewan ?></td>
			<td><?php echo $u->deskripsi ?></td>
			 
			<td>
			      <?php echo anchor('crudshelter/edit'.$u->id_shelter,'Edit'); ?>
                  <?php echo anchor('crudshelter/hapus'.$u->id_shelter,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>