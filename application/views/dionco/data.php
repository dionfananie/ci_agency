<?php 

for ($portofolio = 0; $portofolio <  4; $portofolio++) {
   echo "<p><b>Row number $portofolio</b></p>";
   echo "<ul>";
 
     echo "<li>".$portfolio[$portofolio][0]."</li>";
     echo "<li>".$portfolio[$portofolio][1]."</li>";
     echo "<li>".$portfolio[$portofolio][2]."</li>";

   echo "</ul>";
}





?>			
