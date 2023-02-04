<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/P1style.css">

    <title>home</title>

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
  </head>
  <body>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    

<div class="headimage">
  <center><img src="img/bom.jpg" width="800" height="120"></center>
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

<input type="submit" value="insert" name="submit1">
     <input type="submit" value="delete" name="submit2">

     <input type="submit" value="update" name="submit3">
     <input type="submit" value="display" name="submit4">




<?php
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

  ?>








<footer>
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
      <div class="footerNav">
        <h4>Quick Links</h4>
        <ul class="list-unstyled">
        
          <!--<li><a href="#">About Us</a></li>-->
                    <li><a href="P1.html">Home</a></li>
                    <li><a href="Account_workspace.html">Account_workspace</a></li>
  <li><a href="Withdrawal_workspace.html">Withdrawal_workspace</a></li>
    <li><a href="Deposit_workspace.html">Deposit_workspace</a></li>
     <li><a href="Transaction_workspace.html">Transaction_workspace</a></li>
                    
        </ul>
        </div>
      </div>
      
      
      <div class="col-md-3 col-sm-4">
      <div class="footerNav">
        <h4>Contact Address</h4>
        <div class="add">
          <span><i class="fa fa-phone" aria-hidden="true"></i>  +91-9167879022</span>
          <span><i class="fa fa-envelope" aria-hidden="true"></i>kumerproperties2003@gmail.com</span>
          <span><i class="fa fa-map-marker" aria-hidden="true"></i> Kumar Capital,2413, East Street,
Camp,Pune,Maharashtra 411001,Pune400321</span>
        </div>
      </div>
    </div>
      
      
      
      <div class="col-md-3 col-sm-4">
            <div class="footerNav">
        <h4>Follow Us</h4>
        <div class="socIcon">
        <a href="https://www.facebook.com/mahabank/"><img src="img/facebook.svg" height="35" width="35" alt=""></a>
        <a href="https://www.youtube.com/channel/UCevaMPXN3n3aHZqbBl4sdVA"><img src="img/youtube.svg" height="50" width="50" alt=""></a>
        <a href="https://in.linkedin.com/company/mahabank"><img src="img/linkedin.svg" height="40" width="40" alt=""></a>
        <a href="https://www.instagram.com/mahabank/?hl=en"><img src="img/instagram.svg" height="40" width="40" alt=""></a>
        </div>
      </div>
    </div>
      
      
      
      <div class="col-md-3 col-sm-7">
     <!-- <div class="footerInfo">
            <a class="navbar-brand" href="index.html">
        <img src="images/ayulogo.png" alt="" >
      </a>-->
        <p>Copyright &copy; All Rights Reserved.</p>
        
      </div>
    </div>
    
      <div class="clearfix"></div>
      
    </div>  
  </div>
</div>
</footer>



    

   



  </body>
</html>