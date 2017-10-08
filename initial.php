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



     ?>

  </body>
</html>
