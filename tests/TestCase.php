<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function assertDeleted($modelObject)
    {
        $table = $modelObject->getTable();
        $data = $modelObject->getAttributes();

        return $this->assertDatabaseMissing($table, $data);
    }
}
