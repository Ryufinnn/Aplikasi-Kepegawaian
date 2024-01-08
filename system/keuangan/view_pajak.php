    <script type="text/javascript">
function selectKnt(knt,knt2,knt3){
  $('input[name=nip]').val(knt);
  $('input[name=nama]').val(knt2);
  tb_remove(); // hilangkan dialog thickbox
   location.replace("../ukeuangan.php?page=d-pajak&nid="+knt+"&nm="+knt2+"&dt="+knt3);
}
</script>
  <p style="font-size:18px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">
  Pajak Penghasilan Pasal 21<br> (<?php echo date(m)." / ".date(Y) ?>)</p>
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
        <div class="sidebar_search" align="right">
          <input type="text" name="nip" id="nip" class="search_input" value="<?php echo $usr ?>" onClick="this.value=''" readonly="" />
          <a href="popup/pegawai.php?pajak=yes&width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
          <input name="image" type="image" class="search_submit" src="images/search.png" />
        </a> </div>
      </form></td>
    </tr>
  </table>
  <br>
  .</p>