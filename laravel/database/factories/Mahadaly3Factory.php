<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mahadaly3::class, function (Faker $faker) {
    return [
      
    	'user_id' => 100,
        'namalengkap73' => $faker->name,
        'nisn73' => $faker->isbn13,
        'nik73' => $faker->ean13,
        'tempatlahir73' => $faker->city,
        'tbt73' => $faker->dateTime,
        'jenkel73' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa73' => $faker->cityPrefix,
        'kec73' => $faker->citySuffix,
        'kab73' => $faker->streetSuffix,
        'prov73' => $faker->streetName,
        'kodepos73' => $faker->ean8,
        'cita73' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara73' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah73' => $faker->company,
        'alamatasalsekolah73' => $faker->catchPhrase,
        'nokk73' => $faker->ean8,
        'namaayah73' => $faker->name,
        'nikayah73' => $faker->ean13,
        'tahunlahirayah73' => $faker->ean8,
        'pendidikanayah73' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah73' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu73' => $faker->name,
        'nikibu73' => $faker->ean13,
        'tahunlahiribu73' => $faker->ean8,
        'pendidikanibu73' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu73' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan73' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi73' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp73' => $faker->phoneNumber ,


    ];
});
