<?php

declare(strict_types=1);

namespace Tests\Resources;

use OpenBreweryDb\OpenBreweryDb;

describe('Metadata breweries', function () {
    it('returns metadata for all breweries when no parameters provided', function () {
        // Arrange
        $client = OpenBreweryDb::client();

        // Act
        $meta = $client->breweries()->metadata();

        // Assert
        expect($meta)->not()->toBeNull()
            ->and($meta['total'])->toBe('8257')
            ->and($meta['page'])->toBe('1')
            ->and($meta['per_page'])->toBe('50');
    });

    it('returns metadata for all breweries when parameters provided', function () {
        // Arrange
        $client = OpenBreweryDb::client();

        // Act
        $meta = $client->breweries()->metadata([
            'by_type' => 'micro',
        ]);

        // Assert
        expect($meta)->not()->toBeNull()
            ->and($meta['total'])->toBe('4282')
            ->and($meta['page'])->toBe('1')
            ->and($meta['per_page'])->toBe('50');
    });
});
