<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smktkj::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap4' => $faker->name,
        'nisn4' => $faker->isbn13,
        'nik4' => $faker->ean13,
        'tempatlahir4' => $faker->city,
        'tbt4' => $faker->dateTime,
        'jenkel4' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa4' => $faker->cityPrefix,
        'kec4' => $faker->citySuffix,
        'kab4' => $faker->streetSuffix,
        'prov4' => $faker->streetName,
        'kodepos4' => $faker->ean8,
        'cita4' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara4' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah4' => $faker->company,
        'alamatasalsekolah4' => $faker->catchPhrase,
        'nokk4' => $faker->ean8,
        'namaayah4' => $faker->name,
        'nikayah4' => $faker->ean13,
        'tahunlahirayah4' => $faker->ean8,
        'pendidikanayah4' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah4' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu4' => $faker->name,
        'nikibu4' => $faker->ean13,
        'tahunlahiribu4' => $faker->ean8,
        'pendidikanibu4' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu4' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan4' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi4' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp4' => $faker->phoneNumber ,

    ];
});
