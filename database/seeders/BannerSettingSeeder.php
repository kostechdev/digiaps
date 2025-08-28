<?php

namespace Database\Seeders;

use App\Models\BannerSetting;
use Illuminate\Database\Seeder;

class BannerSettingSeeder extends Seeder
{
    public function run(): void
    {
        BannerSetting::create([
            'judul' => 'Selamat Datang di DIGIAPS',
            'deskripsi' => 'Sistem Informasi Digital Administrasi Penduduk dan Statistik Kelurahan Lebak Denok',
            'gambar' => 'banner-images/banner1.jpg',
            'link_cta' => '/admin',
            'text_cta' => 'Masuk Admin',
            'aktif' => true,
            'urutan' => 1,
        ]);

        BannerSetting::create([
            'judul' => 'Layanan Terpadu Kelurahan',
            'deskripsi' => 'Kemudahan akses informasi dan layanan administrasi untuk seluruh warga',
            'gambar' => 'banner-images/banner2.jpg',
            'link_cta' => '#berita',
            'text_cta' => 'Lihat Berita',
            'aktif' => true,
            'urutan' => 2,
        ]);

        BannerSetting::create([
            'judul' => 'Data Penduduk Terkini',
            'deskripsi' => 'Informasi demografis dan statistik penduduk Kelurahan Lebak Denok',
            'gambar' => 'banner-images/banner3.jpg',
            'link_cta' => '#penduduk',
            'text_cta' => 'Lihat Data',
            'aktif' => true,
            'urutan' => 3,
        ]);
    }
}
