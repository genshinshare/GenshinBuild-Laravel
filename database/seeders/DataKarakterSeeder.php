<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataKarakterSeeder extends Seeder
{
    public function run()
    {
        DB::table('DataKarakter')->insert([
            'nama_karakter' => 'Ganyu',
            'alias' => '-',
            'vision' => 'Cryo',
            'asal' => 'Liyue',
            'tipe_senjata' => 'Bow',
            'tipe_model' => 'P_sedang',
            'tanggal_rilis' => '2023-09-19',
            'lore' => 'The secretary to the Liyue Qixing. The blood of both human and illuminated beast flows within her veins. Graceful and quiet by nature, yet the gentle disposition of qilin sees not even the slightest conflict with even the most arduous of workloads. After all, Ganyu firmly believes that all the work she does is in honor of her contract with Rex Lapis, seeking the well-being of all living things within Liyue.',
            'deskripsi_karakter' => 'Ganyu adalah manusia setengah adeptus, dia memiliki darah Qilin yang ditandakan dengan tanduk di kepalanya. Ganyu memiliki kontrak dengan Archon Geo untuk menjadi sekretaris Liyue Qixing di Yuehai Pavilion hingga saat ini dan telah menjalankan tugasnya hingga ribuan tahun. Ganyu memiliki nafsu makan yang besar sekalipun dia seorang vegetarian. Saat perang Archon dulu, ketika Ganyu dalam bentuk Qilin, dia pernah dimakan hidup-hidup oleh monster berukuran raksasa, namun Ia justru membuat monster tersebut tersedak karena lebarnya pinggang Ganyu saat itu dan akhirnya terselamatkan setelah ditolong oleh Xiao. Karena traumanya itu Ganyu berusaha untuk menjaga bentuk tubuh dan berat badannya. Ganyu memiliki kemampuan untuk membuat panah Es yang dapat meledak di area kecil, Elemental Skill nya menciptakan bunga Es yang dapat mengalihkan perhatian musuh, dan Elemental Burst nya yang membuat hujan Es.',
            'nama_talenta_normal' => 'Liutian Archery',
            'deskripsi_talenta_normal' => 'Normal Attack
            Melancarkan hingga 6 serangan berturut-turut dengan busur.
            
            Charged Attack
            Melancarkan sebuah Serangan Membidik yang lebih akurat untuk mengakibatkan DMG lebih besar.
            Saat membidik, es akan berkumpul di ujung anak panah. Memiliki efek yang berbeda tergantung dari lama serangannya ditahan:
            ·Charge Tahap 1: Menembakkan panah es yang mengakibatkan Cryo DMG.
            ·Charge Tahap 2: Menembakkan Frostflake Arrow yang mengakibatkan Cryo DMG. Frostflake Arrow akan mengembang setelah mengenai target untuk mengakibatkan Cryo DMG area.
            
            Plunging Attack
            Melancarkan hujan panah dari udara dan menerjang tanah dengan kecepatan tinggi, mengakibatkan DMG area saat mendarat.',
            'anjuran_normal' => 'On-Field DPS, maksimalkan talenta ini terlebih dahulu, karena talenta ini merupakan sumber DMG dari On-Field Ganyu DPS terutama ketika bermain reverse-melt Ganyu. 
            Off-Field DPS, maka talenta ini tidak perlu dinaikkan levelnya karena DMG Off-Field Ganyu bersumber dari Skill dan Burst nya.',
            'nama_talenta_skill' => 'Trail of the Qilin',
            'deskripsi_talenta_skill' => 'Dengan meninggalkan sebuah Ice Lotus, Ganyu meloncat mundur dengan cepat, membuang semua ketidakmurnian dan mengakibatkan Cryo DMG area.

            Ice Lotus
            ·Terus menarik perhatian musuh di sekitar untuk menyerangnya.
            ·HP Ice Lotus mewarisi Max HP Ganyu berdasarkan persentase tertentu.
            ·Saat dihancurkan atau durasinya berakhir, Ice Lotus akan mengembang dengan hebat dan mengakibatkan Cryo DMG area.',
            'anjuran_skill' => 'On Field DPS, talent ini tidak terlalu penting, tapi tidak masalah untuk dinaikkan. 
            Off-Field DPS, maksimalkan talenta ini setelah talenta burst maksimal',
            'nama_talenta_burst' => 'Celestial Shower',
            'deskripsi_talenta_burst' => 'Mengumpulkan es dan salju di udara untuk memanggil Sacred Cryo Pearl yang membasmi iblis.
            Selama durasi skill, Sacred Cryo Pearl akan terus menjatuhkan bongkahan es yang mengenai musuh dalam area dan mengakibatkan Cryo DMG.',
            'anjuran_burst' => 'On-Field DPS, tidak perlu dinaikkan jika bermain reverse-melt, maksimalkan levelnya jika bermain freeze-comp (Talenta Normal Attack tetap prioritas utama).
            Off-Field DPS, sangat perlu dinaikkan karena merupakan DMG utama Ganyu',
            'set_artefak' => '4 Wanderers Troupe',
            'anjuran_artefak' => 'Karena pada umumnya Ganyu akan menjadi On-Field DPS, maka set artefak ini merupakan set terbaik untuk Ganyu terutama ketika bermain reverse-melt.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
