<?php

declare(strict_types=1);

namespace Dhii\Events\Listener;

/**
 * Something that can unregister an event listener.
 */
interface RemoveListenerCapableInterface
{
    /**
     * Unregisters an event listener from an event.
     *
     * @param string   $name     The event name.
     * @param callable $listener The listener to unregister.
     * @param int      $priority The priority of the listener.
     */
    public function removeListener(string $name, callable $listener, int $priority): void;
}
