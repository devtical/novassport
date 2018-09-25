<?php

namespace Kristories\Novassport\Models;

use Illuminate\Database\Eloquent\Model;
use Kristories\Novassport\Models\Scopes\MyAppsScope;

class OauthClient extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'secret',
        'redirect',
        'personal_access_token',
        'password_client',
        'revoked',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new MyAppsScope());
    }
}
