<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="156" height="286" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="156" height="19" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
      <tr>
        <td height="5"></td>
        </tr>
      <tr>
        <td height="100" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="156" height="15" valign="top" bgcolor="#00CCFF"><div align="center">Lihat Data </div></td>
              </tr>
          <tr>
            <td height="85" valign="top"><form name="form1" method="post" action="">
              <table width="100%" border="0">
                <tr>
                      </tr>
                      <tr>
                        <td bgcolor="#F4F4F4"><div align="center">
                          <input name="nip" type="text" id="nip" style="width:130px;" value="<?php echo $_POST[nip] ?>">
                        </div></td>
                      </tr>
                      <tr>
                        <td bgcolor="#F4F4F4"><div align="center">
                          <select name="bulan" class="kotak">
                            <option value="">Pilih Bulan</option>
							<option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                            </select>
                          <select name="tahun" class="kotak">
						  <option value="">Thn</option>
                            <?php 
					$i=2000;
					$y=date(Y);
					while($i<=$y){
				?>
                            <option value="<?php echo"$i";?>"><?php echo"$i";?></option>
                            <?php 
					$i++;
					}
				?>
                            </select>
                        </div></td>
                      </tr>
                <tr>
                  <td bgcolor="#F4F4F4"><div align="center"></div>                    <div align="center"></div></td>
                      </tr>
                <tr>
                  <td bgcolor="#F4F4F4"><div align="center">
                    <a href=""><input type="button" name="Reset" value="Reset"></a>
                    <input type="submit" name="ss" value="Lihat Data">
                    </div></td>
                      </tr>
                <tr>
                  <td bgcolor="#00CCFF">&nbsp;</td>
                    </tr>
                <tr>
                  <td><div align="center">
				  <input type="image" name="ssi" value="Print" src="images/Network Printer.png" width="83" height="70">
				  </div></td>
                    </tr>
                </table>
                        </form>            </td>
              </tr>
          </table></td>
        </tr>
      <tr>
        <td height="2"></td>
        </tr>
      
    </table></td>
    <td width="803" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="803" height="300" valign="top"><iframe width="100%" src="system/keuangan/jurnal_pph.php?stts=<?php echo $_POST[stts] ?>&nip=<?php echo $_POST[nip] ?>&bulan=<?php echo $_POST[bulan] ?>&tahun=<?php echo $_POST[tahun] ?>&ssi=<?php echo $_POST[ssi] ?>" height="300" style="border:1px #BBBBBB solid"></iframe></td>
        </tr>
      
      
    </table></td>
  </tr>
  <tr>
    <td height="14"></td>
  </tr>
</table>
