<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AlatAngkut;
use App\Models\Bidang;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\JenisPerdin;
use App\Models\Kabupaten;
use App\Models\Kegiatan;
use App\Models\KegiatanSub;
use App\Models\Ketentuan;
use App\Models\Lama;
use App\Models\LevelAdmin;
use App\Models\Pegawai;
use App\Models\Wilayah;
use App\Models\Pangkat;
use App\Models\Seksi;
use App\Models\TandaTangan;
use App\Models\UangHarian;
use App\Models\UangPenginapan;
use App\Models\UangTransport;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        LevelAdmin::create([
            'nama' => 'Admin',
            'slug' => 'admin',
        ]);
        LevelAdmin::create([
            'nama' => 'Operator',
            'slug' => 'operator',
        ]);
        LevelAdmin::create([
            'nama' => 'Super Operator',
            'slug' => 'super-operator',
        ]);
        LevelAdmin::create([
            'nama' => 'Approval',
            'slug' => 'approval',
        ]);

        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'level_admin_id' => 1,
        ]);

        User::create([
            'username' => 'operator',
            'password' => bcrypt('operator'),
            'level_admin_id' => 2,
        ]);

        User::create([
            'username' => 'superoperator',
            'password' => bcrypt('superoperator'),
            'level_admin_id' => 3,
        ]);

        User::create([
            'username' => 'approval',
            'password' => bcrypt('approval'),
            'level_admin_id' => 4,
        ]);



        Bidang::create([
            'nama' => 'BIDANG PENGENDALIAN PENDUDUK',
            'slug' => 'bidang-pengendalian-penduduk',
            'jenis' => 'BIDANG',
            'author_id' => 1,
        ]);
        Bidang::create([
            'nama' => 'BIDANG KELUARGA BERENCANA',
            'slug' => 'bidang-keluarga-berencana',
            'jenis' => 'BIDANG',
            'author_id' => 1,
        ]);


        Seksi::create([
            'nama' => 'SEKSI PELAKSANAAN PEMBINAAN JALAN',
            'slug' => 'seksi-pelaksanaan-pembinaan-jalan',
            'bidang_id' => 2,
            'author_id' => 1,
        ]);



        Kegiatan::create([
            'nama' => 'Koordinasi dan Konsultasi ke Dalam dan Keluar Daerah pada UPTD Pengelolaan Daerah Aliran Sungai',
            'slug' => 'koordinasi-dan-konsultasi-ke-dalam-dan-keluar-daerah-pada-uptd-pengelolaan-daerah-aliran-sungai',
            'seksi_id' => 1,
            'author_id' => 1,
        ]);
        Kegiatan::create([
            'nama' => 'Koordinasi dan Konsultasi ke Dalam dan Keluar Daerah pada UPTD Pengelolaan Jalan Dan Jembatan',
            'slug' => 'koordinasi-dan-konsultasi-ke-dalam-dan-keluar-daerah-pada-uptd-pengelolaan-jalan-dan-jembatan',
            'seksi_id' => 1,
            'author_id' => 1,
        ]);

        JenisPerdin::create([
            'nama' => 'Perjalanan Dinas Dalam Kota',
            'slug' => 'perjalanan-dinas-dalam-kota',
            'no_rek' => '5.1.02.04.01.0003',
            'author_id' => 1,
        ]);

        JenisPerdin::create([
            'nama' => 'Perjalanan Dinas Biasa',
            'slug' => 'perjalanan-dinas-biasa',
            'no_rek' => '5.1.02.04.01.0001',
            'author_id' => 1,
        ]);

        Wilayah::create([
            'nama' => 'Kampar',
            'slug' => 'kampar',
            'jenis_perdin_id' => 1,
            'author_id' => 1,
        ]);
        Wilayah::create([
            'nama' => 'Pekanbaru',
            'slug' => 'pekanbaru',
            'jenis_perdin_id' => 2,
            'author_id' => 1,
        ]);

        Kabupaten::create([
            'nama' => 'Kota Pekanbaru',
            'slug' => 'kota-pekanbaru',
            'wilayah_id' => 1,
            'author_id' => 1,
        ]);

        Kabupaten::create([
            'nama' => 'Kabupaten Kampar',
            'slug' => 'kabupaten-kampar',
            'wilayah_id' => 2,
            'author_id' => 1,
        ]);


        Golongan::create([
            'nama' => 'Eselon I',
            'slug' => 'eselon-i',
            'author_id' => 1,
        ]);
        Golongan::create([
            'nama' => 'Eselon II',
            'slug' => 'eselon-ii',
            'author_id' => 1,
        ]);
        Golongan::create([
            'nama' => 'Eselon III',
            'slug' => 'eselon-iii',
            'author_id' => 1,
        ]);
        Golongan::create([
            'nama' => 'Eselon IV',
            'slug' => 'eselon-iv',
            'author_id' => 1,
        ]);
        Golongan::create([
            'nama' => 'Golongan IV',
            'slug' => 'golongan-iv',
            'author_id' => 1,
        ]);
        Golongan::create([
            'nama' => 'Golongan III',
            'slug' => 'golongan-iii',
            'author_id' => 1,
        ]);
        Golongan::create([
            'nama' => 'Golongan II',
            'slug' => 'golongan-ii',
            'author_id' => 1,
        ]);
        Golongan::create([
            'nama' => 'Golongan I',
            'slug' => 'golongan-i',
            'author_id' => 1,
        ]);
        Golongan::create([
            'nama' => 'Non ASN',
            'slug' => 'non-asn',
            'author_id' => 1,
        ]);

        Pangkat::create([
            'nama' => 'I - A',
            'slug' => 'i-a',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'I - B',
            'slug' => 'i-b',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'I - C',
            'slug' => 'i-c',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'I - D',
            'slug' => 'i-d',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'II - A',
            'slug' => 'ii-a',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'II - B',
            'slug' => 'ii-b',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'II - C',
            'slug' => 'ii-c',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'II - D',
            'slug' => 'ii-d',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'III - A',
            'slug' => 'iii-a',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'III - B ',
            'slug' => 'iii-b',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'III - C',
            'slug' => 'iii-c',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'III - D',
            'slug' => 'iii-d',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'IV - A',
            'slug' => 'iv-a',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'IV - B',
            'slug' => 'iv-b',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'IV - C',
            'slug' => 'iv-c',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'IV - D',
            'slug' => 'iv-d',
            'author_id' => 1,
        ]);
        Pangkat::create([
            'nama' => 'IV - E',
            'slug' => 'iv-e',
            'author_id' => 1,
        ]);

        Jabatan::create([
            'nama' => 'KEPALA DINAS',
            'slug' => 'kepala-dinas',
            'author_id' => 1,
        ]);

        Jabatan::create([
            'nama' => 'SEKRETARIAT',
            'slug' => 'sekretariat',
            'author_id' => 1,
        ]);

        Jabatan::create([
            'nama' => 'BIDANG PENGENDALIAN PENDUDUK',
            'slug' => 'bidang-pengendalian-penduduk',
            'author_id' => 1,
        ]);

        Jabatan::create([
            'nama' => 'BIDANG KELUARGA BERENCANA',
            'slug' => 'bidang-keluarga-berencana',
            'author_id' => 1,
        ]);

        Jabatan::create([
            'nama' => 'BIDANG PEMBERDAYAAN PEREMPUAN',
            'slug' => 'bidang-pemberdayaan-perempuan',
            'author_id' => 1,
        ]);

        Jabatan::create([
            'nama' => 'BIDANG PERLINDUNGAN ANAK',
            'slug' => 'bidang-perlindungan-anak',
            'author_id' => 1,
        ]);

        Jabatan::create([
            'nama' => 'UPTD',
            'slug' => 'uptd',
            'author_id' => 1,
        ]);

        Jabatan::create([
            'nama' => 'KEPALA BIDANG',
            'slug' => 'kepala-bidang',
            'author_id' => 1,
        ]);
        Jabatan::create([
            'nama' => 'Non ASN',
            'slug' => 'non-asn',
            'author_id' => 1,
        ]);


        Ketentuan::create([
            'author_id' => 1,
        ]);

        Pegawai::create([
            'nama' => 'dandy',
            'slug' => 'dandy',
            'nip' => '18888232888888888',
            'email' => 'dandy@gmail.com',
            'no_hp' => '0809093230909090',
            'seksi_id' => 1,
            'golongan_id' => 1,
            'pangkat_id' => 1,
            'jabatan_id' => 1,
            'pptk' => 1,
            'ketentuan_id' => 1,
            'author_id' => 1,
        ]);

        Pegawai::create([
            'nama' => 'Drs. EDI AFRIZAL, M.Si',
            'slug' => 'drs.-edi-afrizal-m.si',
            'nip' => '188888121288888888',
            'email' => 'edi@gmail.com',
            'no_hp' => '08092329090909090',
            'seksi_id' => 1,
            'golongan_id' => 1,
            'pangkat_id' => 1,
            'jabatan_id' => 1,
            'pptk' => 0,
            'ketentuan_id' => 1,
            'author_id' => 1,
        ]);

        Pegawai::create([
            'nama' => 'dr. NENGSIH SRI WAHYUNI',
            'slug' => 'dr.-nengsih-sri-wahyuni',
            'nip' => '1888888232888888',
            'email' => 'ningsih@gmail.com',
            'no_hp' => '08090232090909090',
            'seksi_id' => 1,
            'golongan_id' => 2,
            'pangkat_id' => 2,
            'jabatan_id' => 2,
            'pptk' => 1,
            'ketentuan_id' => 1,
            'author_id' => 1,
        ]);

        Pegawai::create([
            'nama' => 'DWI ANDRIANI, SKM, M.Kes',
            'slug' => 'dwi-andriani-skm-m.kes',
            'nip' => '1888888842488888888',
            'email' => 'andriani@gmail.com',
            'no_hp' => '08090912390909090',
            'seksi_id' => 1,
            'golongan_id' => 2,
            'pangkat_id' => 3,
            'jabatan_id' => 3,
            'pptk' => 1,
            'ketentuan_id' => 1,
            'author_id' => 1,
        ]);

        AlatAngkut::create([
            'nama' => 'Pesawat',
            'slug' => 'pesawat',
            'tiket' => 1,
            'author_id' => 1,
        ]);
        AlatAngkut::create([
            'nama' => 'Mobil',
            'slug' => 'mobil',
            'tiket' => 0,
            'author_id' => 1,
        ]);

        UangHarian::create([
            'keterangan' => 'U Harian Dinas luar',
            'slug' => 'u-harian-dinas-luar',
            'wilayah_id' => 1,
            'eselon_i' => 150000,
            'eselon_ii' => 150000,
            'eselon_iii' => 150000,
            'eselon_iv' => 150000,
            'golongan_iv' => 150000,
            'golongan_iii' => 150000,
            'golongan_ii' => 150000,
            'golongan_i' => 150000,
            'non_asn' => 150000,
            'author_id' => 1,
        ]);
        UangHarian::create([
            'keterangan' => 'U Harian Dinas Luar (Kunjungan Kerja)',
            'slug' => 'u-harian-dinas-luar-(kunjungan-kerja)',
            'wilayah_id' => 2,
            'eselon_i' => 150000,
            'eselon_ii' => 150000,
            'eselon_iii' => 150000,
            'eselon_iv' => 150000,
            'golongan_iv' => 150000,
            'golongan_iii' => 150000,
            'golongan_ii' => 150000,
            'golongan_i' => 150000,
            'non_asn' => 150000,
            'author_id' => 1,
        ]);

        UangTransport::create([
            'wilayah_id' => 1,
            'alat_angkut_id' => 1,
            'slug' => 'uang-transport-1',
            'harga_tiket' => 100000,
            'eselon_i' => 550000,
            'eselon_ii' => 520000,
            'eselon_iii' => 490000,
            'eselon_iv' => 450000,
            'golongan_iv' => 400000,
            'golongan_iii' => 400000,
            'golongan_ii' => 400000,
            'golongan_i' => 400000,
            'non_asn' => 150000,
            'author_id' => 1,
        ]);
        UangTransport::create([
            'wilayah_id' => 2,
            'alat_angkut_id' => 2,
            'slug' => 'uang-transport-2',
            'harga_tiket' => 100000,
            'eselon_i' => 490000,
            'eselon_ii' => 460000,
            'eselon_iii' => 430000,
            'eselon_iv' => 390000,
            'golongan_iv' => 350000,
            'golongan_iii' => 350000,
            'golongan_ii' => 350000,
            'golongan_i' => 350000,
            'non_asn' => 150000,
            'author_id' => 1,
        ]);

        UangPenginapan::create([
            'keterangan' => 'U Harian Dinas luar',
            'slug' => 'u-harian-dinas-luar',
            'wilayah_id' => 1,
            'eselon_i' => 150000,
            'eselon_ii' => 150000,
            'eselon_iii' => 150000,
            'eselon_iv' => 150000,
            'golongan_iv' => 150000,
            'golongan_iii' => 150000,
            'golongan_ii' => 150000,
            'golongan_i' => 150000,
            'non_asn' => 150000,
            'author_id' => 1,
        ]);
        UangPenginapan::create([
            'keterangan' => 'U Harian Dinas Luar (Kunjungan Kerja)',
            'slug' => 'u-harian-dinas-luar-(kunjungan-kerja)',
            'wilayah_id' => 2,
            'eselon_i' => 150000,
            'eselon_ii' => 150000,
            'eselon_iii' => 150000,
            'eselon_iv' => 150000,
            'golongan_iv' => 150000,
            'golongan_iii' => 150000,
            'golongan_ii' => 150000,
            'golongan_i' => 150000,
            'non_asn' => 150000,
            'author_id' => 1,
        ]);

        Lama::create([
            'lama_hari' => 2,
            'author_id' => 1,
        ]);
        Lama::create([
            'lama_hari' => 3,
            'author_id' => 1,
        ]);

        KegiatanSub::create([
            'nama' => 'Koordinasi dan Konsultasi ke Dalam dan Keluar Daerah pada UPTD Pengelolaan Daerah Aliran Sungai',
            'slug' => 'koordinasi-dan-konsultasi-ke-dalam-dan-keluar-daerah-pada-uptd-pengelolaan-daerah-aliran-sungai',
            'kegiatan_id' => 1,
            'author_id' => 1,
        ]);

        TandaTangan::create([
            'pegawai_id' => 1,
            'slug' => 'ttd-1',
            'status' => 1,
            'jenis_ttd' => 'pemberi_perintah',
            'file_ttd' => null,
            'author_id' => 1,
        ]);

        TandaTangan::create([
            'pegawai_id' => 2,
            'slug' => 'ttd-2',
            'status' => 1,
            'jenis_ttd' => 'pemberi_perintah',
            'file_ttd' => null,
            'author_id' => 1,
        ]);

        TandaTangan::create([
            'pegawai_id' => 3,
            'slug' => 'ttd-3',
            'status' => 1,
            'jenis_ttd' => 'pemberi_perintah',
            'file_ttd' => null,
            'author_id' => 1,
        ]);

        TandaTangan::create([
            'pegawai_id' => 4,
            'slug' => 'ttd-4',
            'status' => 1,
            'jenis_ttd' => 'pemberi_perintah',
            'file_ttd' => null,
            'author_id' => 1,
        ]);



        TandaTangan::create([
            'pegawai_id' => 2,
            'slug' => 'ttd-5',
            'status' => 1,
            'jenis_ttd' => 'pptk',
            'file_ttd' => null,
            'author_id' => 1,
        ]);


        TandaTangan::create([
            'pegawai_id' => 3,
            'slug' => 'ttd-6',
            'status' => 1,
            'jenis_ttd' => 'kuasa_pengguna_anggaran',
            'file_ttd' => null,
            'author_id' => 1,
        ]);



    }
}
