<?php
// Menghubungkan ke database
include 'db_connect.php';

// Query untuk mengambil semua pengguna dari tabel users
$sql_users = "SELECT user_id, username, email FROM users";
$result_users = $conn->query($sql_users);

echo "<h2>Daftar Pengguna</h2>";
if ($result_users->num_rows > 0) {
    // Menampilkan data pengguna
    while($row = $result_users->fetch_assoc()) {
        echo "ID Pengguna: " . $row["user_id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Tidak ada pengguna ditemukan.<br>";
}

// Query untuk mengambil semua artikel dari tabel posts
$sql_posts = "SELECT post_id, title, content FROM posts";
$result_posts = $conn->query($sql_posts);

echo "<h2>Daftar Artikel</h2>";
if ($result_posts->num_rows > 0) {
    // Menampilkan data artikel
    while($row = $result_posts->fetch_assoc()) {
        echo "ID Artikel: " . $row["post_id"] . " - Judul: " . $row["title"] . "<br>Konten: " . $row["content"] . "<br><br>";
    }
} else {
    echo "Tidak ada artikel ditemukan.<br>";
}

// Tutup koneksi
$conn->close();
?>
