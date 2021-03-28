<?php

namespace DrupalRector\Tests\Rector\Deprecation\DatetimeStorageTimezoneRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

/**
 * @coversDefaultClass \DrupalRector\Rector\Deprecation\DatetimeStorageTimezoneRector
 */
class DatetimeStorageTimezoneRectorTest extends AbstractRectorTestCase {

    /**
     * @covers ::refactor
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/fixture');
    }

    public function provideConfigFilePath(): string
    {
        // must be implemented
        return __DIR__ . '/config/configured_rule.php';
    }

}
