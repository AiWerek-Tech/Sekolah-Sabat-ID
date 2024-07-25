<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beritamisi extends CI_Controller
{

    public function cerita1()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Sabat Pertentangan',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita1', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => 'Sabat Pertentangan',
            'og_description' => 'Situs Penyedia Materi Pelajaran Sekolah Sabat',
            'og_image' => base_url('assets/image/berita_misi/post_q1/story1.webp'),
            'og_url' => base_url('pages/tentang-kami')
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }


    // Tambahkan method lain untuk setiap halaman yang ada di navigasi Anda
    // Contoh: public function beginner(), public function kindergarten(), dll.
}
?>