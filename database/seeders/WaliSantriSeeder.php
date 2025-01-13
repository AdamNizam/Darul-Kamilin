<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WaliSantri;

class WaliSantriSeeder extends Seeder
{
    public function run()
    {
        WaliSantri::create(['nama_ayah' => 'Budi Santoso', 'nama_ibu' => 'Siti Nurhaliza', 'no_hp' => '081234567890']);
        WaliSantri::create(['nama_ayah' => 'M. Lazim', 'nama_ibu' => 'Husnul Khatimah', 'no_hp' => '87713463584']);
        WaliSantri::create(['nama_ayah' => 'M. Yen', 'nama_ibu' => 'Mahriana', 'no_hp' => '87894712019']);
        WaliSantri::create(['nama_ayah' => 'M. Tohidi', 'nama_ibu' => 'Nurhayati', 'no_hp' => '83141620621']);
        WaliSantri::create(['nama_ayah' => 'Samsul Hadi', 'nama_ibu' => 'Lestari Dewi', 'no_hp' => '81234567890']);
        WaliSantri::create(['nama_ayah' => 'Fahmi Hidayat', 'nama_ibu' => 'Rahmawati', 'no_hp' => '85789012345']);
        WaliSantri::create(['nama_ayah' => 'Sugeng Priyono', 'nama_ibu' => 'Sulastri', 'no_hp' => '85678901234']);
        WaliSantri::create(['nama_ayah' => 'Ahmad Soleh', 'nama_ibu' => 'Fatimah', 'no_hp' => '81356789012']);
        WaliSantri::create(['nama_ayah' => 'Hendra Wijaya', 'nama_ibu' => 'Rina Puspita', 'no_hp' => '81123456789']);
        WaliSantri::create(['nama_ayah' => 'Agus Riyanto', 'nama_ibu' => 'Lina Kartini', 'no_hp' => '85987654321']);
        WaliSantri::create(['nama_ayah' => 'Darmawan', 'nama_ibu' => 'Siti Aminah', 'no_hp' => '82134567890']);
        WaliSantri::create(['nama_ayah' => 'Irwan Syahputra', 'nama_ibu' => 'Nurlina', 'no_hp' => '85123456789']);
        WaliSantri::create(['nama_ayah' => 'Bambang Sutrisno', 'nama_ibu' => 'Yuli Astuti', 'no_hp' => '88234567890']);
        WaliSantri::create(['nama_ayah' => 'Eko Prasetyo', 'nama_ibu' => 'Sri Wahyuni', 'no_hp' => '81198765432']);
        WaliSantri::create(['nama_ayah' => 'Hariyanto', 'nama_ibu' => 'Dewi Sartika', 'no_hp' => '87123456789']);
        WaliSantri::create(['nama_ayah' => 'Andi Firmansyah', 'nama_ibu' => 'Indah Lestari', 'no_hp' => '81134567890']);
        WaliSantri::create(['nama_ayah' => 'Yusuf Iskandar', 'nama_ibu' => 'Rahayu Pertiwi', 'no_hp' => '83198765432']);
        WaliSantri::create(['nama_ayah' => 'Ahmad Fauzi', 'nama_ibu' => 'Nur Aini', 'no_hp' => '88987654321']);
        WaliSantri::create(['nama_ayah' => 'Suyatno', 'nama_ibu' => 'Kartini', 'no_hp' => '81345678901']);
        WaliSantri::create(['nama_ayah' => 'Rizal Ramli', 'nama_ibu' => 'Fitriani', 'no_hp' => '85678901234']);
    }
}
