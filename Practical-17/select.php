<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$sql    = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Records</title>
  <style>
    table { border-collapse: collapse; width: 80%; margin: 20px auto; }
    th, td { border: 1px solid #555; padding: 8px; text-align: center; }
    th { background-color: #4CAF50; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
  </style>
</head>
<body>
<h2 style="text-align:center;">Student Records</h2>
<table>
  <tr><th>ID</th><th>Name</th><th>Email</th><th>Branch</th><th>Marks</th></tr>
  <?php
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['branch']}</td>
                  <td>{$row['marks']}</td>
                </tr>";
      }
  } else {
      echo "<tr><td colspan='5'>No records found.</td></tr>";
  }
  ?>
</table>
</body>
</html>
<?php mysqli_close($conn); ?>