<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test");
?>
<!doctype html>
<html lang="en">
  <head>


<style>
     table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 93%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/P1style.css">

    <title>Deposit_workspace</title>
  </head>
  <body>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <div class="headimage">
  <center><img src="img/bom.jpg" width="800" height="150"></center>
  </div>

        <div class="topnav" id="my topnav ">
  <a href="HOME.php" class="active">Home</a>
  <a href="EMPLOYEES.php">Employees</a>
  <a href="ACCOUNT.php">Account_workspace</a>
  <a href="WITHDRAWAL.php">Withdrawal_workspace</a>
    <a href="DEPOSIT.php">Deposit_workspace</a>
     <a href="TRANSACTION.php">Transaction_workspace</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
</div><br>
 <div class="container">

<center><h1><font color="green">Money Deposit desk</font></h1></center>

<div class="container">
  <form method="post">

    <label for="First_Name">First_Name</label>
    <input type="text" id="First_Name" name="First_Name" placeholder="Your name..">

    <label for="Last_Name">Last_Name</label>
    <input type="text" id="Last_Name" name="Last_Name" placeholder="Your last name..">

     <label for="Account_Number">Account_Number</label>
    <input type="text" id="Account_Number" name="Account_Number" placeholder="Your Account Number ....">

     <label for="Amount_in_INR">Amount_in_INR </label>
    <input type="text" id="Amount_in_INR" name="Amount_in_INR" placeholder="Your Amount in INR ....">

     <label for="Rs_50">Rs_50</label>
    <input type="text" id="Rs_50" name="Rs_50" placeholder="Rs_50 in INR ....">

     <label for="Rs_100">Rs_100 </label>
    <input type="text" id="Rs_100" name="Rs_100" placeholder="Rs_100 in INR ....">

     <label for="Rs_200">Rs_200 </label>
    <input type="text" id="Rs_200" name="Rs_200" placeholder="Rs_200 in INR ....">

     <label for="Rs_500">Rs_500 </label>
    <input type="text" id="Rs_500" name="Rs_500" placeholder="Rs_500 in INR ....">

     <label for="Rs_2000">Rs_2000 </label>
    <input type="text" id="Rs_2000" name="Rs_2000" placeholder="Rs_2000 in INR ....">

    <label for="C_number">C_number</label>
    <input type="text" id="C_number" name="C_number" placeholder="Your number..">


    <label for="Deposit_Date">Deposit_Date</label>
        <input type="date" id="Deposit_Date" name="Deposit_Date"><br><br>

    <input type="submit" value="insert" name="submit1">
     <input type="submit" value="delete" name="submit2">

     <input type="submit" value="update" name="submit3">
     <input type="submit" value="display" name="submit4">

  </form>
</div>
</div><br><br>



<?php
   if(isset($_POST["submit1"]))
 {
   mysqli_query($link,"insert into df values('$_POST[First_Name]' ,'$_POST[Last_Name]' ,'$_POST[Account_Number]','$_POST[Amount_in_INR]', '$_POST[Rs_50]' ,'$_POST[Rs_100]' ,'$_POST[Rs_200]','$_POST[Rs_500]','$_POST[Rs_2000]','$_POST[C_number]','$_POST[Deposit_Date]' )");
 }

 if(isset($_POST["submit2"]))
 {
   mysqli_query($link,"delete from df where Account_Number='$_POST[Account_Number]'");
 }

 if(isset($_POST["submit3"]))
{
  mysqli_query($link,"update df set First_Name ='$_POST[First_Name]' where Account_Number ='$_POST[Account_Number]'");
   mysqli_query($link,"update df set Last_Name ='$_POST[Last_Name]' where Account_Number ='$_POST[Account_Number]'");
    mysqli_query($link,"update df set Amount_in_INR ='$_POST[Amount_in_INR]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update df set Rs_50 ='$_POST[Rs_50]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update df set Rs_100 ='$_POST[Rs_100]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update df set Rs_200 ='$_POST[Rs_200]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update df set Rs_500 ='$_POST[Rs_500]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update df set Rs_2000 ='$_POST[Rs_2000]' where Account_Number ='$_POST[Account_Number]'");
 mysqli_query($link,"update df set C_number ='$_POST[C_number]' where Account_Number ='$_POST[Account_Number]'");
 mysqli_query($link,"update df set Deposit_Date ='$_POST[Deposit_Date]' where Account_Number ='$_POST[Account_Number]'");
 }

 if(isset($_POST["submit4"]))
{
  $res=mysqli_query($link, "select * from df");
  echo "<center><table></center>";
  echo "<tr>";
  echo "<th>"; echo "First_Name"; echo "</th>";
  echo "<th>"; echo "Last_Name"; echo "</th>";
  echo "<th>"; echo "Account_Number"; echo "</th>";
  echo "<th>"; echo "Amount_in_INR"; echo "</th>";
  echo "<th>"; echo "Rs_50"; echo "</th>";
  echo "<th>"; echo "Rs_100"; echo "</th>";
  echo "<th>"; echo "Rs_200"; echo "</th>";
  echo "<th>"; echo "Rs_500"; echo "</th>";
  echo "<th>"; echo "Rs_2000"; echo "</th>";
   echo "<th>"; echo "C_number"; echo "</th>";
   echo "<th>"; echo "Deposit_Date"; echo "</th>";
  echo "</tr>";

while($row=mysqli_fetch_array($res) )
{
echo "<tr>";
 echo "<td>"; echo $row["First_Name"]; echo "</td>";
  echo "<td>"; echo $row["Last_Name"]; echo "</td>";
  echo "<td>"; echo $row["Account_Number"]; echo "</td>";
  echo "<td>"; echo $row["Amount_in_INR"]; echo "</td>";
  echo "<td>"; echo $row["Rs_50"]; echo "</td>";
  echo "<td>"; echo $row["Rs_100"]; echo "</td>";
  echo "<td>"; echo $row["Rs_200"]; echo "</td>";
  echo "<td>"; echo $row["Rs_500"]; echo "</td>";
  echo "<td>"; echo $row["Rs_2000"]; echo "</td>";
   echo "<td>"; echo $row["C_number"]; echo "</td>";
   echo "<td>"; echo $row["Deposit_Date"]; echo "</td>";
  echo "</tr>";
}
echo "</table>";
}

  ?>
  </body>
</html>



