<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smp1::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap1' => $faker->name,
        'nisn1' => $faker->isbn13,
        'nik1' => $faker->ean13,
        'tempatlahir1' => $faker->city,
        'tbt1' => $faker->dateTime,
        'jenkel1' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa1' => $faker->cityPrefix,
        'kec1' => $faker->citySuffix,
        'kab1' => $faker->streetSuffix,
        'prov1' => $faker->streetName,
        'kodepos1' => $faker->ean8,
        'cita1' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara1' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah1' => $faker->company,
        'alamatasalsekolah1' => $faker->catchPhrase,
        'nokk1' => $faker->ean8,
        'namaayah1' => $faker->name,
        'nikayah1' => $faker->ean13,
        'tahunlahirayah1' => $faker->ean8,
        'pendidikanayah1' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah1' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu1' => $faker->name,
        'nikibu1' => $faker->ean13,
        'tahunlahiribu1' => $faker->ean8,
        'pendidikanibu1' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu1' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan1' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi1' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp1' => $faker->phoneNumber ,


    ];
});
