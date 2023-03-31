<?php

namespace Shimmer\LaravelTebexCheckout\Enums;

enum SaleDiscountType: string
{
    case Percentage = 'percentage';

    case Amount = 'amount';

    case basket = 'basket';
}
