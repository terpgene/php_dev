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

     $result = mysql_query($query);
     if (!$result){
       die('Invalid query: '.mysql_error());
     }
     echo "<h1 align='center'> Faculty Search Results</h1>";
     echo '<table border="1"
        <tr>
            <th>First Name</td>
            <th>Last Name</td>
            <th>E-Mail</td>
            <th>DOB</td>
            <th>Number of Courses</td>
            </tr>';

        while($row = mysql_fetch_assoc($result)){
          echo '<tr>';
          echo '<td>';
          echo $row['FirstName'];
          echo '</td>';
          echo '<td>';
          echo $row['LastName'];
          echo '</td>';
          echo '<td>';
          echo $row['Email'];
          echo '</td>';
          echo '<td>';
          echo $row['DOB]'];
          echo '</td>';
          echo '<td>';
          echo $row['NumOfCourses'];
          echo '</td>';
        }
        echo '</table>';

        mysql_close( $conn);
    ?>
  </body>
</html>
