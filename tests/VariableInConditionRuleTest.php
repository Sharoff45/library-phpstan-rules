<?php

declare(strict_types=1);

namespace Sharoff45\PHPStan\Rules\Tests;

use Sharoff45\PHPStan\Rules\VariableInConditionRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<VariableInConditionRule>
 *
 * @internal
 */
class VariableInConditionRuleTest extends RuleTestCase
{
    public function testClassConstant(): void
    {
        $this->analyse(
            [
                __DIR__.'/TestAsset/VariableInConditionRule/fixture.php',
            ],
            [
                [
                    'Assignment $var1 in condition.',
                    14,
                ],
                [
                    'Assignment $var2 in condition.',
                    18,
                ],
                [
                    'Assignment $var3 in condition.',
                    22,
                ],
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new VariableInConditionRule();
    }
}
