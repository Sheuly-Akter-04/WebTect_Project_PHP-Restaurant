<html>
<style type="text/css">
table, th, td {
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>

<body>

<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b> 
	 
	 

     <a href="managerdashboard.php">Home |</a>
<a href="../index.php">Logout |</a>
<a href="managerdashboard.php">Back </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
&nbsp;&nbsp;&nbsp;


<center>

<table border="1">
     <tr>
          <td>ID</td>
          <td>NAME</td>
          <td>USER NAME</td>
          <td>EMAIL</td>
          <td>GENDER</td>
          <td colspan="2" align="center">ACTION</td>
     </tr>
     <tr>
     <?php   
     //validation auto id generate
     $c=1;
          //validation [data existing]
          foreach ($mydata as $key => $value) {
               
               echo "<tr>";
               echo"<td>";
               echo $c;

               //validation password hide from data
               echo"</td>";
               foreach ($value as $k => $v) {
                    
                    if ($k!="password" ) {
                         echo "<td>$v</td>"; 
                         
                    }else{}

               } echo"<td>";
               echo" <a href=edit.php> ";
               echo" EDIT" ; echo"</a> ";
               
               echo" <a href=delete.php> ";
               echo"|";
               echo"DELETE";
               echo"</a>";
               

               
               echo"</td>";
          
               echo" </tr>"; $c=$c+1;
          }



     
     
      
       ?>

</table>
</center>



<br>
<br>
</td>
</tr>
<tr>
<table border="1"align="center" width="100%"height="10%"> 
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>

</body>


</html>









































