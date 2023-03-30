<?php

namespace Shimmer\LaravelTebexCheckout;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class TebexCheckout extends Connector
{
    use AcceptsJson;

    public function __construct(
        public string $username,
        public string $password
    ){}

    /**
     * The Base URL of the API
     *
     * @return string
     */
    public function resolveBaseUrl(): string
    {
        return 'https://checkout.tebex.io/api';
    }

    /**
     * Default headers for every request
     *
     * @return string[]
     */
    protected function defaultHeaders(): array
    {
        return [];
    }

    /**
     * Default HTTP client options
     *
     * @return string[]
     */
    protected function defaultConfig(): array
    {
        return [];
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new BasicAuthenticator(
            $this->username,
            $this->password
        );
    }
}
