<?php declare(strict_types = 1);

namespace Verlanglijstjes;

/**
 * This class is a custom override of the Laravel core Application for famderuiter.com domain
 */
final class Application extends \Illuminate\Foundation\Application
{
    public function publicPath()
    {
        return realpath(__DIR__ . '/../../verlanglijstjes.famderuiter.com/');
    }
}
