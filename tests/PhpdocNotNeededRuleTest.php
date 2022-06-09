<?php

declare(strict_types=1);

namespace Sharoff45\PHPStan\Rules\Tests;

use Sharoff45\PHPStan\Rules\PhpdocNotNeededRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<PhpdocNotNeededRule>
 *
 * @internal
 */
class PhpdocNotNeededRuleTest extends RuleTestCase
{
    public function testClassConstant(): void
    {
        $this->analyse(
            [
                __DIR__.'/TestAsset/PhpdocNotNeededRule/fixture.php',
            ],
            [
                [
                    'Phpdoc has not needed comment `Class A`.',
                    7,
                ],
                [
                    'Phpdoc has not needed comment `A constructor`.',
                    19,
                ],
                [
                    'Phpdoc has not needed comment `{@inheritDoc}`.',
                    29,
                ],
                [
                    'Phpdoc has not needed comment `{@inheritdoc}`.',
                    36,
                ],
                [
                    'Phpdoc has not needed comment `Trait B`.',
                    44,
                ],
                [
                    'Phpdoc has not needed comment `Interface C`.',
                    51,
                ],
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new PhpdocNotNeededRule();
    }
}
