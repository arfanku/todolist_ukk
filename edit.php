<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <form method="POST" class="border rounded bg-light p-3">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label class="form-label">Nama Task Baru:</label>
        <input type="text" name="task" class="form-control" placeholder="Masukkan Task" autocomplete="off" value="<?php echo $data['task']; ?>" required>

        <label class="form-label mt-2">Prioritas:</label>
        <select name="prioritas" class="form-control" required>
            <option value="1" <?php echo ($data['prioritas'] == 1) ? 'selected' : ''; ?>>Low</option>
            <option value="2" <?php echo ($data['prioritas'] == 2) ? 'selected' : ''; ?>>Medium</option>
            <option value="3" <?php echo ($data['prioritas'] == 3) ? 'selected' : ''; ?>>High</option>
        </select>

        <label class="form-label mt-2">Tanggal:</label>
        <input type="date" name="date" class="form-control" value="<?php echo $data['date']; ?>" required>

        <br>
        <button type="submit" class="btn btn-danger mt-2" name="update_task">Ubah Task</button>
        <button type="button" class="btn btn-secondary mt-2" onclick="window.location.href='all_task.php';">Kembali</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
