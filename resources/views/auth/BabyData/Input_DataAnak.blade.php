<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Anak</title>
</head>
<body>
    <h1>Input Data Anak</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('baby_data.store') }}" method="POST">
        @csrf
        <label for="nama_bayi">Nama Anak:</label>
        <input type="text" name="nama_bayi" id="nama_bayi" required><br>

        <label for="ttl">Tanggal Lahir:</label>
        <input type="date" name="ttl" id="ttl" required><br>

        <label for="BB">Berat Badan Saat Lahir (kg):</label>
        <input type="number" name="BB" id="BB" step="0.01" required><br>

        <label for="TB">Tinggi Badan Saat Lahir (cm):</label>
        <input type="number" name="TB" id="TB" step="0.01" required><br>

        <label for="JK">Jenis Kelamin:</label>
        <select name="JK" id="JK" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="catatan">Catatan Kesehatan:</label>
        <textarea name="catatan" id="catatan"></textarea><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
