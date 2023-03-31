<?php

namespace Shimmer\LaravelTebexCheckout\Data\Requests;

use Shimmer\LaravelTebexCheckout\Enums\PackageExpiryPeriod;
use Shimmer\LaravelTebexCheckout\Enums\PackageType;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class PackageData extends Data
{
    public function __construct(
        public string $name,
        public float $price,
        public PackageExpiryPeriod|Optional $expiry_period,
        public int|Optional $expiry_length,
        public array|Optional $metadata,
        public int|Optional $qty,
        public PackageType $type,
        public array|Optional $revenue_share,
    ){}
}
