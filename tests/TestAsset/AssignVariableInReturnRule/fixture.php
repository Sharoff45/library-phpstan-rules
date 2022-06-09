<?php

declare(strict_types=1);

namespace Sharoff45\PHPStan\Rules\Tests\TestAsset\AssignVariableInReturnRule;

use Exception;

/**
 * @throws Exception
 */
function foo(): string
{
    return $foo = (string) random_int(0, 1);
}

/**
 * @throws Exception
 */
function bar(): string
{
    $bar = (string) random_int(0, 1);

    return $bar;
}

/**
 * @throws Exception
 */
function baz(): string
{
    return (string) random_int(0, 1);
}

function qux(): bool
{
    return 1 === 0;
}
