<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Siswa::class, function (Faker $faker) {
    return [
    	'user_id' => 100,
        'status' => $faker->randomElement(['SMP 1','SMP 2','MTs','SMK TKJ','SMK TKJ','MA','Mahad Aly']) ,
        'namalengkap' => $faker->name,
        'nisn' => $faker->isbn13,
        'nik' => $faker->ean13,
        'tempatlahir' => $faker->city,
        'tbt' => $faker->dateTime,
        'jenkel' => $faker->randomElement(['Laki-laki','Perempuan']),
        'desa' => $faker->cityPrefix,
        'kec' => $faker->citySuffix,
        'kab' => $faker->streetSuffix,
        'prov' => $faker->streetName,
        'kodepos' => $faker->ean8,
        'cita' => $faker->randomElement(['Dokter','Guru','Polisi','Pilot','Wartawan','Bos Besar','Kyai']) ,
        'jumlahsaudara' => $faker->randomElement(['1','2','3','4']) ,
        'asalsekolah' => $faker->company,
        'alamatasalsekolah' => $faker->catchPhrase,
        'nokk' => $faker->e164PhoneNumber,
        'namaayah' => $faker->name,
        'nikayah' => $faker->ean13,
        'tahunlahirayah' => $faker->postcode,
        'pendidikanayah' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanayah' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'namaibu' => $faker->name,
        'nikibu' => $faker->ean13,
        'tahunlahiribu' => $faker->postcode,
        'pendidikanibu' => $faker->randomElement(['TAMAT SD/MI','TAMAT SMP/MTS','TAMAT SMA/SMK/MA','DIPLOMA','SARJANA','PASCA SARJANA','TIDAK TAMAT SD / TIDAK SEKOLAH']) ,
        'pekerjaanibu' => $faker->randomElement(['SWASTA','PNS','PETANI','WIRASWASTA','PENSIUNAN','BURUH','TIDAK BEKERJA / DI RUMAH','TNI','POLRI','GURU / DOSEN','PEDAGANG','Alm']) ,
        'penghasilan' => $faker->randomElement(['<Rp. 1.000.000,-/BULAN','Rp. 1.000.000 - >2.000.000,-/BULAN','Rp. 2.000.000 - >3.000.000,-/BULAN','Rp. 3.000.000 - >5.000.000,-/BULAN','Rp. 5.000.000 - >10.000.000,-/BULAN','<Rp. 10.000.000,-/BULAN']) ,
        'prestasi' => $faker->randomElement(['Juara Kampung','Juara Kota','Juara Kecamatan','Juara Dunia','Juara Sekolah']) ,
        'nohp' => $faker->phoneNumber ,

        
    ];
});
