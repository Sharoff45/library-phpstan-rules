<?php

declare(strict_types=1);

namespace Sharoff45\PHPStan\Rules\Tests;

use Sharoff45\PHPStan\Rules\AssignVariableInReturnRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<AssignVariableInReturnRule>
 *
 * @internal
 */
class AssignVariableInReturnRuleTest extends RuleTestCase
{
    public function testClassConstant(): void
    {
        $this->analyse(
            [
                __DIR__.'/TestAsset/AssignVariableInReturnRule/fixture.php',
            ],
            [
                [
                    'Return with assign: foo',
                    14,
                ],
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new AssignVariableInReturnRule();
    }
}
