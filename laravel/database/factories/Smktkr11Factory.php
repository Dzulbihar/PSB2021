<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smktkr11::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap52' => $faker->name,
        'nisn52' => $faker->isbn13,
        'nik52' => $faker->ean13,
        'tempatlahir52' => $faker->city,
        'tbt52' => $faker->dateTime,
        'jenkel52' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa52' => $faker->cityPrefix,
        'kec52' => $faker->citySuffix,
        'kab52' => $faker->streetSuffix,
        'prov52' => $faker->streetName,
        'kodepos52' => $faker->ean8,
        'cita52' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara52' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah52' => $faker->company,
        'alamatasalsekolah52' => $faker->catchPhrase,
        'nokk52' => $faker->ean8,
        'namaayah52' => $faker->name,
        'nikayah52' => $faker->ean13,
        'tahunlahirayah52' => $faker->ean8,
        'pendidikanayah52' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah52' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu52' => $faker->name,
        'nikibu52' => $faker->ean13,
        'tahunlahiribu52' => $faker->ean8,
        'pendidikanibu52' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu52' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan52' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi52' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp52' => $faker->phoneNumber ,

    ];
});
