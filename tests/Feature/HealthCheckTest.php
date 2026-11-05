<?php

declare(strict_types=1);

use function Pest\Laravel\get;

test('the health endpoint responds', function () {
    get('/up')->assertOk();
});
