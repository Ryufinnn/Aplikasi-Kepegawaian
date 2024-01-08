<h1 align="left">LIST DATA PEGAWAI</h1><hr/>
<?php
include('koneksi.php');
$q=mysql_query("select * from pegawai_tetap order by nip");
?>
<table border="1" align="center">
<tr>
    <td>NIP</td>
    <td>Nama</td>
    <td>Tanggal_Lahir</td>
    <td>Agama</td>
    <td>No_Telp</td>
    <td>Alamat</td>
    <td>Kota</td>
    <td>Jenis_Kelamin</td>
    <td>Pendidikan</td>
	<td>Jabatan</td>
    <td>Departemen</td>
	<td>Status Kepegawaian</td>
    <td>Masa_Kerja</td>
    <td>Foto</td>
    <td>Edit</td>
</tr>
<?php
	while($datapegawai=mysql_fetch_array($q)){
		?>
			<tr align="left" valign="top">
				<td>
					<?php echo $datapegawai[0]?>
				</td>
				<td>	
					<?php echo $datapegawai[1]?>
				</td>
                <td>
					<?php echo $datapegawai[2]?>
				</td>
                <td>
					<?php echo $datapegawai[4]?>
				</td>
                <td>
					<?php echo $datapegawai[5]?>
				</td>
                <td>
					<?php echo $datapegawai[6]?>
				</td>
                <td>
					<?php echo $datapegawai[8]?>
				</td>
                <td>
					<?php echo $datapegawai[9]?>
				</td>
                <td>
					<?php echo $datapegawai[10]?>
				</td>
                <td>
					<?php echo $datapegawai[12]?>
				</td>
                <td>
					<?php echo $datapegawai[14]?>
				</td>
                 <td>
					<?php echo $datapegawai[15]?>
				</td>
                 <td>
					<?php echo $datapegawai[19]?>
				</td>
                <td>
					<a href="?id=<?=@$datapegawai[0]?>&foto=detail"><img src="../<?=@$datapegawai[20];?>" title="Klik untuk Melihat detail foto" width="50" height="50"/></a>
				</td>
                <td align="center" bgcolor="#CCCCCC">
					<a href="update_pegawai.php?id=<?php echo $datapegawai[0]; ?>">update</a>	
					<a href="delete_pegawai.php?id=<?php echo $datapegawai[0]; ?>">delete</a>
				</td>															
			</tr>
		<?php
	}
?>  
</table>
<?php
@$foto=$_GET['foto'];
@$id=$_GET['id'];
if(isset($id)){
	$query = mysql_query("select * from pegawai_tetap where nip = '$id'");
	$show = mysql_fetch_array($query);
	if($foto =='detail'){?>
    	<div style="
        position:fixed;
        left:340px;
        border:14px #000000 solid;
        -moz-border-radius:10px;
        -webkit-border-radius:10px;
        top:100px;">
        <a href="view_buruh.php"><img src="../<?=@$show[20]?>" title="<?=@$show[1]?>" width="600" height="400"/></a>
        </div>
	<? }
}?>
</body>
</html>