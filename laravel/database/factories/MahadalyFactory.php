<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mahadaly::class, function (Faker $faker) {
    return [
      
    	'user_id' => 100,
        'namalengkap7' => $faker->name,
        'nisn7' => $faker->isbn13,
        'nik7' => $faker->ean13,
        'tempatlahir7' => $faker->city,
        'tbt7' => $faker->dateTime,
        'jenkel7' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa7' => $faker->cityPrefix,
        'kec7' => $faker->citySuffix,
        'kab7' => $faker->streetSuffix,
        'prov7' => $faker->streetName,
        'kodepos7' => $faker->ean8,
        'cita7' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara7' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah7' => $faker->company,
        'alamatasalsekolah7' => $faker->catchPhrase,
        'nokk7' => $faker->ean8,
        'namaayah7' => $faker->name,
        'nikayah7' => $faker->ean13,
        'tahunlahirayah7' => $faker->ean8,
        'pendidikanayah7' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah7' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu7' => $faker->name,
        'nikibu7' => $faker->ean13,
        'tahunlahiribu7' => $faker->ean8,
        'pendidikanibu7' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu7' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan7' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi7' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp7' => $faker->phoneNumber ,


    ];
});
