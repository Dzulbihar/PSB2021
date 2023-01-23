<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smp18::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap18' => $faker->name,
        'nisn18' => $faker->isbn13,
        'nik18' => $faker->ean13,
        'tempatlahir18' => $faker->city,
        'tbt18' => $faker->dateTime,
        'jenkel18' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa18' => $faker->cityPrefix,
        'kec18' => $faker->citySuffix,
        'kab18' => $faker->streetSuffix,
        'prov18' => $faker->streetName,
        'kodepos18' => $faker->ean8,
        'cita18' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara18' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah18' => $faker->company,
        'alamatasalsekolah18' => $faker->catchPhrase,
        'nokk18' => $faker->ean8,
        'namaayah18' => $faker->name,
        'nikayah18' => $faker->ean13,
        'tahunlahirayah18' => $faker->ean8,
        'pendidikanayah18' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah18' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu18' => $faker->name,
        'nikibu18' => $faker->ean13,
        'tahunlahiribu18' => $faker->ean8,
        'pendidikanibu18' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu18' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan18' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi18' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp18' => $faker->phoneNumber ,

    ];
});
