<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mahadaly4::class, function (Faker $faker) {
    return [
        
    	'user_id' => 100,
        'namalengkap74' => $faker->name,
        'nisn74' => $faker->isbn13,
        'nik74' => $faker->ean13,
        'tempatlahir74' => $faker->city,
        'tbt74' => $faker->dateTime,
        'jenkel74' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa74' => $faker->cityPrefix,
        'kec74' => $faker->citySuffix,
        'kab74' => $faker->streetSuffix,
        'prov74' => $faker->streetName,
        'kodepos74' => $faker->ean8,
        'cita74' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara74' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah74' => $faker->company,
        'alamatasalsekolah74' => $faker->catchPhrase,
        'nokk74' => $faker->ean8,
        'namaayah74' => $faker->name,
        'nikayah74' => $faker->ean13,
        'tahunlahirayah74' => $faker->ean8,
        'pendidikanayah74' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah74' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu74' => $faker->name,
        'nikibu74' => $faker->ean13,
        'tahunlahiribu74' => $faker->ean8,
        'pendidikanibu74' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu74' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan74' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi74' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp74' => $faker->phoneNumber ,


    ];
});
