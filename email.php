<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Konfigurasi untuk pengiriman email
    $to = "amarmaruf.a5s@gmail.com"; // Ganti dengan alamat email penerima
    $subject = "Pesan dari formulir kontak";
    $headers = "From: $email"; // Header email, menggunakan alamat email pengirim

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email berhasil dikirim.";
    } else {
        echo "Gagal mengirim email.";
    }
}
?>
