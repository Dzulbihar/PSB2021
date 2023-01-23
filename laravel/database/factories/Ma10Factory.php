<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Ma10::class, function (Faker $faker) {
    return [
    	'user_id' => 100,
        'namalengkap61' => $faker->name,
        'nisn61' => $faker->isbn13,
        'nik61' => $faker->ean13,
        'tempatlahir61' => $faker->city,
        'tbt61' => $faker->dateTime,
        'jenkel61' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa61' => $faker->cityPrefix,
        'kec61' => $faker->citySuffix,
        'kab61' => $faker->streetSuffix,
        'prov61' => $faker->streetName,
        'kodepos61' => $faker->ean8,
        'cita61' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara61' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah61' => $faker->company,
        'alamatasalsekolah61' => $faker->catchPhrase,
        'nokk61' => $faker->ean8,
        'namaayah61' => $faker->name,
        'nikayah61' => $faker->ean13,
        'tahunlahirayah61' => $faker->ean8,
        'pendidikanayah61' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah61' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu61' => $faker->name,
        'nikibu61' => $faker->ean13,
        'tahunlahiribu61' => $faker->ean8,
        'pendidikanibu61' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu61' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan61' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi61' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp61' => $faker->phoneNumber ,

    ];
});
