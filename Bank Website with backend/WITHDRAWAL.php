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

    <title>Withdrawal_workspace</title>
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



<center><h1><font color="green">Money Withdrawal desk</font></h1></center>


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

    <label for="C_number">C_number</label>
    <input type="text" id="C_number" name="C_number" placeholder="Your number..">


    <label for="Withdrawal_Date">Withdrawal_Date</label>
        <input type="date" id="Withdrawal_Date" name="Withdrawal_Date"><br><br>



     <input type="submit" value="insert" name="submit1">
     <input type="submit" value="delete" name="submit2">

     <input type="submit" value="update" name="submit3">
     <input type="submit" value="display" name="submit4">
          <input type="submit" value="Amount_details" name="submit5">


  </form>
</div>
</div>

<?php
   if(isset($_POST["submit1"]))
 {
   mysqli_query($link,"insert into wf values('$_POST[First_Name]' ,'$_POST[Last_Name]' ,'$_POST[Account_Number]','$_POST[Amount_in_INR]', '$_POST[C_number]' ,'$_POST[Withdrawal_Date]')");
 }

 if(isset($_POST["submit2"]))
 {
   mysqli_query($link,"delete from wf where Account_Number='$_POST[Account_Number]'");
 }

 if(isset($_POST["submit3"]))
{
  mysqli_query($link,"update wf set First_Name ='$_POST[First_Name]' where Account_Number ='$_POST[Account_Number]'");
   mysqli_query($link,"update wf set Last_Name ='$_POST[Last_Name]' where Account_Number ='$_POST[Account_Number]'");
    
     mysqli_query($link,"update wf set Amount_in_INR ='$_POST[Amount_in_INR]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update wf set C_number ='$_POST[C_number]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update wf set Withdrawal_Date ='$_POST[Withdrawal_Date]' where Account_Number ='$_POST[Account_Number]'");
    
 }

 if(isset($_POST["submit4"]))
{
  $res=mysqli_query($link, "select * from wf");
  echo "<center><table></center>";
  echo "<tr>";
  echo "<th>"; echo "First_Name"; echo "</th>";
  echo "<th>"; echo "Last_Name"; echo "</th>";
  echo "<th>"; echo "Account_Number"; echo "</th>";
  echo "<th>"; echo "Amount_in_INR"; echo "</th>";
  echo "<th>"; echo "C_number"; echo "</th>";
  echo "<th>"; echo "Withdrawal_Date"; echo "</th>";
  echo "</tr>";

while($row=mysqli_fetch_array($res) )
{
echo "<tr>";
 echo "<td>"; echo $row["First_Name"]; echo "</td>";
  echo "<td>"; echo $row["Last_Name"]; echo "</td>";
  echo "<td>"; echo $row["Account_Number"]; echo "</td>";
  echo "<td>"; echo $row["Amount_in_INR"]; echo "</td>";
  echo "<td>"; echo $row["C_number"]; echo "</td>";
  echo "<td>"; echo $row["Withdrawal_Date"]; echo "</td>";
  echo "</tr>";
}
echo "</table>";
}




if(isset($_POST["submit5"]))
{
  $new=mysqli_query($link,"select * from df where Account_Number='$_POST[Account_Number]'");
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

while($row1=mysqli_fetch_array($new) )
{
echo "<tr>";
 echo "<td>"; echo $row1["First_Name"]; echo "</td>";
  echo "<td>"; echo $row1["Last_Name"]; echo "</td>";
  echo "<td>"; echo $row1["Account_Number"]; echo "</td>";
  echo "<td>"; echo $row1["Amount_in_INR"]; echo "</td>";
  echo "<td>"; echo $row1["Rs_50"]; echo "</td>";
  echo "<td>"; echo $row1["Rs_100"]; echo "</td>";
  echo "<td>"; echo $row1["Rs_200"]; echo "</td>";
  echo "<td>"; echo $row1["Rs_500"]; echo "</td>";
  echo "<td>"; echo $row1["Rs_2000"]; echo "</td>";
   echo "<td>"; echo $row1["C_number"]; echo "</td>";
   echo "<td>"; echo $row1["Deposit_Date"]; echo "</td>";
  echo "</tr>";
}
echo "</table>";
}


  ?>






  </body>
</html>



