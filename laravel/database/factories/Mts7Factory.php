<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mts7::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap37' => $faker->name,
        'nisn37' => $faker->isbn13,
        'nik37' => $faker->ean13,
        'tempatlahir37' => $faker->city,
        'tbt37' => $faker->dateTime,
        'jenkel37' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa37' => $faker->cityPrefix,
        'kec37' => $faker->citySuffix,
        'kab37' => $faker->streetSuffix,
        'prov37' => $faker->streetName,
        'kodepos37' => $faker->ean8,
        'cita37' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara37' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah37' => $faker->company,
        'alamatasalsekolah37' => $faker->catchPhrase,
        'nokk37' => $faker->ean8,
        'namaayah37' => $faker->name,
        'nikayah37' => $faker->ean13,
        'tahunlahirayah37' => $faker->ean8,
        'pendidikanayah37' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah37' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu37' => $faker->name,
        'nikibu37' => $faker->ean13,
        'tahunlahiribu37' => $faker->ean8,
        'pendidikanibu37' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu37' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan37' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi37' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp37' => $faker->phoneNumber ,



    ];
});
