<?php

declare(strict_types=1);

namespace Sharoff45\PHPStan\Rules\Tests\TestAsset\BoolPropertyHasPrefixIsRule;

class Foo
{
    private bool $basketIsId = true;
    private bool $isBasketId = false;
    private ?bool $basketId = null;
}
