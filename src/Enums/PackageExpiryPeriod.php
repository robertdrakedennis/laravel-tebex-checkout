<?php

namespace Shimmer\LaravelTebexCheckout\Enums;

enum PackageExpiryPeriod: string
{
    case Day = 'day';

    case Month = 'month';

    case Year = 'year';
}
