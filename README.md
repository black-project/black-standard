Black Standard Edition
======================

This package is a custom Symfony Edition for black projects.

__CAUTION__ The Black Standard Edition don't follow Semantic Versioning of Symfony Standard Edition since v2.5.1

Black Standard Edition
========================

Welcome to the Black Standard Edition - a fully-functional Symfony2
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

Parameters
-------------

For better configuration, we have added some parameters for Monolog and default delivery email configuration in your `parameters.yml.dist`.

Testing Tools
----------------

[**Behat**][22] and [**PhpSpec**][24] will be your BFF.

OH WAIT
----------

We use Symfony 3.0 directory structure since v2.5.1. 
See [What is the new Symfony3 directory structure?][25] for more details.

Black Standard Edition use [Puli][2] as resource locator.

What's inside?
---------------

The Black Standard Edition is configured with the following defaults:

  * Twig is the only configured template engine;

  * Doctrine ORM/DBAL is configured;

  * Swiftmailer;

  * Annotations enabled for everything.

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
    
  * [**PuliSymfonyBundle**][12] — a universal package system for PHP. Puli aims 
    to replace “bundles”, “plugins”, “modules” and similar specialized packages of
    different frameworks with one generic, framework independent solution.

All libraries and bundles included in the Black Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/current/book/installation.html
[2]: http://docs.puli.io/en/latest/repository/introduction.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/current/book/doctrine.html
[8]:  https://symfony.com/doc/current/book/templating.html
[9]:  https://symfony.com/doc/current/book/security.html
[10]: https://symfony.com/doc/current/cookbook/email.html
[11]: https://symfony.com/doc/current/cookbook/logging/monolog.html
[12]: http://docs.puli.io/en/latest/extensions/symfony-bundle.html
[22]: http://behat.org/
[24]: http://phpspec.net/
[25]: http://stackoverflow.com/questions/23993295/what-is-the-new-symfony-3-directory-structure
