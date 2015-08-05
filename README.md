Black Standard Edition
======================

This package is a custom Symfony Edition for black projects.

__CAUTION__ The Black Standard Edition don't follow Semantic Versioning of Symfony Standard Edition since v2.5.1

1) Parameters
-------------

For better configuration, we have added some parameters for MongoDB, Monolog and default delivery email configuration in your `parameters.yml.dist`.

2) Testing Tools
----------------

[**Behat**][22], [**Mink**][23] and [**phpspec**][24] will be your BFF.

3) OH WAIT
----------

We use Symfony 3.0 directory structure since v2.5.1. See [What is the new Symfony 3 directory structure?][25] for more details.


Black Standard Edition
========================

Official README - Symfony Standard Edition
==========================================

Welcome to the Symfony Standard Edition - a fully-functional Symfony2
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

What's inside?
---------------

The Symfony Standard Edition is configured with the following defaults:

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

  * [**AsseticBundle**][12] - Adds support for Assetic, an asset processing
    library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **AcmeDemoBundle** (in dev/test env) - A demo bundle with some example
    code

  * [**JMSDiExtraBundle**][14]: JMSDiExtraBundle adds more powerful dependency injection features to Symfony2

  * [**JMSSecurityExtraBundle**][15]: This bundle enhances the Symfony2 Security Component by adding several new features.

  * [**DoctrineMongoDBBundle**][16]: Doctrine MongoDB support.

  * [**StofDoctrineExtensionsBundle**][17]: Provides integration for DoctrineExtensions for your Symfony2 Project.

  * [**SonataIntlBundle**][18] : PHP Internationalization integration (intl extension)

  * [**StfalconTinymceBundle**][19]: TinyMCE for Symfony2

  * [**FMElfinderBundle**][20]: ElFinder for Symfony2

  * [**IvoryOrderedFormBundle**][21]: Allow to order your Symfony2 form fields by adding the position option.

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/current/book/installation.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/current/book/doctrine.html
[8]:  https://symfony.com/doc/current/book/templating.html
[9]:  https://symfony.com/doc/current/book/security.html
[10]: https://symfony.com/doc/current/cookbook/email.html
[11]: https://symfony.com/doc/current/cookbook/logging/monolog.html
[12]: https://symfony.com/doc/current/cookbook/assetic/asset_management.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
[14]: http://jmsyst.com/bundles/JMSDiExtraBundle
[15]: http://jmsyst.com/bundles/JMSSecurityExtraBundle
[16]: http://docs.doctrine-project.org/projects/doctrine-mongodb-odm/en/latest/
[17]: https://github.com/stof/StofDoctrineExtensionsBundle
[18]: http://sonata-project.org/bundles/intl/master/doc/index.html
[19]: https://github.com/stfalcon/TinymceBundle
[20]: https://github.com/helios-ag/FMElfinderBundle
[21]: https://github.com/egeloen/IvoryOrderedFormBundle
[22]: http://behat.org/
[23]: http://mink.behat.org/
[24]: http://phpspec.net/
[25]: http://stackoverflow.com/questions/23993295/what-is-the-new-symfony-3-directory-structure
