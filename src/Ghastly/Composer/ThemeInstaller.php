<?php

namespace Ghastly\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ThemeInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
        return 'themes/'.substr($package->getPrettyName(), 8);
    }

    public function supports($packageType)
    {
        return 'ghastly-theme' === $packageType;
    }
}
