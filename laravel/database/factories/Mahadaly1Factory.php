<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mahadaly1::class, function (Faker $faker) {
    return [
   
    	'user_id' => 100,
        'namalengkap71' => $faker->name,
        'nisn71' => $faker->isbn13,
        'nik71' => $faker->ean13,
        'tempatlahir71' => $faker->city,
        'tbt71' => $faker->dateTime,
        'jenkel71' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa71' => $faker->cityPrefix,
        'kec71' => $faker->citySuffix,
        'kab71' => $faker->streetSuffix,
        'prov71' => $faker->streetName,
        'kodepos71' => $faker->ean8,
        'cita71' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara71' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah71' => $faker->company,
        'alamatasalsekolah71' => $faker->catchPhrase,
        'nokk71' => $faker->ean8,
        'namaayah71' => $faker->name,
        'nikayah71' => $faker->ean13,
        'tahunlahirayah71' => $faker->ean8,
        'pendidikanayah71' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah71' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu71' => $faker->name,
        'nikibu71' => $faker->ean13,
        'tahunlahiribu71' => $faker->ean8,
        'pendidikanibu71' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu71' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan71' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi71' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp71' => $faker->phoneNumber ,


    ];
});
