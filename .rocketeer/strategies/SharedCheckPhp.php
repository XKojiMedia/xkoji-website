<?php
namespace Acme;

use Illuminate\Container\Container;
//use Rocketeer\Abstracts\Strategies\AbstractStrategy;
//use Rocketeer\Interfaces\Strategies\CheckStrategyInterface;
use Rocketeer\Strategies\Check\PhpStrategy;

class SharedCheckPhpStrategy extends PhpStrategy
{
    public function __construct(Container $app)
    {
        parent::__construct($app);
    }

    public function manager()
    {
        // TODO: Implement manager() method.
    }

    public function language()
    {
        // TODO: Implement language() method.
    }

    public function extensions()
    {
        // TODO: Implement extensions() method.
    }

    public function drivers()
    {
        // TODO: Implement drivers() method.
    }
}