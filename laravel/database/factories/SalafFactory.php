<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Salaf::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap0' => $faker->name,
        'nisn0' => $faker->isbn13,
        'nik0' => $faker->ean13,
        'tempatlahir0' => $faker->city,
        'tbt0' => $faker->dateTime,
        'jenkel0' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa0' => $faker->cityPrefix,
        'kec0' => $faker->citySuffix,
        'kab0' => $faker->streetSuffix,
        'prov0' => $faker->streetName,
        'kodepos0' => $faker->ean8,
        'cita0' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara0' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah0' => $faker->company,
        'alamatasalsekolah0' => $faker->catchPhrase,
        'nokk0' => $faker->ean8,
        'namaayah0' => $faker->name,
        'nikayah0' => $faker->ean13,
        'tahunlahirayah0' => $faker->ean8,
        'pendidikanayah0' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah0' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu0' => $faker->name,
        'nikibu0' => $faker->ean13,
        'tahunlahiribu0' => $faker->ean8,
        'pendidikanibu0' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu0' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan0' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi0' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp0' => $faker->phoneNumber ,

    ];
});
