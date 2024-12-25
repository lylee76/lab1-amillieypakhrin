<?php
// Database Connection
$mysqli = new mysqli("localhost", "root", "", "test_db");

// Check Connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Create Record
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];
    $created_by = "admin";
    $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO records (name, rank, status, created_by, created_at) VALUES ('$name', '$rank', '$status', '$created_by', '$created_at')";
    $mysqli->query($sql);
}

// Read Records
$result = $mysqli->query("SELECT * FROM records");

// Update Record
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];
    $updated_by = "admin";
    $updated_at = date('Y-m-d H:i:s');

    $sql = "UPDATE records SET name='$name', rank='$rank', status='$status', updated_by='$updated_by', updated_at='$updated_at' WHERE id='$id'";
    $mysqli->query($sql);
}

// Delete Record
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM records WHERE id='$id'");
}
?>

<!-- Form for Adding/Updating -->
<form method="POST">
    ID: <input type="text" name="id"><br>
    Name: <input type="text" name="name"><br>
    Rank: <input type="text" name="rank"><br>
    Status: <input type="text" name="status"><br>
    <button type="submit" name="create">Create</button>
    <button type="submit" name="update">Update</button>
</form>

<!-- List Records -->
<table border="1">
    <tr><th>ID</th><th>Name</th><th>Rank</th><th>Status</th><th>Actions</th></tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['rank']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <a href="?delete=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
