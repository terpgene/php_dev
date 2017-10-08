<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>Test Results</title>

  </head>

  <body>
    <?php
      // Connect to Database
      $hostname = 'localhost';
      $username = 'sdev_owner';
      $password = 'sdev300';
      $dbase = 'sdev';


      $conn = mysql_connect( $hostname, $username, $password, $dbase);
      if (!$conn) {
        die('Could not connect: '.mysql_error());
      }
      mysql_select_db($dbase,$conn) or die(mysql_error());
      $lastname = $_POST["lastname"];
      $firstname = $_POST["firstname"];
      $course = $_POST["course"];

      // Query

      $sqlquery = "SELECT LastName,
        FirstName,
        FacultyID AS 'FacID'
        FROM Faculty
        WHERE FirstName LIKE '$firstname'
        AND LastName LIKE '$lastname'
        AND CourseTitle LIKE '$course'";


      // Result of Query

      $result = mysql_query($sqlquery);
      if (!$result) {
        die('Invalid query: '.mysql_error());
      }
      echo '<h1>Results</h1>';
      echo '<table border="1">
      <tr>
          <td>LastName</td>
          <td>FirstName</td>
          <td>FacID</td>
      </tr>';
      while ($row = mysql_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>';
        echo $row['LastName'];
        echo '</td>';
        echo "string"; '<td>';
        echo $row['FirstName'];
        echo '</td>';
        echo '<td>';
        echo $row['CourseTitle'];
        echo '</td>';
        echo '</tr>';
      }
      echo '</table>';

      mysql_close($conn);
     ?>

  </body>
</html>
