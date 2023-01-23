<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smktkr10::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap51' => $faker->name,
        'nisn51' => $faker->isbn13,
        'nik51' => $faker->ean13,
        'tempatlahir51' => $faker->city,
        'tbt51' => $faker->dateTime,
        'jenkel51' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa51' => $faker->cityPrefix,
        'kec51' => $faker->citySuffix,
        'kab51' => $faker->streetSuffix,
        'prov51' => $faker->streetName,
        'kodepos51' => $faker->ean8,
        'cita51' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara51' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah51' => $faker->company,
        'alamatasalsekolah51' => $faker->catchPhrase,
        'nokk51' => $faker->ean8,
        'namaayah51' => $faker->name,
        'nikayah51' => $faker->ean13,
        'tahunlahirayah51' => $faker->ean8,
        'pendidikanayah51' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah51' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu51' => $faker->name,
        'nikibu51' => $faker->ean13,
        'tahunlahiribu51' => $faker->ean8,
        'pendidikanibu51' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu51' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan51' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi51' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp51' => $faker->phoneNumber ,

    ];
});
