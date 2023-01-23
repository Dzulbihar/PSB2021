<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smp17::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap17' => $faker->name,
        'nisn17' => $faker->isbn13,
        'nik17' => $faker->ean13,
        'tempatlahir17' => $faker->city,
        'tbt17' => $faker->dateTime,
        'jenkel17' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa17' => $faker->cityPrefix,
        'kec17' => $faker->citySuffix,
        'kab17' => $faker->streetSuffix,
        'prov17' => $faker->streetName,
        'kodepos17' => $faker->ean8,
        'cita17' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara17' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah17' => $faker->company,
        'alamatasalsekolah17' => $faker->catchPhrase,
        'nokk17' => $faker->ean8,
        'namaayah17' => $faker->name,
        'nikayah17' => $faker->ean13,
        'tahunlahirayah17' => $faker->ean8,
        'pendidikanayah17' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah17' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu17' => $faker->name,
        'nikibu17' => $faker->ean13,
        'tahunlahiribu17' => $faker->ean8,
        'pendidikanibu17' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu17' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan17' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi17' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp17' => $faker->phoneNumber ,

    ];
});
