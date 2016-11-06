Black Standard Edition
========================

Welcome to the Black Standard Edition - a fully-functional Symfony2
application that you can use as the skeleton for your new applications.

__CAUTION__ The Black Standard Edition don't follow Semantic Versioning 
of Symfony Standard Edition since v2.5.1

Installation
---------------

```
$ composer create-project black-project/black-standard-edition my_project_name
```

Testing Tools
----------------

[**Behat**][22] and [**PhpSpec**][24] will be your BFF.

OH WAIT
----------

Black Standard Edition use [Puli][2] as resource locator.

### Directory Structure

As you can see, there is no `src` root folder and all your code will be in `app/src`.
This is because we are not using the directory structure of Symfony Standard Edition.

What's inside?
--------------

The Black Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations disabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions
    
  * [**PuliSymfonyBundle**][12] — an universal package system for PHP. Puli aims 
    to replace “bundles”, “plugins”, “modules” and similar specialized packages of
    different frameworks with one generic, framework independent solution.
    
  * [**AliceBundle**][14] - A Symfony bundle to manage fixtures with nelmio/alice 
    and fzaninotto/Faker.

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/3.0/book/installation.html
[2]:  http://docs.puli.io/en/latest/repository/introduction.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.0/book/doctrine.html
[8]:  https://symfony.com/doc/3.0/book/templating.html
[9]:  https://symfony.com/doc/3.0/book/security.html
[10]: https://symfony.com/doc/3.0/cookbook/email.html
[11]: https://symfony.com/doc/3.0/cookbook/logging/monolog.html
[12]: http://docs.puli.io/en/latest/extensions/symfony-bundle.html
[14]: https://github.com/hautelook/AliceBundle#alicebundle
[22]: http://behat.org/
[24]: http://phpspec.net/
