<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento </title>
</head>
<body>
<center>
  <p>Example of Php Connectivity </p></center>
<form id="form1" name="form1" method="post" action="lesson31.php">
<table width="538" border="1" align="center">
  <tr>
    <td align="center" colspan="2"><h1>Add Student</h1></td>
  </tr>
  <tr>
    <td width="211">Enter name of Student : </td>
    <td width="311">
      <label>
        <input type="text" name="studet_name" />
        </label>
    </td>
  </tr>
  <tr>
    <td >Enter age of Student : </td>
    <td>
      <label>
        <input type="number" name="age"  />
        </label>
    </td>
  </tr>
  <tr>
    <td >Select gender of Student : </td>
    <td> 
		<input type="radio" name="gender" value="0" />Male
		<input  type="radio" name="gender" value="1"/>Female
	</td>
  </tr>
  <tr>
    <td >Enter Phone of Student : </td>
    <td>
      <label>
        <input type="number" name="phone" />
        </label>
    </td>
  </tr>
   <tr>
    <td >Enter Dob of Student : </td>
    <td>
      <label>
        <input type="date" name="date" />
        </label>
    </td>
  </tr>
  <tr>
    <td >Enter Address of Student  : </td>
    <td>
      <label>
        <textarea name="address"></textarea>
        </label>
    </td>
  </tr>
  <tr>
  	<td colspan="2">
	  <div align="center">
	    <input type="submit" value="Add Student"/>
	    <input type="reset" value="Clear All"/>
        </div></td>
  </tr>
</table>
</form>

<h1 align="center">
View Student 
</h1>
<table width="80%" border="1" align="center">
  <tr>
    <td>Sr no </td>
    <td>Name</td>
    <td>Age </td>
	 <td>Gender</td>
	<td>Address</td>
	<td>Phone</td
  </tr>
  <?php
	$link = mysqli_connect('localhost','root','');
	mysqli_select_db($link,'php_demo');
	$sql = 'SELECT * from student';
	$student = mysqli_query($link,$sql);
	$count = 1 ; 
	while($row = mysqli_fetch_assoc($student))
	{
	?>
   <tr>
    <td><?php  echo $count++ ?> </td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['age']; ?></td>
	 <td><?php echo $row['gender']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['phone']; ?></td
  </tr>
  <?php
	}
  ?>
</table>

</body>
</html>