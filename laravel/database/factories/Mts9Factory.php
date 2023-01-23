<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mts9::class, function (Faker $faker) {
    return [
        //

    	'user_id' => 100,
        'namalengkap39' => $faker->name,
        'nisn39' => $faker->isbn13,
        'nik39' => $faker->ean13,
        'tempatlahir39' => $faker->city,
        'tbt39' => $faker->dateTime,
        'jenkel39' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa39' => $faker->cityPrefix,
        'kec39' => $faker->citySuffix,
        'kab39' => $faker->streetSuffix,
        'prov39' => $faker->streetName,
        'kodepos39' => $faker->ean8,
        'cita39' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara39' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah39' => $faker->company,
        'alamatasalsekolah39' => $faker->catchPhrase,
        'nokk39' => $faker->ean8,
        'namaayah39' => $faker->name,
        'nikayah39' => $faker->ean13,
        'tahunlahirayah39' => $faker->ean8,
        'pendidikanayah39' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah39' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu39' => $faker->name,
        'nikibu39' => $faker->ean13,
        'tahunlahiribu39' => $faker->ean8,
        'pendidikanibu39' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu39' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan39' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi39' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp39' => $faker->phoneNumber ,

    ];
});
