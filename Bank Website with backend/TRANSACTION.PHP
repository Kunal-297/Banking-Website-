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

    <title>Transaction_workspace</title>
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



<center><h1><font color="green">Transaction problem desk</font></h1></center>

<div class="container">
  <form  method="post">

    <label for="UPI_ID">UPI_ID</label>
    <input type="text" id="UPI_ID" name="UPI_ID" placeholder="UPI_ID ....">

    <label for="UPI_Pass">UPI_Pass</label>
    <input type="text" id="UPI_Pass" name="UPI_Pass" placeholder="Your UPI_Pass ....">


   

     <label for="ATM_No">ATM_No</label>
    <input type="text" id="ATM_No" name="ATM_No" placeholder="Your ATM_No ....">

     <label for="ATM_Pin">ATM_Pin </label>
    <input type="text" id="ATM_Pin" name="ATM_Pin" placeholder="Your ATM_Pin ....">

    <label for="CVV">CVV</label>
    <input type="text" id="CVV" name="CVV" placeholder="Your CVV..">

     <label for="Account_Number">Account_Number</label>
    <input type="text" id="Account_Number" name="Account_Number" placeholder="Your Account Number ....">



    
    <input type="submit" value="insert" name="submit1">
     <input type="submit" value="delete" name="submit2">

     <input type="submit" value="update" name="submit3">
     <input type="submit" value="display" name="submit4">

  </form>
</div>
</div>

<?php
   if(isset($_POST["submit1"]))
 {
   mysqli_query($link,"insert into tf values('$_POST[UPI_ID]' ,'$_POST[UPI_Pass]' ,'$_POST[ATM_No]','$_POST[ATM_Pin]', '$_POST[CVV]' ,'$_POST[Account_Number]')");
 }

 if(isset($_POST["submit2"]))
 {
   mysqli_query($link,"delete from tf where Account_Number='$_POST[Account_Number]'");
 }

 if(isset($_POST["submit3"]))
{
  mysqli_query($link,"update tf set UPI_ID ='$_POST[UPI_ID]' where Account_Number ='$_POST[Account_Number]'");
   mysqli_query($link,"update tf set UPI_Pass ='$_POST[UPI_Pass]' where Account_Number ='$_POST[Account_Number]'");
    mysqli_query($link,"update tf set ATM_No ='$_POST[ATM_No]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update tf set ATM_Pin ='$_POST[ATM_Pin]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update tf set CVV ='$_POST[CVV]' where Account_Number ='$_POST[Account_Number]'");
    
    
 }

 if(isset($_POST["submit4"]))
{
  $res=mysqli_query($link, "select * from tf");
  echo "<center><table></center>";
  echo "<tr>";
  echo "<th>"; echo "UPI_ID"; echo "</th>";
  echo "<th>"; echo "UPI_Pass"; echo "</th>";
  echo "<th>"; echo "ATM_No"; echo "</th>";
  echo "<th>"; echo "ATM_Pin"; echo "</th>";
  echo "<th>"; echo "CVV"; echo "</th>";
  echo "<th>"; echo "Account_Number"; echo "</th>";
  echo "</tr>";

while($row=mysqli_fetch_array($res) )
{
echo "<tr>";
 echo "<td>"; echo $row["UPI_ID"]; echo "</td>";
  echo "<td>"; echo $row["UPI_Pass"]; echo "</td>";
  echo "<td>"; echo $row["ATM_No"]; echo "</td>";
  echo "<td>"; echo $row["ATM_Pin"]; echo "</td>";
  echo "<td>"; echo $row["CVV"]; echo "</td>";
  echo "<td>"; echo $row["Account_Number"]; echo "</td>";
  echo "</tr>";
}
echo "</table>";
}

  ?>




  </body>
</html>



