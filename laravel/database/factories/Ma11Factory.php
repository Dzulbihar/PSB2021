<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Ma11::class, function (Faker $faker) {
    return [

    	'user_id' => 100,
        'namalengkap62' => $faker->name,
        'nisn62' => $faker->isbn13,
        'nik62' => $faker->ean13,
        'tempatlahir62' => $faker->city,
        'tbt62' => $faker->dateTime,
        'jenkel62' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa62' => $faker->cityPrefix,
        'kec62' => $faker->citySuffix,
        'kab62' => $faker->streetSuffix,
        'prov62' => $faker->streetName,
        'kodepos62' => $faker->ean8,
        'cita62' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara62' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah62' => $faker->company,
        'alamatasalsekolah62' => $faker->catchPhrase,
        'nokk62' => $faker->ean8,
        'namaayah62' => $faker->name,
        'nikayah62' => $faker->ean13,
        'tahunlahirayah62' => $faker->ean8,
        'pendidikanayah62' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah62' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu62' => $faker->name,
        'nikibu62' => $faker->ean13,
        'tahunlahiribu62' => $faker->ean8,
        'pendidikanibu62' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu62' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan62' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi62' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp62' => $faker->phoneNumber ,



    ];
});
