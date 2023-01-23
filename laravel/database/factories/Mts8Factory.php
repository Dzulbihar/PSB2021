<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mts8::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap38' => $faker->name,
        'nisn38' => $faker->isbn13,
        'nik38' => $faker->ean13,
        'tempatlahir38' => $faker->city,
        'tbt38' => $faker->dateTime,
        'jenkel38' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa38' => $faker->cityPrefix,
        'kec38' => $faker->citySuffix,
        'kab38' => $faker->streetSuffix,
        'prov38' => $faker->streetName,
        'kodepos38' => $faker->ean8,
        'cita38' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara38' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah38' => $faker->company,
        'alamatasalsekolah38' => $faker->catchPhrase,
        'nokk38' => $faker->ean8,
        'namaayah38' => $faker->name,
        'nikayah38' => $faker->ean13,
        'tahunlahirayah38' => $faker->ean8,
        'pendidikanayah38' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah38' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu38' => $faker->name,
        'nikibu38' => $faker->ean13,
        'tahunlahiribu38' => $faker->ean8,
        'pendidikanibu38' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu38' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan38' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi38' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp38' => $faker->phoneNumber ,


    ];
});
