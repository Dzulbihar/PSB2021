<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smp2::class, function (Faker $faker) {
    return [
      
    	'user_id' => 100,
        'namalengkap2' => $faker->name,
        'nisn2' => $faker->isbn13,
        'nik2' => $faker->ean13,
        'tempatlahir2' => $faker->city,
        'tbt2' => $faker->dateTime,
        'jenkel2' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa2' => $faker->cityPrefix,
        'kec2' => $faker->citySuffix,
        'kab2' => $faker->streetSuffix,
        'prov2' => $faker->streetName,
        'kodepos2' => $faker->ean8,
        'cita2' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara2' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah2' => $faker->company,
        'alamatasalsekolah2' => $faker->catchPhrase,
        'nokk2' => $faker->ean8,
        'namaayah2' => $faker->name,
        'nikayah2' => $faker->ean13,
        'tahunlahirayah2' => $faker->ean8,
        'pendidikanayah2' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah2' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu2' => $faker->name,
        'nikibu2' => $faker->ean13,
        'tahunlahiribu2' => $faker->ean8,
        'pendidikanibu2' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu2' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan2' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi2' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp2' => $faker->phoneNumber ,

        //
    ];
});
