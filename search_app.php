<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>Search Faculty Database</title>

  </head>

  <body>
    <?php
     //Check database if data exists, if not redirect to index.php

     if ((!(isset($_POST['faculty_id'])))) {
       header('Location: index.php');
     }

     //Get id from form
     $facid =$_POST['faculty_id'];

     //Connecting to Database
     $server = 'localhost';
     $db = 'sdev';
     $user = 'sdev_owner';
     $password = 'sdev300';
     $conn = mysql_connect($server,$user,$password,$db);

     //Query Database
     $query = $conn->query("SELECT * FROM Faculty WHERE FacultyID=".$facid);

    ?>
  </body>
