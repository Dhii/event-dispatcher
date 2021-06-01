<?php

declare(strict_types=1);

namespace Dhii\Events\Event;

use Psr\EventDispatcher\StoppableEventInterface;

/**
 * Temporary shadow.
 */
interface IsPropagationStoppedCapableInterface extends StoppableEventInterface
{
    /**
     * @inheritDoc
     */
    public function isPropagationStopped(): bool;
}
