# Skip logging for Missing Exceptions on CakePHP

This plugin only set `Exception.skipLog`.

Skip Exceptions is:

- MissingControllerException
- MissingActionException
- PrivateActionException

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require nojimage/skip-missing-exception-log
```

You will need to add the following line to your application's bootstrap.php file:

```
CakePlugin::load('SkipMissingExceptionLog', array('bootstrap' => true));
```

## Note

This plugin only run `debug=0`.
