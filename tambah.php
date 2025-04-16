<?php
$koneksi = mysqli_connect("localhost","root","","todolistukk");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// Tambah data
if (isset($_POST['add_task'])) {
    $task = $_POST['task'];
    $prioritas = $_POST['prioritas'];
    $date = $_POST['date'];

    if (!empty($task) && !empty($prioritas) && !empty($date)) {
        mysqli_query($koneksi,"INSERT INTO tasks VALUES('','$task','$prioritas','$date','0')");
        echo "<script>alert('Data berhasil disimpan');</script>";
        header('Location:all_task.php');
    }else {
        echo "<script>alert('Semua kolom harus diisi');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logold.png"> 
    <title>Todolist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <br>
<div class="container mt-6">
        <h2 class ="text-center"></h2>
        <form method="POST" class="border rounded bg-light p-2">
            <label class="form-label">Nama Task Baru :</label>
            <input type="text" name="task" class="form-control" placeholder="Masukan Task" autocomplete="off" autofocus required>
            <label class="form-label">Prioritas :</label>
            <select name="prioritas" class="form-control" required>
                <option value="">Pilih Prioritas </option>
                <option value="1">Low</option>
                <option value="2">Medium</option>
                <option value="3">High</option>
            </select>
            <label class="form-label">Tanggal :</label>
            <input type="date" name="date" class="form-control" placeholder="Tanggal">
            <br>
            <button type="submit" class="btn btn-danger mt-2" name="add_task">Tambah Task</button>
            <button type="button" class="btn btn-secondary mt-2" onclick="window.location.href='all_task.php';">Kembali</button>
        </form>

</body>
</html>