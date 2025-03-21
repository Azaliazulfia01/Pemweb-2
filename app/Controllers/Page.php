<?php namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function biodata()  
    {
        echo "<h1>BIODATA AZALIA</h1>";
        echo "<p><strong>NAMA</strong>:Azalia Zulfia</p>";
        echo "<p><strong>NIM</strong>:4123001</p>";
        echo "<p><strong>PRODI</strong>:Sistem Informasi</p>";
        echo "<p><strong>TTL</strong>:Jombang, 07 Januari 2006</p>";
        echo "<p><strong>ALAMAT</strong>:Gedangan Mojowarno Jombang</p>";
    }
}
