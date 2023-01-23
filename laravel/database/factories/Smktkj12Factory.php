<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smktkj12::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap43' => $faker->name,
        'nisn43' => $faker->isbn13,
        'nik43' => $faker->ean13,
        'tempatlahir43' => $faker->city,
        'tbt43' => $faker->dateTime,
        'jenkel43' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa43' => $faker->cityPrefix,
        'kec43' => $faker->citySuffix,
        'kab43' => $faker->streetSuffix,
        'prov43' => $faker->streetName,
        'kodepos43' => $faker->ean8,
        'cita43' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara43' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah43' => $faker->company,
        'alamatasalsekolah43' => $faker->catchPhrase,
        'nokk43' => $faker->ean8,
        'namaayah43' => $faker->name,
        'nikayah43' => $faker->ean13,
        'tahunlahirayah43' => $faker->ean8,
        'pendidikanayah43' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah43' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu43' => $faker->name,
        'nikibu43' => $faker->ean13,
        'tahunlahiribu43' => $faker->ean8,
        'pendidikanibu43' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu43' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan43' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi43' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp43' => $faker->phoneNumber ,

    ];
});
