<?php
include"koneksi.php"; 
$edit=mysql_query("SELECT * FROM user where hak_akses='admin'");
    $r=mysql_fetch_array($edit);
echo "<h4>Edit </h4>
	<hr><br>
          <form method=POST action=./aksi.php?page=anggota&act=update>
          <input type=hidden name=id value='$r[nip]'>
          <table class='table table-bordered table-striped'>
          
<tr><td> Username</td><td> : <input type=text name='nama' value='$r[nip]' size=15></td></tr> 
<tr><td>Password </td><td> : <input type=password name='tanggal' value='$r[password]'size=15></td></tr>

		  
          <tr><td colspan=2><input type=submit value=Update class='btn btn-primary'>
                            <input type=button value=Batal onclick=self.history.back() class='btn btn-warning'></td></tr>
          </table></form>";
		  ?>