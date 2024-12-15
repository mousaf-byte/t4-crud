<?php
  include('koneksi.php');
  $id = $_GET['id']; // Mengambil ID dari URL
  $sql = "SELECT * FROM users WHERE id = $id";
  $result = $conn->query($sql);
  $user = $result->fetch_assoc();
?>
<form action="edit_user.php?id=<?php echo $user['id']; ?>" method="POST">
      <label for="name">Nama :</label>
            <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required>
            <br>
      <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
            <br>
      <label for="age">Umur :</label>
            <input type="number" id="age" name="age" value="<?php echo $user['age']; ?>" required>
            <br>
      <label for="tanggal">Tanggal :</label>
            <input type="date" id="tanggal" name="tanggal" value="<?php echo $user['tanggal']; ?>" required>
            <br>      
      <label for="mobile_phone">Mobile Phone :</label>
            <input type="text" id="mobile_phone" name="mobile_phone" value="<?php echo $user['mobile_hp']; ?>" required>
            <br>
      <label for="Hobi">Hobi :</label>
            <input type="text" id="hobi" name="hobi" value="<?php echo $user['hobi']; ?>" required>
            <br>
      <label for="deskripsi">Address :</label>
            <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $user['address']; ?>" required>
            <br>
            <button type="submit" name="submit">Update</button>
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

      // Query untuk mengupdate data
$sql = "UPDATE users SET name='$name', email='$email', age='$age', tanggal='$tanggal', mobile_hp='$mobile_phone', hobi='$hobi', address='$deskripsi' WHERE id=$id";
      if ($conn->query($sql) === TRUE) {
          echo "Data berhasil diperbarui";
          header("Location: index.php");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
} }
  $conn->close();
?>