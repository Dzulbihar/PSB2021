<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smp27::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap27' => $faker->name,
        'nisn27' => $faker->isbn13,
        'nik27' => $faker->ean13,
        'tempatlahir27' => $faker->city,
        'tbt27' => $faker->dateTime,
        'jenkel27' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa27' => $faker->cityPrefix,
        'kec27' => $faker->citySuffix,
        'kab27' => $faker->streetSuffix,
        'prov27' => $faker->streetName,
        'kodepos27' => $faker->ean8,
        'cita27' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara27' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah27' => $faker->company,
        'alamatasalsekolah27' => $faker->catchPhrase,
        'nokk27' => $faker->ean8,
        'namaayah27' => $faker->name,
        'nikayah27' => $faker->ean13,
        'tahunlahirayah27' => $faker->ean8,
        'pendidikanayah27' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah27' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu27' => $faker->name,
        'nikibu27' => $faker->ean13,
        'tahunlahiribu27' => $faker->ean8,
        'pendidikanibu27' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu27' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan27' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi27' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp27' => $faker->phoneNumber ,

    ];
});
