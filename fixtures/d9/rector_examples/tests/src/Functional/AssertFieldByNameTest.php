<?php

namespace Drupal\Tests\rector_examples\Functional;

use Drupal\Tests\BrowserTestBase;

class AssertFieldByNameTest extends BrowserTestBase {

    public function testExample() {
        $this->assertFieldByName('field_name', 'expected_value');
        $this->assertFieldByName("field_name[0][value][date]", '', 'Date element found.');
        $this->assertFieldByName("field_name[0][value][time]", null, 'Time element found.');
    }

}
