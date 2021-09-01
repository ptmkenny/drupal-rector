<?php

namespace Drupal\Tests\rector_examples\Functional;

use Drupal\Tests\BrowserTestBase;

class AssertFieldByIdTest extends BrowserTestBase {

    public function testExample() {
        $this->assertSession()->fieldExists('edit-name');
        $this->assertSession()->fieldValueEquals('edit-name', 'Test name');
        $this->assertSession()->fieldExists('edit-description');
        $this->assertSession()->fieldValueEquals('edit-description', '');
    }

}
