Event Dispatcher
==============

[![Build Status](https://travis-ci.com/Dhii/event-dispatcher-interface.svg?branch=develop)](https://travis-ci.org/Dhii/event-dispatcher-interface)
[![Latest Stable Version](https://poser.pugx.org/dhii/event-dispatcher-interface/version)](https://packagist.org/packages/dhii/event-dispatcher-interface)

Enhancements to PSR-14.

## Details
This is a fork of the original [event-dispatcher][] PSR package. The aim was to make it compatible with PHP 7.0,
but now this package has evolved and is instead aimed to enhance the interfaces of [PSR-14][],
which this package is fully compatible with.

### Enhancements
The following interfaces _extend_ the existing PSR-14 spec in order to provide interop for
working with name-based events, e.g. in event models where an event is identified by its name
rather than class, such as in WordPress.

- `AddListenerCapableInterface` allows adding a listener to an event identified by name, with priority.
- `RemoveListenerCapableInterface` allows removing a listener by name and priority.

### Shadows
The interfaces that simply _shadow_ PSR-14 interfaces without changing anything are deprecated, namely:

- `EventDispatcherInterface`;
- `IsPropagationStoppedCapableInterface`;
- `ListenerProviderInterface`.

These will likely be removed in a future version, because they are redundant due to the new PHP 7.2
requirement allowing all the features of PSR-14. They are kept here in order to avoid breaking dependants that
use them.


[event-dispatcher]: https://github.com/php-fig/event-dispatcher/
[PSR-14]: https://www.php-fig.org/psr/psr-14/
[`ArrayObject`]: https://www.php.net/manual/en/class.arrayobject.php
