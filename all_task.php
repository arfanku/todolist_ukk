<?php 
 
$koneksi = mysqli_connect("localhost","root","","todolistukk");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// status
if (isset($_GET['complete'])) {
    $id = $_GET['complete'];
    mysqli_query($koneksi, "UPDATE tasks SET status=1 WHERE id =$id");
    echo "<script>alert('Data Berhasil di Update');</script>";
    header('Location:all_task.php');
}


// Hapus task
if (isset($_GET['delete'])) {
    $id = $_GET['delete']; 
    mysqli_query($koneksi, "DELETE FROM tasks WHERE id =$id");
    echo "<script>alert('Data Berhasil di Hapus');</script>";
    header('Location:all_task.php');
}

$result = mysqli_query($koneksi, "SELECT * FROM tasks ORDER BY status ASC, prioritas DESC, date ASC");
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png"  sizes="512x512" href="img/logold.png"> 
    <title>Todolist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background: linear-gradient(to right, #C93B3B, #631D1D);
        }
        .navbar .nav-link {
            color: #ffcccc ;
        }
        .navbar .nav-link:hover {
            color:rgb(255, 255, 255);
            text-decoration: none;
            
        }

        .navbar-toggler {
            border-color: white;
        }

    .kosong {
        margin-bottom: 50px;
    }
    </style>

</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a href="index.php">
    <img src="img/logold.png" alt="Logo" width="100" height="94" class="d-inline-block align-text-top">
    </a>
        <ul class="navbar-nav me-5">
            <li class="nav-item">
            <a class="nav-link" href="">All Task</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <br>

    <div class="container mt-2 d-flex justify-content-end">
        <a href="tambah.php">
        <button type="button" class="btn btn-danger"><i class="fa-solid fa-folder-plus"></i> Tambah</button>
        </a>
    </div>
       
    <div class="container mt-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Task</th>
                        <th>Prioritas</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['task']; ?></td>
                                <td>
                                    <?php 
                                    echo ($row['prioritas'] == 1) ? "<span class='badge bg-primary'>Low</span>" : (($row['prioritas'] == 2) ? "<span class='badge bg-warning'>Medium</span>" : "<span class='badge bg-danger'>High</span>");
                                    ?>
                                </td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <?php echo ($row['status'] == 0) ? "<span class='badge bg-danger'>Belum Selesai</span>" : "<span class='badge bg-success'>Selesai</span>"; ?>
                                </td>
                                <td>
                                    <?php if ($row['status'] == 0) { ?>
                                        <a href="?complete=<?php echo $row['id'];  ?>" class="btn btn-success btn-sm "><i class="fa-solid fa-check"></i></a>
                                        <a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <?php } ?>
                                        <a href="?delete=<?php echo $row['id']  ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                        <td colspan='6' class="text-center">
                            <img src="img/notask.png" alt="No Data" width="200" style="opacity: 0.7;">
                            <p class="mt-2 text-muted">Tidak Ada Data</p>
                        </td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
            <hr>
        </div>

        <br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</body>
</html>