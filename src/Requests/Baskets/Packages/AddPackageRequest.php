<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets\Packages;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class AddPackageRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function __construct(
        protected string $ident,
        protected array $package,
        protected string $type,
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::POST;

    /**
     * Add a package to a basket.
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#add-package-to-a-basket
     */
    public function resolveEndpoint(): string
    {
        return '/baskets/'.$this->ident.'/packages';
    }

    protected function defaultBody(): array
    {
        return [
            'package' => $this->package,
            'type' => $this->type,
        ];
    }
}
