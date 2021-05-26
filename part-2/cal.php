<html>
<head>
<title> salary of an Employee</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
body {
  background-color:grey ;
}
</style>
                </head>
                <body>
                 <form method="post" action="cal.php" >
                 <div class="input-group">
                <table> 
                <tr>
                <th><label> Salary in USD </label> </th>
                <th><input type="number" name="salary" value="salary" placeholder="Enter basic salary"/>$</th>
                </div>
                <div class="input-group">
                 <tr><td><label>Tax Free Allowance in USD </label> </td>
                 <td><input type="number" name="taxfree" value="" placeholder="Tax Free Allowance in USD"/>$</td></tr>
                 </div>
                 <div class="input-group">
                 <tr><td><p> Yearly or monthly.</p></td>
                 <td><label class="custom-control custom-control-primary custom-radio">
                 <input class="custom-control-input" type="radio" name="comission_type" value="month">
                 <span class="custom-control-indicator"></span>
                 <span class="custom-control-label">Monthly</span>
                 </label>
                 <label class="custom-control custom-control-primary custom-radio">
                 <input class="custom-control-input" type="radio" name="comission_type" value="year">
                 <span class="custom-control-indicator"></span>
                 <span class="custom-control-label">Yearly</span>
                 </label></td></tr></table>
                 </div>
                 <button type="submit" class="submit" name="submit">Result</button>
                 </div>
                </form>
              <?php
if(isset($_POST['submit']))
{
$basic_salary = $_POST['salary'];
$taxfree= $_POST['taxfree'];
$comission_type = $_POST['comission_type'];
if($comission_type == 'year'){
  $month=$basic_salary/12;
  $year=$basic_salary;
  echo "Year";
   if ($basic_salary < 10000){
     $Tax_amount = 0;
     $Social_security_fee = 0;
     $Salary_after_tax= $basic_salary+$taxfree;
}
elseif ( $basic_salary>= 10000 && $basic_salary< 25000 ){
  $Tax_amount = ($basic_salary*11)/100;
  $Social_security_fee= ($basic_salary*4)/100;
  $Salary_after_tax= ($basic_salary -$Tax_amount-$Social_security_fee)+$taxfree;
}
elseif ( $basic_salary>= 25000 && $basic_salary< 50000 ){
  $Tax_amount = ($basic_salary*30)/100;
  $Social_security_fee= ($basic_salary*4)/100;
  $Salary_after_tax= ($basic_salary -$Tax_amount-$Social_security_fee)+$taxfree;
  }
  elseif ( $basic_salary>50000 ){
$Tax_amount = ($basic_salary*45)/100;
$Social_security_fee= ($basic_salary*4)/100;
$Salary_after_tax= ($basic_salary -$Tax_amount-$Social_security_fee)+$taxfree;
}
}
if($comission_type == 'month'){
  $year=$basic_salary*12;
  $month=$basic_salary;
  echo "Year";
   if ($basic_salary < 10000){
     $Tax_amount = 0;
     $Social_security_fee = 0;
     $Salary_after_tax= $basic_salary+$taxfree;
}
elseif ( $basic_salary>= 10000 && $basic_salary< 25000 ){
  $Tax_amount = ($basic_salary*11)/100;
  $Social_security_fee= ($basic_salary*4)/100;
  $Salary_after_tax= ($basic_salary -$Tax_amount-$Social_security_fee)+$taxfree;
}
elseif ( $basic_salary>= 25000 && $basic_salary< 50000 ){
  $Tax_amount = ($basic_salary*30)/100;
  $Social_security_fee= ($basic_salary*4)/100;
  $Salary_after_tax= ($basic_salary -$Tax_amount-$Social_security_fee)+$taxfree;
  }
  elseif ( $basic_salary>50000 ){
$Tax_amount = ($basic_salary*45)/100;
$Social_security_fee= ($basic_salary*4)/100;
$Salary_after_tax= ($basic_salary -$Tax_amount-$Social_security_fee)+$taxfree;
}
}
}
?>
<div class="output-group">
<table> 
<tr>
<th>x</th>
<th> Monthly</th>
<th>Yearly </th> 
</tr>
<tr>
<td>Monthly or Yearly </td>
<td><?php echo $month; ?></td>
<td><?php echo $year; ?></td> 
</tr>
<tr>
<td>Total Salary </td>
<td><?php echo $basic_salary; ?></td>
<td><?php echo $basic_salary; ?></td> 
</tr>
<tr>
<td>Tax amount:</td>
<td> <?php echo $Tax_amount;?></td>
<td> <?php echo $Tax_amount;?></td>
</tr>
<tr>
<td>Social security fee:</td>
<td> <?php echo $Social_security_fee;?></td>
<td> <?php echo $Social_security_fee;?></td>
</tr>
<tr>
<td>Salary after tax:</td>
<td> <?php echo $Salary_after_tax;?></td>
<td> <?php echo $Salary_after_tax;?></td>
</tr>
</table></div>
</body>
</html>

