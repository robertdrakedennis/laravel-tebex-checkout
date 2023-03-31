<?php

namespace Shimmer\LaravelTebexCheckout\Enums;

enum PackageType: string
{
    case Single = 'single';

    case Subscription = 'subscription';
}
