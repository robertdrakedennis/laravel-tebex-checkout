<?php

namespace Shimmer\LaravelTebexCheckout\Data\Requests;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ItemData extends Data
{
    public function __construct(
        public PackageData $package,
        public int|Optional $qty,
        public array|Optional $revenue_share,
        public SaleData|Optional $sale,
    ) {
    }
}
