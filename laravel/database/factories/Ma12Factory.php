<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Ma12::class, function (Faker $faker) {
    return [

    	'user_id' => 100,
        'namalengkap63' => $faker->name,
        'nisn63' => $faker->isbn13,
        'nik63' => $faker->ean13,
        'tempatlahir63' => $faker->city,
        'tbt63' => $faker->dateTime,
        'jenkel63' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa63' => $faker->cityPrefix,
        'kec63' => $faker->citySuffix,
        'kab63' => $faker->streetSuffix,
        'prov63' => $faker->streetName,
        'kodepos63' => $faker->ean8,
        'cita63' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara63' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah63' => $faker->company,
        'alamatasalsekolah63' => $faker->catchPhrase,
        'nokk63' => $faker->ean8,
        'namaayah63' => $faker->name,
        'nikayah63' => $faker->ean13,
        'tahunlahirayah63' => $faker->ean8,
        'pendidikanayah63' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah63' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu63' => $faker->name,
        'nikibu63' => $faker->ean13,
        'tahunlahiribu63' => $faker->ean8,
        'pendidikanibu63' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu63' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan63' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi63' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp63' => $faker->phoneNumber ,


    ];
});
