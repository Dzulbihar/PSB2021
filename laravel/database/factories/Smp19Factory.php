<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smp19::class, function (Faker $faker) {
    return [
      
    	'user_id' => 100,
        'namalengkap19' => $faker->name,
        'nisn19' => $faker->isbn13,
        'nik19' => $faker->ean13,
        'tempatlahir19' => $faker->city,
        'tbt19' => $faker->dateTime,
        'jenkel19' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa19' => $faker->cityPrefix,
        'kec19' => $faker->citySuffix,
        'kab19' => $faker->streetSuffix,
        'prov19' => $faker->streetName,
        'kodepos19' => $faker->ean8,
        'cita19' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara19' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah19' => $faker->company,
        'alamatasalsekolah19' => $faker->catchPhrase,
        'nokk19' => $faker->ean8,
        'namaayah19' => $faker->name,
        'nikayah19' => $faker->ean13,
        'tahunlahirayah19' => $faker->ean8,
        'pendidikanayah19' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah19' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu19' => $faker->name,
        'nikibu19' => $faker->ean13,
        'tahunlahiribu19' => $faker->ean8,
        'pendidikanibu19' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu19' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan19' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi19' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp19' => $faker->phoneNumber ,

        //
    ];
});
