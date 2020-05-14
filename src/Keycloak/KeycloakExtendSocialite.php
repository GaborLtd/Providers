<?php

namespace SocialiteProviders\Keycloak;

use SocialiteProviders\Manager\SocialiteWasCalled;

class KeycloakExtendSocialite
{
    /**
     * Execute the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'keycloak',
            __NAMESPACE__.'\Provider'
        );
    }
}