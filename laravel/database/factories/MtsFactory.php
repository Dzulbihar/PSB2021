<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mts::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap3' => $faker->name,
        'nisn3' => $faker->isbn13,
        'nik3' => $faker->ean13,
        'tempatlahir3' => $faker->city,
        'tbt3' => $faker->dateTime,
        'jenkel3' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa3' => $faker->cityPrefix,
        'kec3' => $faker->citySuffix,
        'kab3' => $faker->streetSuffix,
        'prov3' => $faker->streetName,
        'kodepos3' => $faker->ean8,
        'cita3' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara3' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah3' => $faker->company,
        'alamatasalsekolah3' => $faker->catchPhrase,
        'nokk3' => $faker->ean8,
        'namaayah3' => $faker->name,
        'nikayah3' => $faker->ean13,
        'tahunlahirayah3' => $faker->ean8,
        'pendidikanayah3' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah3' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu3' => $faker->name,
        'nikibu3' => $faker->ean13,
        'tahunlahiribu3' => $faker->ean8,
        'pendidikanibu3' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu3' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan3' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi3' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp3' => $faker->phoneNumber ,


    ];
});
