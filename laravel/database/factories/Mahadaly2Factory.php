<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mahadaly2::class, function (Faker $faker) {
    return [
        
    	'user_id' => 100,
        'namalengkap72' => $faker->name,
        'nisn72' => $faker->isbn13,
        'nik72' => $faker->ean13,
        'tempatlahir72' => $faker->city,
        'tbt72' => $faker->dateTime,
        'jenkel72' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa72' => $faker->cityPrefix,
        'kec72' => $faker->citySuffix,
        'kab72' => $faker->streetSuffix,
        'prov72' => $faker->streetName,
        'kodepos72' => $faker->ean8,
        'cita72' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara72' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah72' => $faker->company,
        'alamatasalsekolah72' => $faker->catchPhrase,
        'nokk72' => $faker->ean8,
        'namaayah72' => $faker->name,
        'nikayah72' => $faker->ean13,
        'tahunlahirayah72' => $faker->ean8,
        'pendidikanayah72' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah72' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu72' => $faker->name,
        'nikibu72' => $faker->ean13,
        'tahunlahiribu72' => $faker->ean8,
        'pendidikanibu72' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu72' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan72' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi72' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp72' => $faker->phoneNumber ,


    ];
});
