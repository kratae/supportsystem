<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
<form action="<?php echo base_url();?>index.php/HomeCustomer/updateData" method="post">
<?php foreach($listcustomer as $V ){?>
<table class="CSSTableGenerator">
<tr>
  <td colspan="3"><center><h2>แก้ไขข้อมูลลูกค้า</h2></center></td>
</tr>
  <tr>
  <td width="232">รหัสลูกค้า:
 	 <input type="hidden" name="cusid" required value="<?php echo $V ['cusid']?>"></td>
    <td width="204">ชื่อ:
      <input type="text" name="cusname" required value="<?php echo $V ['cusname']?>"></td>
    <td width="189">นามสกุล:      
      <input type="text" name="cuslname" value="<?php echo $V ['cuslname']?>"></td>
  </tr>
  <tr>
    <td colspan="2">ที่อยู่:
      <input type="text" name="cusaddress" value="<?php echo $V ['cusaddress']?>"></td>
    <td>เบอร์โทร
      <input type="text" name="custel" value="<?php echo $V ['custel']?>"></td>
  </tr>
  <tr>
    <td colspan="3">รหัส QR-Code
      <input type="text" name="cusqrcodeid" value="<?php echo $V ['cusqrcodeid']?>"></td>
    </tr>
  <tr>
    <td colspan="3"><center><input type="submit" name="add" value="แก้ไข"></center></td>
    </tr>
</table>
<?php }?>
</form>
</body>
</html>


