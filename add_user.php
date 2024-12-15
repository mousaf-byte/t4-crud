<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Pengguna</h2>
    <form action="add_user.php" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="age">Umur:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required><br>

        <label for="mobile_phone">Mobile Phone:</label>
        <input type="text" id="mobile_phone" name="mobile_phone" required><br>

        <label for="hobi">Hobi:</label>
        <input type="text" id="hobi" name="hobi" required><br>

        <label for="deskripsi">Address:</label>
        <textarea id="deskripsi" name="deskripsi" required></textarea><br>

        <button type="submit" name="submit">Tambah</button>
    </form>

    <?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $tanggal = $_POST['tanggal'];
    $mobile_phone = $_POST['mobile_phone'];
    $hobi = $_POST['hobi'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO users (name, email, age, tanggal, mobile_hp, hobi, address) 
            VALUES ('$name', '$email', '$age', '$tanggal', '$mobile_phone', '$hobi', '$deskripsi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

</body>
</html>
