<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;

class SantriSeeder extends Seeder
{
    public function run()
    {
        $santriData = [

            [
                'nama' => 'Yuli Ana',
                'gambar' => null,
                'tempat_tgl' => 'Kedondon, 2011-11-09',
                'alamat' => 'Kedondon',
                'jenis_kelamin' => 'Perempuan',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 2,
            ],
            [
                'nama' => 'Riki Azhari',
                'gambar' => null,
                'tempat_tgl' => 'Bebuak, 2009-03-18',
                'alamat' => 'Bebuak',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'SMK',
                'wali_santri_id' => 3,
            ],
            [
                'nama' => 'Rian Hafiz',
                'gambar' => null,
                'tempat_tgl' => 'Aik Bukak, 2011-04-11',
                'alamat' => 'Aik Bukak',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 4,
            ],
            [
                'nama' => 'M. Patan Rizki',
                'gambar' => null,
                'tempat_tgl' => 'Karang Lebah, 2011-11-25',
                'alamat' => 'Karang Lebah',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 5,
            ],
            [
                'nama' => 'Adam Tantra',
                'gambar' => null,
                'tempat_tgl' => 'Lendang Are, 2011-04-08',
                'alamat' => 'Lendang Are',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 6,
            ],
            [
                'nama' => 'M. Azandi Zohri',
                'gambar' => null,
                'tempat_tgl' => 'Jurit, 2011-07-23',
                'alamat' => 'Jurit',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 7,
            ],
            [
                'nama' => 'Zahira Rosiana',
                'gambar' => null,
                'tempat_tgl' => 'Sumbek, 2012-11-08',
                'alamat' => 'Sumbek',
                'jenis_kelamin' => 'Perempuan',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 8,
            ],
            [
                'nama' => 'M. Ziana Alpa',
                'gambar' => null,
                'tempat_tgl' => 'Sumbek, 2012-07-03',
                'alamat' => 'Sumbek',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 9,
            ],
            [
                'nama' => 'Repa Julia',
                'gambar' => null,
                'tempat_tgl' => 'Dompu, 2011-07-10',
                'alamat' => 'Dompu',
                'jenis_kelamin' => 'Perempuan',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 10,
            ],
            [
                'nama' => 'Alpian Hairi',
                'gambar' => null,
                'tempat_tgl' => 'Sumbek, 2012-03-24',
                'alamat' => 'Sumbek',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 11,
            ],
            [
                'nama' => 'M. Wirian Ramdani',
                'gambar' => null,
                'tempat_tgl' => 'Sumbek, 2012-08-02',
                'alamat' => 'Sumbek',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 12,
            ],
            [
                'nama' => 'Malana Malik Ibrahim',
                'gambar' => null,
                'tempat_tgl' => 'Pondk Gedang, 2011-12-05',
                'alamat' => 'Pondk Gedang',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 13,
            ],
            [
                'nama' => 'Ahmad Fauzan',
                'gambar' => null,
                'tempat_tgl' => 'Bukit Mente, 2011-01-15',
                'alamat' => 'Bukit Mente',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 14,
            ],
            [
                'nama' => 'Aisyah Putri',
                'gambar' => null,
                'tempat_tgl' => 'Mataram, 2010-05-25',
                'alamat' => 'Mataram',
                'jenis_kelamin' => 'Perempuan',
                'tingkat_pendidikan' => 'SMP',
                'wali_santri_id' => 15,
            ],
            [
                'nama' => 'Ali Syahbana',
                'gambar' => null,
                'tempat_tgl' => 'Lombok Timur, 2009-07-12',
                'alamat' => 'Lombok Timur',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'SMA',
                'wali_santri_id' => 16,
            ],
            [
                'nama' => 'Zara Amelia',
                'gambar' => null,
                'tempat_tgl' => 'Praya, 2008-08-19',
                'alamat' => 'Praya',
                'jenis_kelamin' => 'Perempuan',
                'tingkat_pendidikan' => 'SD',
                'wali_santri_id' => 17,
            ],
            [
                'nama' => 'Faris Muhammad',
                'gambar' => null,
                'tempat_tgl' => 'Kediri, 2009-10-01',
                'alamat' => 'Kediri',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'SMP',
                'wali_santri_id' => 18,
            ],
            [
                'nama' => 'Raya Salsabila',
                'gambar' => null,
                'tempat_tgl' => 'Lombok Tengah, 2010-11-22',
                'alamat' => 'Lombok Tengah',
                'jenis_kelamin' => 'Perempuan',
                'tingkat_pendidikan' => 'MTS',
                'wali_santri_id' => 19,
            ],
            [
                'nama' => 'Imam Syafiq',
                'gambar' => null,
                'tempat_tgl' => 'Selong, 2007-12-10',
                'alamat' => 'Selong',
                'jenis_kelamin' => 'Laki-laki',
                'tingkat_pendidikan' => 'SMA',
                'wali_santri_id' => 20,
            ],
        ];

        foreach ($santriData as $data) {
            Santri::create($data);
        }
    }
}
