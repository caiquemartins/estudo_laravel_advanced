<?php

namespace App\Listeners;

use App\Profile;
use App\Events\UserRegistred;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateProfile
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistred  $event
     * @return void
     */
    public function handle(UserRegistred $event)
    {
        $profile = new Profile();

        $profile->city = "Itabuna";

        $profile->about = 'About Lindao';

        $event->user->profile()->save($profile);
    }
}
