<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>
<body>

    @if ($buku)
        <h1>{{ $buku['judul'] }}</h1>
        <p><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
    @else
        <h1>Buku Tidak Ditemukan</h1>
        <p>Tidak ada buku dengan ID {{ $id }}.</p>
    @endif

    <br>
    <a href="/buku">&larr; Kembali ke Daftar Buku</a>

</body>
</html>