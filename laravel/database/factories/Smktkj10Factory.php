<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smktkj10::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap41' => $faker->name,
        'nisn41' => $faker->isbn13,
        'nik41' => $faker->ean13,
        'tempatlahir41' => $faker->city,
        'tbt41' => $faker->dateTime,
        'jenkel41' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa41' => $faker->cityPrefix,
        'kec41' => $faker->citySuffix,
        'kab41' => $faker->streetSuffix,
        'prov41' => $faker->streetName,
        'kodepos41' => $faker->ean8,
        'cita41' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara41' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah41' => $faker->company,
        'alamatasalsekolah41' => $faker->catchPhrase,
        'nokk41' => $faker->ean8,
        'namaayah41' => $faker->name,
        'nikayah41' => $faker->ean13,
        'tahunlahirayah41' => $faker->ean8,
        'pendidikanayah41' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah41' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu41' => $faker->name,
        'nikibu41' => $faker->ean13,
        'tahunlahiribu41' => $faker->ean8,
        'pendidikanibu41' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu41' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan41' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi41' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp41' => $faker->phoneNumber ,


    ];
});
