<?php

namespace Shimmer\LaravelTebexCheckout\Data\Requests;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class BasketData extends Data
{
    public function __construct(
        public string $return_url,
        public string $complete_url,
        public array|Optional $custom,
        public string|Optional $first_name,
        public string|Optional $last_name,
        public string|Optional $email
    ){}

    public function toArrayWithFilledProps(): array
    {
        $array = $this->transform();

        return array_filter($array, function ($array) {
            return ! is_null($array);
        });
    }
}
