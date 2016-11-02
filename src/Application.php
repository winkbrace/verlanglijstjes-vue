<?php declare(strict_types = 1);

namespace Verlanglijstjes;

use Illuminate\Support\Str;

/**
 * This class is a custom override of the Laravel core Application for famderuiter.com domain
 */
final class Application extends \Illuminate\Foundation\Application
{
    public function publicPath()
    {
        if ($this->isProduction()) {
            return $this->basePath . '/../../verlanglijstjes.famderuiter.com/';
        }

        return parent::publicPath();
    }

    private function isProduction() : bool
    {
        return Str::contains(__DIR__, 'private/verlanglijstjes');
    }
}
