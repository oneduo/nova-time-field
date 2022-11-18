<?php

declare(strict_types=1);

use Oneduo\NovaTimeField\Time;

it('configure meta', function () {
    expect(Time::make('Test')->jsonSerialize())
        ->toMatchArray([
            'extraAttributes' => [
                'type' => 'time',
                'style' => 'width: auto!important',
            ],
        ]);
});
