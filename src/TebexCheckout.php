<?php

namespace Shimmer\LaravelTebexCheckout;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Shimmer\LaravelTebexCheckout\Resources\BasketResource;
use Shimmer\LaravelTebexCheckout\Resources\CheckoutResource;
use Shimmer\LaravelTebexCheckout\Resources\PackageResource;
use Shimmer\LaravelTebexCheckout\Resources\PaymentResource;
use Shimmer\LaravelTebexCheckout\Resources\RecurringPaymentResource;
use Shimmer\LaravelTebexCheckout\Resources\SaleResource;

class TebexCheckout extends Connector
{
    use AcceptsJson;

    public function __construct(
        public string $username,
        public string $password
    ) {
    }

    /**
     * The Base URL of the API
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

    public function basket(): BasketResource
    {
        return new BasketResource($this);
    }

    public function packages(): PackageResource
    {
        return new PackageResource($this);
    }

    public function sales(): SaleResource
    {
        return new SaleResource($this);
    }

    public function checkout(): CheckoutResource
    {
        return new CheckoutResource($this);
    }

    public function payments(): PaymentResource
    {
        return new PaymentResource($this);
    }

    public function recurringPayments(): RecurringPaymentResource
    {
        return new RecurringPaymentResource($this);
    }
}
