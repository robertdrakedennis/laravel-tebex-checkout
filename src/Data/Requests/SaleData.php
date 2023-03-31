<?php

namespace Shimmer\LaravelTebexCheckout\Data\Requests;

use Shimmer\LaravelTebexCheckout\Enums\SaleDiscountType;
use Spatie\LaravelData\Data;

class SaleData extends Data
{
    public function __construct(
        public string $name,
        public SaleDiscountType $discount_type,
        public float $amount,
    ) {
    }
}
