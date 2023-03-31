<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets\Packages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeletePackageRequest extends Request
{
    public function __construct(
        protected string $ident,
        protected int $rowId
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::DELETE;

    /**
     * Remove a row from the basket
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#remove-a-row-from-the-basket
     */
    public function resolveEndpoint(): string
    {
        return '/baskets/'.$this->ident.'/packages/'.$this->rowId;
    }
}
