<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Support\Facades\DB;

test('tests run against the testing database on Postgres', function () {
    expect(DB::connection()->getDriverName())->toBe('pgsql')
        ->and(DB::connection()->getDatabaseName())->toStartWith('testing');
});

test('each test starts with a clean database', function () {
    expect(User::count())->toBe(0);

    User::factory()->create();

    expect(User::count())->toBe(1);
})->repeat(2);
