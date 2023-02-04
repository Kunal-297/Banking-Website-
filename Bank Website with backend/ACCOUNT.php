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

    <title>Account_workspace</title>
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

<br>
 <div class="container">

<center><h1><font color="green">Account opening Desk</font></h1></center>



<div class="container">
  <form  method="post">

    <label for="First_Name">First_Name</label>
    <input type="text" id="First_Name" name="First_Name" placeholder="Your name..">

    <label for="Last_Name">Last_Name</label>
    <input type="text" id="Last_Name" name="Last_Name" placeholder="Your last name..">



     <label for="Adhar_Number">Adhar_Number </label>
    <input type="text" id="Adhar_Number" name="Adhar_Number" placeholder="Adhar_Number ....">

     <label for="Pan_Number">Pan_Number</label>
    <input type="text" id="Pan_Number" name="Pan_Number" placeholder="Pan_Number  ....">

     <label for="Address">Address </label>
    <input type="text" id="Address" name="Address" placeholder="Address ....">


    <label for="C_number">C_number</label>
    <input type="text" id="C_number" name="C_number" placeholder="Your number..">


    <label for="Date">Account_opening_Date</label>
        <input type="date" id="Account_opening_Date" name="Account_opening_Date"><br><br>

    <label for="Account_Number">New_Account_Number</label>
    <input type="text" id="Account_Number" name="Account_Number" placeholder="Your Account Number ....">

<label for="Gender">Gender</label><br>
        <input type="radio" name="Gender" value="m">Male<br>             
        <input type="radio" name="Gender" value="f">Female<br>
        <input type="radio" name="Gender" value="o">Other <br><br>




    
     <input type="submit" value="insert" name="submit1">
     <input type="submit" value="delete" name="submit2">

     <input type="submit" value="update" name="submit3">
     <input type="submit" value="display" name="submit4">
          <input type="submit" value="Account_details" name="submit5">




  </form>
</div>
</div><br><br> 




<?php
   if(isset($_POST["submit1"]))
 {
   mysqli_query($link,"insert into af values('$_POST[First_Name]' ,'$_POST[Last_Name]' ,'$_POST[Adhar_Number]','$_POST[Pan_Number]', '$_POST[Address]' ,'$_POST[C_number]' ,'$_POST[Account_opening_Date]','$_POST[Account_Number]','$_POST[Gender]' )");
 }

 if(isset($_POST["submit2"]))
 {
   mysqli_query($link,"delete from af where Account_Number='$_POST[Account_Number]'");
 }

 if(isset($_POST["submit3"]))
{
  mysqli_query($link,"update af set First_Name ='$_POST[First_Name]' where Account_Number ='$_POST[Account_Number]'");
   mysqli_query($link,"update af set Last_Name ='$_POST[Last_Name]' where Account_Number ='$_POST[Account_Number]'");
    mysqli_query($link,"update af set Adhar_Number ='$_POST[Adhar_Number]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update af set Pan_Number ='$_POST[Pan_Number]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update af set Address ='$_POST[Address]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update af set C_number ='$_POST[C_number]' where Account_Number ='$_POST[Account_Number]'");
      mysqli_query($link,"update af set Account_opening_Date ='$_POST[Account_opening_Date]' where Account_Number ='$_POST[Account_Number]'");
     mysqli_query($link,"update af set Gender ='$_POST[Gender]' where Account_Number ='$_POST[Account_Number]'");
 
 }




 if(isset($_POST["submit4"]))                                  
                                              
{
  $res=mysqli_query($link, "select * from af");    
  echo "<center><table></center>";
  echo "<tr>";
  echo "<th>"; echo "First_Name"; echo "</th>";
  echo "<th>"; echo "Last_Name"; echo "</th>";
  echo "<th>"; echo "Adhar_Number"; echo "</th>";
  echo "<th>"; echo "Pan_Number"; echo "</th>";
  echo "<th>"; echo "Address"; echo "</th>";
  echo "<th>"; echo "C_number"; echo "</th>";
  echo "<th>"; echo "Account_opening_Date"; echo "</th>";
  echo "<th>"; echo "Account_Number"; echo "</th>";
   echo "<th>"; echo "Gender"; echo "</th>";
  echo "</tr>";

while($row=mysqli_fetch_array($res) )
{
echo "<tr>";
 echo "<td>"; echo $row["First_Name"]; echo "</td>";
  echo "<td>"; echo $row["Last_Name"]; echo "</td>";
  echo "<td>"; echo $row["Adhar_Number"]; echo "</td>";
  echo "<td>"; echo $row["Pan_Number"]; echo "</td>";
  echo "<td>"; echo $row["Address"]; echo "</td>";
  echo "<td>"; echo $row["C_number"]; echo "</td>";
  echo "<td>"; echo $row["Account_opening_Date"]; echo "</td>";
  echo "<td>"; echo $row["Account_Number"]; echo "</td>";
   echo "<td>"; echo $row["Gender"]; echo "</td>";
  echo "</tr>";
}
echo "</table>";
}


if(isset($_POST["submit5"]))
{
   $new=mysqli_query($link,"select * from af where Account_Number='$_POST[Account_Number]'");
    echo "<center><table></center>";
  echo "<tr>";
  echo "<th>"; echo "First_Name"; echo "</th>";
  echo "<th>"; echo "Last_Name"; echo "</th>";
  echo "<th>"; echo "Adhar_Number"; echo "</th>";
  echo "<th>"; echo "Pan_Number"; echo "</th>";
  echo "<th>"; echo "Address"; echo "</th>";
  echo "<th>"; echo "C_number"; echo "</th>";
  echo "<th>"; echo "Account_opening_Date"; echo "</th>";
  echo "<th>"; echo "Account_Number"; echo "</th>";
   echo "<th>"; echo "Gender"; echo "</th>";
  echo "</tr>";
  while($rows=mysqli_fetch_array($new) )
{
echo "<tr>";
 echo "<td>"; echo $rows["First_Name"]; echo "</td>";
  echo "<td>"; echo $rows["Last_Name"]; echo "</td>";
  echo "<td>"; echo $rows["Adhar_Number"]; echo "</td>";
  echo "<td>"; echo $rows["Pan_Number"]; echo "</td>";
  echo "<td>"; echo $rows["Address"]; echo "</td>";
  echo "<td>"; echo $rows["C_number"]; echo "</td>";
  echo "<td>"; echo $rows["Account_opening_Date"]; echo "</td>";
  echo "<td>"; echo $rows["Account_Number"]; echo "</td>";
   echo "<td>"; echo $rows["Gender"]; echo "</td>";
  echo "</tr>";
}
echo "</table>";
}



  ?>




  </body>
</html>



