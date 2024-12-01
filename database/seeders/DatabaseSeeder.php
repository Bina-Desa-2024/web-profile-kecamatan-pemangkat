<?php

namespace Database\Seeders;

use App\Models\Kelolakontak;
use App\Models\Profildesa;
use App\Models\Strukturperangkatdesa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' =>bcrypt('adminpemangkat123')
        ]);
        Profildesa::create([
            'sejarah_desa' => 'Sejarah singkat desa ini bermula dari...',
            'gambar_profiledesa'=>'desa.png',
            'visi_desa' => 'Menjadi desa mandiri dan maju.',
            'misi_desa' => 'Meningkatkan kesejahteraan masyarakat.',
            
            'total_jiwa' => 0,
            'total_kk' => 0,
            'total_laki_laki' => 0,
            'total_perempuan' => 0,

            // Suku
            'total_melayu' => 0,
            'total_madura' => 0,
            'total_tionghoa' => 0,
            'total_dayak' => 0,
            'total_jawa' => 0,
            'total_bugis' => 0,
            'total_suku_lainnya' => 0,

            // Agama
            'total_islam' => 0,
            'total_katolik' => 0,
            'total_protestan' => 0,
            'total_buddha' => 0,
            'total_hindu' => 0,
            'total_konghuchu' => 0,

            // Pendidikan
            'total_belum_sekolah' => 0,
            'total_tamat_SD' => 0,
            'total_tamat_SMP' => 0,
            'total_tamat_SMA' => 0,
            'total_diploma1' => 0,
            'total_diploma2' => 0,
            'total_diploma3' => 0,
            'total_sarjana1' => 0,
            'total_sarjana2' => 0,
            'total_sarjana3' => 0,

            // Pekerjaan
            'total_petani_pekebun' => 0,
            'total_buruhTani' => 0,
            'total_swasta' => 0,
            'total_pns' => 0,
            'total_pedagang' => 0,
            'total_pengrajin' => 0,
            'total_peternak' => 0,
            'total_nelayan' => 0,
            'total_lainlain' => 0,

            // Informasi Desa
            'batas_utara' => '',
            'batas_selatan' => '',
            'batas_barat' => '',
            'batas_timur' => '',

            // Statistik Desa
            'luas_desa' => 0,
            'jumlah_dusun' => 0,
            'jumlah_rt' => 0,
            'jumlah_rw' => 0,

            'peta_desa' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17596.69517182833!2d108.89841217452445!3d0.692050119300173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e305ab91cca753%3A0x10d868d0d0d897e3!2sSungai%20Keran%20Village%20Office!5e0!3m2!1sen!2sid!4v1728940315050!5m2!1sen!2sid" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
        Kelolakontak::create([
            'no_hp'=>'081234567890',
            'url_ig'=>'',
            'email' =>'test@gmail.com',
            'url_fb'=>'',
            'url_yt'=>'',
        ]);
        Strukturperangkatdesa::create([
            'nama'=>'',
            'gambar_strukturdesa'=>'gambar_yang_tersimpan/1AHM3BU6CJuSik5tgCegqRJztL1IG1oVhBurhJUm.jpg',
        ]);
    }
}
