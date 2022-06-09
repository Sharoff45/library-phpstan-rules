<?php

declare(strict_types=1);

namespace Sharoff45\PHPStan\Rules\Tests\TestAsset\ConformityNullableVariableAndMethodsRule;

class Foo
{
    /**
     * @var int
     */
    private $basketId = null;

    public function getBasketId(): ?int
    {
        return $this->basketId;
    }

    public function setBasketId(?int $basketId): self
    {
        $this->basketId = $basketId;
        return $this;
    }
}
