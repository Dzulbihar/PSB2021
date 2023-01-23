<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Smktkj11::class, function (Faker $faker) {
    return [
        
    	'user_id' => 100,
        'namalengkap42' => $faker->name,
        'nisn42' => $faker->isbn13,
        'nik42' => $faker->ean13,
        'tempatlahir42' => $faker->city,
        'tbt42' => $faker->dateTime,
        'jenkel42' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa42' => $faker->cityPrefix,
        'kec42' => $faker->citySuffix,
        'kab42' => $faker->streetSuffix,
        'prov42' => $faker->streetName,
        'kodepos42' => $faker->ean8,
        'cita42' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara42' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah42' => $faker->company,
        'alamatasalsekolah42' => $faker->catchPhrase,
        'nokk42' => $faker->ean8,
        'namaayah42' => $faker->name,
        'nikayah42' => $faker->ean13,
        'tahunlahirayah42' => $faker->ean8,
        'pendidikanayah42' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah42' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu42' => $faker->name,
        'nikibu42' => $faker->ean13,
        'tahunlahiribu42' => $faker->ean8,
        'pendidikanibu42' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu42' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan42' => $faker->randomElement(['< Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - > 2.000.000,-/BULAN','Rp. 2.000.000 - > 3.000.000,-/BULAN','Rp. 3.000.000 - > 5.000.000,-/BULAN','Rp. 5.000.000 - > 10.000.000,-/BULAN','> Rp. 10.000.000,-/BULAN']) ,
        'prestasi42' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp42' => $faker->phoneNumber ,

    ];
});
