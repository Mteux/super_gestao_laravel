<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    //
    protected function setUp(): void
    {
        parent::setUp();

        // Rodar migrations no banco de teste
        $this->artisan('migrate:fresh', [
            '--env' => 'testing',
        ]);
    }
}
