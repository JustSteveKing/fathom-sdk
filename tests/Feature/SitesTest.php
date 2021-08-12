<?php

use Illuminate\Support\Collection;
use JustSteveKing\Fathom\Fathom;
use JustSteveKing\Fathom\ValueObject\Site;

//it(
//    'can get a list of sites from the fathom api',
//    function () {
//        expect(Fathom::sites()->get())
//            ->toBeInstanceOf(Collection::class)
//            ->each
//            ->toBeInstanceOf(Site::class);
//    }
//);

//it('can create a new site on the fathom api', function () {
//    expect(Fathom::sites()->create([
//        'name' => 'Fathom SDK Test',
//        'sharing' => 'none',
//    ]))->toBeInstanceOf(Site::class);
//});

//it('can get a specific site from the fathom api', function () {
//    expect(
//        Fathom::sites()->first(
//            id: 'SGJKEWOR',
//        )
//    )->toBeInstanceOf(Site::class);
//});

//it('can update a site using the fathom api', function () {
//    expect(
//        Fathom::sites()->update(
//            id: 'KCRETYDN',
//            attributes: ['name' => 'Fathom SDK Test - Updated'],
//        )
//    )->toBeInstanceOf(Site::class);
//});

//it('can delete a site using the fathom api', function () {
//    expect(
//        Fathom::sites()->delete(
//            id: 'KCRETYDN',
//        )
//    )->toBeTrue();
//});

//it('can wipe a sites data using the fathom api', function () {
//    expect(
//        Fathom::sites()->wipe(
//            id: 'EKVCHCMW',
//        )
//    )->toBeTrue();
//});
