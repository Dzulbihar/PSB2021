<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Ma::class, function (Faker $faker) {
    return [
        
    	'user_id' => 100,
        'namalengkap6' => $faker->name,
        'nisn6' => $faker->isbn13,
        'nik6' => $faker->ean13,
        'tempatlahir6' => $faker->city,
        'tbt6' => $faker->dateTime,
        'jenkel6' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa6' => $faker->cityPrefix,
        'kec6' => $faker->citySuffix,
        'kab6' => $faker->streetSuffix,
        'prov6' => $faker->streetName,
        'kodepos6' => $faker->ean8,
        'cita6' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara6' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah6' => $faker->company,
        'alamatasalsekolah6' => $faker->catchPhrase,
        'nokk6' => $faker->ean8,
        'namaayah6' => $faker->name,
        'nikayah6' => $faker->ean13,
        'tahunlahirayah6' => $faker->ean8,
        'pendidikanayah6' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah6' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu6' => $faker->name,
        'nikibu6' => $faker->ean13,
        'tahunlahiribu6' => $faker->ean8,
        'pendidikanibu6' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu6' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan6' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi6' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp6' => $faker->phoneNumber ,



    ];
});
