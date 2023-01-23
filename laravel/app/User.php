<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
///////////////////////////////////////////////////////

    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }
////////////
    public function salaf()
    {
        return $this->hasOne(Salaf::class);
    }
////////////
    public function smp1()
    {
        return $this->hasOne(Smp1::class);
    }
    public function smp17()
    {
        return $this->hasOne(Smp17::class);
    }
    public function smp18()
    {
        return $this->hasOne(Smp18::class);
    }
    public function smp19()
    {
        return $this->hasOne(Smp19::class);
    }
////////////
    public function smp2()
    {
        return $this->hasOne(Smp2::class);
    }
    public function smp27()
    {
        return $this->hasOne(Smp27::class);
    }
    public function smp28()
    {
        return $this->hasOne(Smp28::class);
    }
    public function smp29()
    {
        return $this->hasOne(Smp29::class);
    }
////////////
    public function mts()
    {
        return $this->hasOne(Mts::class);
    }
    public function mts7()
    {
        return $this->hasOne(Mts7::class);
    }
    public function mts8()
    {
        return $this->hasOne(Mts8::class);
    }
    public function mts9()
    {
        return $this->hasOne(Mts9::class);
    }
////////////
    public function smktkj()
    {
        return $this->hasOne(Smktkj::class);
    }
    public function smktkj10()
    {
        return $this->hasOne(Smktkj10::class);
    }
    public function smktkj11()
    {
        return $this->hasOne(Smktkj11::class);
    }
    public function smktkj12()
    {
        return $this->hasOne(Smktkj12::class);
    }
////////////
    public function smktkr()
    {
        return $this->hasOne(Smktkr::class);
    }
    public function smktkr10()
    {
        return $this->hasOne(Smktkr10::class);
    }
    public function smktkr11()
    {
        return $this->hasOne(Smktkr11::class);
    }
    public function smktkr12()
    {
        return $this->hasOne(Smktkr12::class);
    }
////////////
    public function ma()
    {
        return $this->hasOne(Ma::class);
    }
    public function ma10()
    {
        return $this->hasOne(Ma10::class);
    }
    public function ma11()
    {
        return $this->hasOne(Ma11::class);
    }
    public function ma12()
    {
        return $this->hasOne(Ma12::class);
    }
////////////
    public function mahadaly()
    {
        return $this->hasOne(Mahadaly::class);
    }
    public function mahadaly1()
    {
        return $this->hasOne(Mahadaly1::class);
    }
    public function mahadaly2()
    {
        return $this->hasOne(Mahadaly2::class);
    }
    public function mahadaly3()
    {
        return $this->hasOne(Mahadaly3::class);
    }
    public function mahadaly4()
    {
        return $this->hasOne(Mahadaly4::class);
    }
}
