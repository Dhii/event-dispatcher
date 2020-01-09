Event Dispatcher
==============

[![Build Status](https://travis-ci.org/Dhii/event-dispatcher-interface.svg?branch=develop)](https://travis-ci.org/Dhii/event-dispatcher-interface)

PHP 7.0 compatible event dispatcher interfaces.

## Details

This is a fork of the original [event-dispatcher][] PSR package. The aim is to make it compatible with PHP 7.0.

- Removed `object` typehint.
- Changed `iterable` typehint to `Traversable`.
- Downgraded PHP version requirement.

The releases of this package will correspond 1:1 to releases in the parent package. The API will be the same,
with the exception of being compatible with PHP 7.0 - more permissive.

Other changes include:

- PHPUnit config and tests - to ascertain that syntax is compatible.
- Travis config - to test against target PHP versions.
- Docker config - develop and test in an isolated environment.
Copy `.env.example` to `.env`, and run `docker-compose up`.
- Lockfile now committed.
- Configuration for dist building with `git archive`. Results in smaller dist packages.

[event-dispatcher]: https://github.com/php-fig/event-dispatcher/
