<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smktkr12::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap53' => $faker->name,
        'nisn53' => $faker->isbn13,
        'nik53' => $faker->ean13,
        'tempatlahir53' => $faker->city,
        'tbt53' => $faker->dateTime,
        'jenkel53' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa53' => $faker->cityPrefix,
        'kec53' => $faker->citySuffix,
        'kab53' => $faker->streetSuffix,
        'prov53' => $faker->streetName,
        'kodepos53' => $faker->ean8,
        'cita53' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara53' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah53' => $faker->company,
        'alamatasalsekolah53' => $faker->catchPhrase,
        'nokk53' => $faker->ean8,
        'namaayah53' => $faker->name,
        'nikayah53' => $faker->ean13,
        'tahunlahirayah53' => $faker->ean8,
        'pendidikanayah53' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah53' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu53' => $faker->name,
        'nikibu53' => $faker->ean13,
        'tahunlahiribu53' => $faker->ean8,
        'pendidikanibu53' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu53' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan53' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi53' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp53' => $faker->phoneNumber ,

    ];
});
