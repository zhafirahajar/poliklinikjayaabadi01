<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>Data Pegawai</h2>
 
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->nama_pegawai }}</td>
			<td>{{ $p->jabatan_pegawai }}</td>
			<td>{{ $p->umur_pegawai }}</td>
			<td>{{ $p->alamat_pegawai }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->id_pegawai }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->id_pegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>