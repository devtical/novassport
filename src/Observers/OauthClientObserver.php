<?php

namespace Kristories\Novassport\Observers;

use Auth;
use Kristories\Novassport\Models\OauthClient;
use Str;

class OauthClientObserver
{
    /**
     * Handle the oauth client "creating" event.
     *
     * @param  \App\Kristories\Novassport\Models\OauthClient  $client
     * @return void
     */
    public function creating(OauthClient $client)
    {
        $client->user_id = Auth::id();
        $client->secret = Str::random(40);
        $client->revoked = false;
        $client->personal_access_client = false;
        $client->password_client = false;
    }
}
