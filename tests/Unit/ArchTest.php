<?php

declare(strict_types=1);

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

arch()->preset()->php(); // @phpstan-ignore method.notFound, method.nonObject
arch()->preset()->security(); // @phpstan-ignore method.notFound, method.nonObject

arch('app code uses strict types', function (): void {
    expect('App')->toUseStrictTypes();
});

arch('Laravel debug helpers are not left in app code', function (): void {
    expect(['dd', 'ddd'])->not->toBeUsed();
});

arch('controllers do not use the query builder directly', function (): void {
    expect('App\Http\Controllers')->not->toUse([
        DB::class,
        Builder::class,
    ]);
});

arch('actions are final and expose a single handle method', function (): void {
    expect('App\Actions')->toBeFinal();
    expect('App\Actions')->toHaveMethod('handle');
    expect('App\Actions')->not->toHavePublicMethodsBesides(['__construct', 'handle']);
});
