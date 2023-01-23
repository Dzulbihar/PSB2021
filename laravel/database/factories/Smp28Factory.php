<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smp28::class, function (Faker $faker) {
    return [
      
    	'user_id' => 100,
        'namalengkap28' => $faker->name,
        'nisn28' => $faker->isbn13,
        'nik28' => $faker->ean13,
        'tempatlahir28' => $faker->city,
        'tbt28' => $faker->dateTime,
        'jenkel28' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa28' => $faker->cityPrefix,
        'kec28' => $faker->citySuffix,
        'kab28' => $faker->streetSuffix,
        'prov28' => $faker->streetName,
        'kodepos28' => $faker->ean8,
        'cita28' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara28' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah28' => $faker->company,
        'alamatasalsekolah28' => $faker->catchPhrase,
        'nokk28' => $faker->ean8,
        'namaayah28' => $faker->name,
        'nikayah28' => $faker->ean13,
        'tahunlahirayah28' => $faker->ean8,
        'pendidikanayah28' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah28' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu28' => $faker->name,
        'nikibu28' => $faker->ean13,
        'tahunlahiribu28' => $faker->ean8,
        'pendidikanibu28' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu28' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan28' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi28' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp28' => $faker->phoneNumber ,

        //
    ];
});
