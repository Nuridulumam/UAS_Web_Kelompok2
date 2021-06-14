<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class LoginController extends Controller
{
    function login(){
        return view('Admin.login');
    }
    function cekLogin()
    {
        $koneksi = mysqli_connect("localhost", "root", "", "db_prodi_ti");
        session_start();
        
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $userpass = $_POST['password'];

            // menyeleksi data user dengan username dan password yang sesuai
            $login = mysqli_query($koneksi, "SELECT * from admins where username='$username'");
            // menghitung jumlah data yang ditemukan
            $cek_data = mysqli_fetch_array($login);
            // $password = $cek_data['password'];
            $cek = mysqli_num_rows($login);
            //cek username dan password 
            

            if ($cek > 0) {
                // cek jika user login sebagai admin
                if (password_verify($userpass, $cek_data['password'])) {
                    session_start();
                    $id = $cek_data['id_user'];
                    $role = $cek_data['role'];
                    $email = $cek_data['email'];
                    $_SESSION['role'] = $role;
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $id;
                    // alihkan ke halaman dashboard admin
                    return redirect('/admin');
                } else {
                    header("location:index.php?pesan=gagal");
                    // header("location:dashboard.php");
                }
            } else {
                return redirect('/admin');
            }
        }

    }
}