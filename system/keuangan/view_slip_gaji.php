    <script type="text/javascript">
function selectKnt(knt,knt2,knt3){
  $('input[name=nip]').val(knt);
  $('input[name=nama]').val(knt2);
  tb_remove(); // hilangkan dialog thickbox
   location.replace("../ukeuangan.php?page=d-pajak&nid="+knt+"&nm="+knt2+"&dt="+knt3);
}
</script>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

  <p style="font-size:18px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">
  Slip Gaji Pegawai <br>
   (<?php echo date(m)." / ".date(Y) ?>)</p>
  <p >
  <?php
  	if(isset($_GET[nid])){
		$usr="$_GET[nid]";
	}
	else{
		$usr="Masukan Nip";
	}
  
  ?>
  <table width="208" height="59" border="0" align="center" style="border:1px solid #0099FF;">
    <tr>
      <td><form action="" method="post">
        
		
          <div align="center">
            <select name="menu1" onchange="MM_jumpMenu('parent',this,0)" class="search_input">
			<option value="#">Pilih salah Satu</option>
              <option value="?page=d-slip&io=Tetap">Pegawai Tetap</option>
              <option value="?page=d-slip&io=Kontrak">Pegawai Kontrak</option>
              <option value="?page=d-slip&io=Buruh">Buruh</option>
            </select>
            
              </div>
      </form></td>
    </tr>
  </table>
  <br>
  .</p>