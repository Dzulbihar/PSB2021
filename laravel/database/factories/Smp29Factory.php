<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smp29::class, function (Faker $faker) {
    return [
        //
    	'user_id' => 100,
        'namalengkap29' => $faker->name,
        'nisn29' => $faker->isbn13,
        'nik29' => $faker->ean13,
        'tempatlahir29' => $faker->city,
        'tbt29' => $faker->dateTime,
        'jenkel29' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa29' => $faker->cityPrefix,
        'kec29' => $faker->citySuffix,
        'kab29' => $faker->streetSuffix,
        'prov29' => $faker->streetName,
        'kodepos29' => $faker->ean8,
        'cita29' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara29' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah29' => $faker->company,
        'alamatasalsekolah29' => $faker->catchPhrase,
        'nokk29' => $faker->ean8,
        'namaayah29' => $faker->name,
        'nikayah29' => $faker->ean13,
        'tahunlahirayah29' => $faker->ean8,
        'pendidikanayah29' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah29' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu29' => $faker->name,
        'nikibu29' => $faker->ean13,
        'tahunlahiribu29' => $faker->ean8,
        'pendidikanibu29' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu29' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan29' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi29' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp29' => $faker->phoneNumber ,


    ];
});
