<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pedulistunting';

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data semua resep
$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep MP-ASI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Rowdies&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #00acc1;
            color: white;
            padding: 20px;
            text-align: start;
            font-family: 'Poppins', sans-serif;
            font-size: fs-4;
        }
        .kategori-button {
            border: none;
            background-color: #e0f7fa;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 10px;
            cursor: pointer;
        }
        .kategori-button:hover {
            background-color: #b2ebf2;
        }
        .card img {
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="header ">
        <h1>Resep MP-ASI</h1>
        <p>Pilih resep MP-ASI sesuai usia anak Anda</p>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
            <a href="usia.php?cat_usia=6-8" class="kategori-button">USIA 06 - 08 BULAN</a>
            <a href="usia.php?cat_usia=8-12" class="kategori-button">USIA 08 - 12 BULAN</a>
            <a href="usia.php?cat_usia=12-23" class="kategori-button">USIA 12 - 23 BULAN</a>
            <a href="usia.php?cat_usia=12-23" class="kategori-button">USIA 2 - 5 TAHUN</a>
        </div>
        <h3 class="mt-4">Semua Resep</h3>
        <div class="row">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="<?php echo $row['image_recipe']; ?>" class="card-img-top" alt="MP-ASI">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['deskripsi']; ?></h5>
                                <p class="card-text">Kategori Usia: <?php echo $row['cat_usia']; ?></p>
                                <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Tidak ada resep tersedia.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
