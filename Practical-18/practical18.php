<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$msg = "";

// ===== INSERT =====
if (isset($_POST["insert"])) {
    $name   = $_POST["name"];
    $email  = $_POST["email"];
    $branch = $_POST["branch"];
    $marks  = $_POST["marks"];
    $sql = "INSERT INTO students (name, email, branch, marks)
            VALUES ('$name','$email','$branch','$marks')";
    $msg = mysqli_query($conn, $sql) ? "Record Inserted!" : "Error: " . mysqli_error($conn);
}

// ===== UPDATE =====
if (isset($_POST["update"])) {
    $id     = $_POST["id"];
    $marks  = $_POST["new_marks"];
    $sql = "UPDATE students SET marks='$marks' WHERE id='$id'";
    $msg = mysqli_query($conn, $sql) ? "Record Updated!" : "Error: " . mysqli_error($conn);
}

// ===== DELETE =====
if (isset($_POST["delete"])) {
    $id  = $_POST["del_id"];
    $sql = "DELETE FROM students WHERE id='$id'";
    $msg = mysqli_query($conn, $sql) ? "Record Deleted!" : "Error: " . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html>
<head><title>CRUD Operations</title>
<style>
  body { font-family: Arial; margin: 20px; }
  input, select { padding:5px; margin:5px; }
  table { border-collapse:collapse; width:80%; }
  th, td { border:1px solid #999; padding:8px; text-align:center; }
  th { background:#4CAF50; color:white; }
  .msg { color:green; font-weight:bold; }
</style>
</head>
<body>
<h2>Student CRUD Operations</h2>
<?php if ($msg) echo "<p class='msg'>$msg</p>"; ?>

<!-- INSERT FORM -->
<h3>Insert New Student</h3>
<form method="POST">
  Name: <input type="text" name="name" required>
  Email: <input type="text" name="email" required>
  Branch: <select name="branch">
    <option>CE</option><option>IT</option><option>EC</option>
  </select>
  Marks: <input type="number" name="marks" min="0" max="100">
  <input type="submit" name="insert" value="Insert">
</form>

<!-- UPDATE FORM -->
<h3>Update Marks by ID</h3>
<form method="POST">
  Student ID: <input type="number" name="id" required>
  New Marks: <input type="number" name="new_marks" required>
  <input type="submit" name="update" value="Update">
</form>

<!-- DELETE FORM -->
<h3>Delete Student by ID</h3>
<form method="POST">
  Student ID: <input type="number" name="del_id" required>
  <input type="submit" name="delete" value="Delete" onclick="return confirm('Delete this record?')">
</form>

<!-- DISPLAY TABLE -->
<h3>All Records</h3>
<table>
  <tr><th>ID</th><th>Name</th><th>Email</th><th>Branch</th><th>Marks</th></tr>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM students");
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['branch']}</td>
              <td>{$row['marks']}</td>
            </tr>";
  }
  ?>
</table>
</body>
</html>
<?php mysqli_close($conn); ?>