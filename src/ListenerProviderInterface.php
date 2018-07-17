<?php
declare(strict_types=1);

namespace Psr\Event\Dispatcher;


interface ListenerProviderInterface
{
    /**
     * @param EventInterface $event
     *   An event for which to return the relevant listeners.
     * @return iterable[callable]
     *   An iterable (array, iterator, or generator) of callables.  Each
     *   callable MUST be type-compatible with $event.
     */
    public function getListenersForEvent(EventInterface $event) : iterable;
}