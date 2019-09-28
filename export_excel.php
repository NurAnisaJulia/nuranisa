<?php 
//disini kita akan mengkoneksikan database
$db_host='localhost'; //nama host
$db_user='root'; //nama user
$db_pass=''; //password
$db_db='db_onlineshop'; //database yang akan di hubungkan

$db_conn=mysql_connect($db_host,$db_user,$db_pass,$db_db) or die ('Tidak terhubung ke mysql');
$db_select=mysql_select_db($db_db) or die('Tidak terhubung ke database');
//kita akan menambahkan script export di sini
header("content-type:application/vnd-ms-exel");
//membuat file excel
header("content-disposition:attachment;filename=Daftar-ongkir-jakarta.xls");
//membuat nama file

?>

<table border="1" width="100%">
	<tr align="center" bgcolor="yellow">
		<td>ID ongkir</td>
		<td>Provinsi</td>
		<td>Kota</td>
		<td>Kecamatan</td>
		<td>REG</td>
		<td>OKE</td>
		<td>YES</td>
	</tr>
	<?php
		$query=mysql_query("select * from ongkir");
		while($data=mysql_fetch_array($query)){
	 ?>
	<tr>
		<td><?php echo $data['id_ongkir']; ?></td>
		<td><?php echo $data['provinsi']; ?></td>
		<td><?php echo $data['kota']; ?></td>
		<td><?php echo $data['kecamatan']; ?></td>
		<td><?php echo $data['reg']; ?></td>
		<td><?php echo $data['oke']; ?></td>
		<td><?php echo $data['yes']; ?></td>
	</tr>
	<?php } ?>
</table>