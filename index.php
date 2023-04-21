<!DOCTYPE html>
<html lang="en">
<?php
include "./include/connection.php";

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussBoss TN</title>
</head>
<body>
    <div>
    <form method="post">
     <p>   <label>Arrival : <input type="text" name="arrival" required /></label>    </p> 
     <p>    <label>Departure: <input type="text"  name="departure" required/></label>  </p>        
     <p>  <button onclick= "./index/#answer" type="submit">Submit</button> </p>
       </form>
    </div>
    <div id = answer><?php check(); ?></div>
</body>
</html>
