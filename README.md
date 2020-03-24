Event Dispatcher
==============

[![Build Status](https://travis-ci.com/Dhii/event-dispatcher-interface.svg?branch=develop)](https://travis-ci.org/Dhii/event-dispatcher-interface)

PHP 7.0 compatible event dispatcher interfaces.

## Details

This is a fork of the original [event-dispatcher][] PSR package. The aim is to make it compatible with PHP 7.0.

- Removed `object` typehint.
- Changed `iterable` typehint to `Traversable`.
- Renamed `StoppableEventInterface` to `IsPropagationStoppedCapableInterface`.
- Downgraded PHP version requirement to PHP 7.2.

The releases of this package will correspond 1:1 to releases in the parent package. The API will be the same,
with the exception of being compatible with PHP 7.0 - more permissive.

Other changes include:

- PHPUnit config and tests - to ascertain that syntax is compatible.
- Travis config - to test against target PHP versions.
- Docker config - develop and test in an isolated environment.
Copy `.env.example` to `.env`, and run `docker-compose up`.
- Lockfile now committed.
- Configuration for dist building with `git archive`. Results in smaller dist packages.

## Porting
### Dhii to PSR-14
The most common and generally intended course is that implementations of this standard will want to
make themselves truly compatible with [PSR-14][] by implementing the FIG interfaces. This should be a very
straight-forward process, as the interfaces in this package are designed to be fully compatible with
PSR-14 interfaces. Therefore, all one would have to do is to make their dispatcher, listener, and
stoppable event implementations _additionally_ implement their counterparts from the PSR-14 standrd.

### PSR-14 to Dhii
A less common direction would be to make implementations comply with the Dhii standard. If the reason
is simply to support the standard, then the solution is very similar to the one above:
simply make your implementations additionally implement Dhii interfaces. However, if the reason is
to support earlier PHP versions (PSR-14 requires PHP >= 7.2), one would have to make a few additional
changes to their code. Those changes are to the types accepted amd returned by your implementations.
They can be found in the beginning of the _Details_ section above.

The reason is that, while `Traversable` is a subtype of `iterable`, `array` is not a subtype of
`Traversable`. Therefore, if your `ListenerProviderInterface` implementation returns arrays
(which is valid with PSR-14), it must start returning `Traversable` instances instead. The simplest
way to do this is by wrapping the array into an [`ArrayObject`][].

For `EventDispatcherInterface` implementations, all that needs to be done is the removal of the
`object` type-hint from the signature of `dispatch()`. It would therefore become `mixed`, and
thus would allow it to accept an object, while being compatible with earlier PHP versions.

For the `StoppableEventInterface` implementations, they need to declare implementation of
`IsPropagationStoppedCapableInterface`, as this is a more correct name. The re-name was primarily
to avoid conflict with an actual `StoppableEventInterface`, which is a specialization of an actual `EventInterface`.


[event-dispatcher]: https://github.com/php-fig/event-dispatcher/
[PSR-14]: https://www.php-fig.org/psr/psr-14/
[`ArrayObject`]: https://www.php.net/manual/en/class.arrayobject.php
