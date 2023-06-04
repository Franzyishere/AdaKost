
<?php
session_start();

// Simulasi data pengguna yang valid
$validUsername = '123';
$validPassword = '123';

// Mendapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Memeriksa apakah data yang dimasukkan sesuai dengan yang valid
if ($username == $validUsername && $password == $validPassword) {
    // Login berhasil, simpan informasi pengguna ke session
    $_SESSION['username'] = $username;
    echo 'Login berhasil. Selamat datang, ' . $username . '!';
} else {
    // Login gagal
    echo 'Login gagal. Mohon periksa kembali username dan password Anda.';
}
?>
