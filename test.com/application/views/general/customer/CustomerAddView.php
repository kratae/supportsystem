<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
<form action="<?php echo base_url();?>index.php/homeCustomer/add" method="post">
<table align="center" class="CSSTableGenerator">
<tr>
  <td colspan="2"><center><h2>เพิ่มข้อมูลลูกค้า</h2></center></td>
</tr>
  <tr>
    <td>ชื่อ:
      <input type="text" name="cusname" required></td>
    <td>นามสกุล:
      <input type="text" name="cuslname"></td>
  </tr>
  <tr>
    <td>ที่อยู่:
      <input type="text" name="cusaddress"></td>
    <td>เบอร์โทร
      <input type="text" name="custel"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="add" value="เพิ่ม"></td>
  </tr>
</table>
</form>
</body>
</html>


