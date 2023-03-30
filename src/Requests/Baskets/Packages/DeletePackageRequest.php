<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets\Packages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeletePackageRequest extends Request
{
    public function __construct(
        protected string $ident,
        protected int $rowId
    ){}

    /**
     * Define the HTTP method
     *
     * @var Method
     */
    protected Method $method = Method::DELETE;

    /**
     * Define the endpoint for the request
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/baskets/' . $this->ident . '/packages/' . $this->rowId;
    }
}
