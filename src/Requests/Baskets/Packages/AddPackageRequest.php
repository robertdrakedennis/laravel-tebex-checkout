<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets\Packages;

use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class AddPackageRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function __construct(
        protected string $ident,
        protected object $package,
        protected string $type,
    ){}

    /**
     * Define the HTTP method
     *
     * @var Method
     */
    protected Method $method = Method::POST;

    /**
     * Define the endpoint for the request
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/baskets/'. $this->ident . '/packages';
    }

    protected function defaultBody(): array
    {
        return [
            'package' => $this->package,
            'type' => $this->type
        ];
    }
}
