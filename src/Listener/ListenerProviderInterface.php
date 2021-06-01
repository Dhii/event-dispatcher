<?php

declare(strict_types=1);

namespace Dhii\Events\Listener;

use Psr\EventDispatcher\ListenerProviderInterface as PsrListenerProviderInterface;
use Traversable;

/**
 * Temporary shadow.
 */
interface ListenerProviderInterface extends PsrListenerProviderInterface
{
    /**
     * @inheritDoc
     *
     * @return Traversable<callable> A list of callables. Each callable MUST be type-compatible with $event.
     */
    public function getListenersForEvent(object $event): Traversable;
}
