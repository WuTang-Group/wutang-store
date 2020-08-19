<?php

namespace App\Models;

use App\Enums\UserStatus;
use App\Models\Traits\HashIdHelper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable,HasRoles,HashIdHelper;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email', 'password','phone','invitation_code','avatar','password_question_id','password_answer'
    ];

    protected $appends = ['hash_id']; //hash_id显示字段

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id','password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * 一对一关联用户资料模型
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * 一对多关联地址模型
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses()
    {
        return $this->hasMany(UserAddress::class);
    }

    /**
     * 返回状态为1（激活）用户
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->whereStatus(UserStatus::Enabled);
    }

    /**
     * 一对多关联购物车商品
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shopCartItems()
    {
        return $this->hasMany(ShopCartItem::class);
    }

    /**
     * 多对多关联(参数分别为关联模型,中间表名)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favoriteProducts()
    {
        return $this->belongsToMany(Product::class,'user_favorite_products')
                ->withTimestamps()  // 中间表带时间戳
                ->orderBy('user_favorite_products.created_at','desc');  // 根据中间表的创建时间倒序排序
    }
}
