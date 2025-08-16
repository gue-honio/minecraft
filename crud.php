<?php
// --- DATABASE CONNECTION --- //
$servername = "localhost";
$username = "root"; // change if needed
$password = "";
$dbname = "test"; // change if needed

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// --- ADD --- //
if (isset($_POST['add'])) {
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $course = $_POST['course'];
  $phone = $_POST['phone'];
  $sql = "INSERT INTO users (firstname, middlename, lastname, address, course, phone)
          VALUES ('$firstname','$middlename','$lastname','$address','$course','$phone')";
  $conn->query($sql);
  header("Location: crud.php");
  exit;
}

// --- DELETE --- //
if (isset($_POST['delete_confirm'])) {
  $id = $_POST['delete_id'];
  $sql = "DELETE FROM users WHERE id=$id";
  $conn->query($sql);
  header("Location: crud.php");
  exit;
}

// --- UPDATE --- //
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $course = $_POST['course'];
  $phone = $_POST['phone'];
  $sql = "UPDATE users 
          SET firstname='$firstname', middlename='$middlename', lastname='$lastname',
              address='$address', course='$course', phone='$phone'
          WHERE id=$id";
  $conn->query($sql);
  header("Location: crud.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Minecraft CRUD</title>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <style>
    body {
      margin:0;
      font-family: 'Press Start 2P', sans-serif;
      background:#1a1a1a;
      color:#e6e6e6;
      background-image:
        radial-gradient(#3b3a3a 1px, transparent 2px),
        radial-gradient(#2e2d2d 1px, transparent 2px),
        radial-gradient(#2a2a2a 1px, transparent 2px);
      background-position: 0 0, 15px 15px, 7px 7px;
      background-size: 30px 30px, 30px 30px, 30px 30px;
    }
    .container {
      max-width: 1000px;
      margin: 40px auto;
      background: linear-gradient(180deg, rgba(0,0,0,.35), rgba(0,0,0,.6));
      border:4px solid #000;
      outline:2px solid #4b4b4b;
      box-shadow: 0 0 0 4px #000 inset, 0 8px 0 0 #000, 0 16px 24px rgba(0,0,0,.6);
      padding:20px;
    }
    h1 {
      text-align:center;
      font-size:24px;
      margin:10px 0 20px;
      color:#ffd60a;
      text-shadow:3px 3px 0 #000;
    }
    .topbar {
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:20px;
    }
    .mc-btn {
      padding:12px 16px;
      border:4px solid #000;
      outline:2px solid #4b4b4b;
      background: linear-gradient(180deg, #6d6d6d, #4f4f4f);
      font-size:10px;
      cursor:pointer;
      text-decoration:none;
      color:#fff;
      box-shadow: 0 6px 0 0 #000, 0 12px 18px rgba(0,0,0,.5);
      display:inline-block;
    }
    .mc-btn:hover { filter:brightness(1.05); }
    .mc-btn:active {
      transform:translateY(2px);
      background: linear-gradient(180deg, #595959, #4a4a4a);
      box-shadow: 0 4px 0 0 #000, 0 8px 12px rgba(0,0,0,.5);
    }
    form {
      margin-bottom:20px;
      display:flex;
      gap:10px;
      flex-wrap:wrap;
    }
    input[type="text"] {
      padding:10px;
      border:4px solid #000;
      outline:2px solid #4b4b4b;
      background:#2a2a2a;
      color:#fff;
      font-family:inherit;
      flex:1;
      min-width:140px;
    }
    table {
      width:100%;
      border-collapse:collapse;
      font-size:10px;
    }
    table th, table td {
      border:4px solid #000;
      outline:2px solid #4b4b4b;
      padding:8px;
      text-align:center;
      background:#2a2a2a;
    }
    table th {
      background:#3a3a3a;
      color:#ffd60a;
    }
    table tr:nth-child(even) td {
      background:#252525;
    }
    .actions a, .actions button { margin:0 4px; }

    /* --- Minecraft Delete Modal --- */
    .modal {
      display:none;
      position:fixed;
      z-index:1000;
      top:0; left:0;
      width:100%; height:100%;
      background:rgba(0,0,0,0.75);
      justify-content:center;
      align-items:center;
    }
    .modal-content {
      background:#2a2a2a;
      padding:20px;
      border:4px solid #000;
      outline:2px solid #4b4b4b;
      text-align:center;
      color:#ffd60a;
      text-shadow:2px 2px 0 #000;
      max-width:400px;
    }
    .modal-buttons {
      margin-top:20px;
      display:flex;
      justify-content:center;
      gap:20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="topbar">
      <a href="index.php" class="mc-btn">Back to Title</a>
      <h1>Student Records</h1>
      <div style="width:140px"></div>
    </div>

    <!-- Add Form -->
    <form method="post">
      <input type="text" name="firstname" placeholder="First Name" required>
      <input type="text" name="middlename" placeholder="Middle Name">
      <input type="text" name="lastname" placeholder="Last Name" required>
      <input type="text" name="address" placeholder="Address">
      <input type="text" name="course" placeholder="Course">
      <input type="text" name="phone" placeholder="Phone Number">
      <button type="submit" name="add" class="mc-btn">Add</button>
    </form>

    <!-- Table -->
    <table>
      <tr>
        <th>ID</th>
        <th>First</th>
        <th>Middle</th>
        <th>Last</th>
        <th>Address</th>
        <th>Course</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
      <?php
      $result = $conn->query("SELECT * FROM users");
      while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['firstname']."</td>
                <td>".$row['middlename']."</td>
                <td>".$row['lastname']."</td>
                <td>".$row['address']."</td>
                <td>".$row['course']."</td>
                <td>".$row['phone']."</td>
                <td class='actions'>
                  <a class='mc-btn' href='crud.php?edit=".$row['id']."'>Edit</a>
                  <button type='button' class='mc-btn' onclick=\"openModal(".$row['id'].")\">Delete</button>
                </td>
              </tr>";
      }
      ?>
    </table>

    <!-- Edit Form -->
    <?php
    if (isset($_GET['edit'])) {
      $id = $_GET['edit'];
      $res = $conn->query("SELECT * FROM users WHERE id=$id");
      $data = $res->fetch_assoc();
      echo "
      <form method='post' style='margin-top:20px;'>
        <input type='hidden' name='id' value='{$data['id']}'>
        <input type='text' name='firstname' value='{$data['firstname']}' required>
        <input type='text' name='middlename' value='{$data['middlename']}'>
        <input type='text' name='lastname' value='{$data['lastname']}' required>
        <input type='text' name='address' value='{$data['address']}'>
        <input type='text' name='course' value='{$data['course']}'>
        <input type='text' name='phone' value='{$data['phone']}'>
        <button type='submit' name='update' class='mc-btn'>Update</button>
      </form>";
    }
    ?>

    <div class="footer">
      <br>
      <div>v01.00.00.01</div>
    </div>
  </div>

  <!-- Minecraft Delete Modal -->
  <div id="deleteModal" class="modal">
    <div class="modal-content">
      <h2>Are you sure you want to delete this person?</h2>
      <form method="post" id="deleteForm">
        <input type="hidden" name="delete_id" id="deleteId">
        <div class="modal-buttons">
          <button type="submit" name="delete_confirm" class="mc-btn">Delete</button>
          <button type="button" class="mc-btn" onclick="closeModal()">Cancel</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function openModal(id) {
      document.getElementById("deleteId").value = id;
      document.getElementById("deleteModal").style.display = "flex";
    }
    function closeModal() {
      document.getElementById("deleteModal").style.display = "none";
    }
  </script>
</body>
</html>
