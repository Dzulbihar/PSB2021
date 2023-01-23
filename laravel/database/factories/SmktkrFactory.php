<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smktkr::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap5' => $faker->name,
        'nisn5' => $faker->isbn13,
        'nik5' => $faker->ean13,
        'tempatlahir5' => $faker->city,
        'tbt5' => $faker->dateTime,
        'jenkel5' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa5' => $faker->cityPrefix,
        'kec5' => $faker->citySuffix,
        'kab5' => $faker->streetSuffix,
        'prov5' => $faker->streetName,
        'kodepos5' => $faker->ean8,
        'cita5' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara5' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah5' => $faker->company,
        'alamatasalsekolah5' => $faker->catchPhrase,
        'nokk5' => $faker->ean8,
        'namaayah5' => $faker->name,
        'nikayah5' => $faker->ean13,
        'tahunlahirayah5' => $faker->ean8,
        'pendidikanayah5' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah5' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu5' => $faker->name,
        'nikibu5' => $faker->ean13,
        'tahunlahiribu5' => $faker->ean8,
        'pendidikanibu5' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu5' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan5' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi5' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp5' => $faker->phoneNumber ,

    ];
});
