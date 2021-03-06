<?php

declare(strict_types=1);

namespace Rector\Guzzle\Tests\Rector\MethodCall\MessageAsArrayRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Guzzle\Rector\MethodCall\MessageAsArrayRector;

final class MessageAsArrayRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return MessageAsArrayRector::class;
    }
}
