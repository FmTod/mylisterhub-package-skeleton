<?php

namespace MyListerHub\Skeleton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MyListerHub\Skeleton\Commands\SkeletonCommand;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('skeleton')
            ->hasMigration('create_skeleton_table')
            ->hasConfigFile()
            ->hasViews();
    }
}
