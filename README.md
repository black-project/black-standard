Black Standard Edition
======================

This package is a custom Symfony2 edition for black projects.

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

Welcome to the Black Standard Edition - a fully-functional Symfony2
=======
Symfony Standard Edition
========================

Welcome to the Symfony Standard Edition - a fully-functional Symfony2
application that you can use as the skeleton for your new applications.

This document contains information on how to download, install, and start
using Symfony. For a more detailed explanation, see the [Installation][1]
chapter of the Symfony Documentation.

1) Installing the Standard Edition
----------------------------------

When it comes to installing the Black Standard Edition, you have the
following options.

### Use Composer (*recommended*)

As Symfony uses [Composer][2] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new Symfony application:

    php composer.phar create-project black-project/black-standard-edition path/to/install

Composer will install Symfony and all its dependencies under the
`path/to/install` directory.

### Download an Archive File

To quickly test Symfony, you can also download an [archive][3] of the Standard
Edition and unpack it somewhere under your web server root directory.

If you downloaded an archive "without vendors", you also need to install all
the necessary dependencies. Download composer (see above) and run the
following command:

    php composer.phar install

2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `config.php` script from a browser:

    http://localhost/path-to-project/web/config.php

If you get any warnings or recommendations, fix them before moving on.

3) Getting started with Symfony
===============================

This distribution is meant to be the starting point for your Symfony
applications, but it also contains some sample code that you can learn from
and play with.

A great way to start learning Symfony is via the [Quick Tour][4], which will
take you through all the basic features of Symfony2.

Once you're feeling good, you can move onto reading the official
[Symfony2 book][5].

What's inside?
---------------

The Symfony Standard Edition is configured with the following defaults:

  * Twig is the only configured template engine;

  * Doctrine ORM/DBAL is configured;

  * Swiftmailer is configured;

  * Annotations for everything are enabled.

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

[1]:  http://symfony.com/doc/2.4/book/installation.html
[2]:  http://getcomposer.org/
[3]:  https://github.com/black-project/black-standard/archive/master.zip
[4]:  http://symfony.com/doc/2.4/quick_tour/the_big_picture.html
[5]:  http://symfony.com/doc/2.4/index.html
[6]:  http://symfony.com/doc/2.4/bundles/SensioFrameworkExtraBundle/index.html
[7]:  http://symfony.com/doc/2.4/book/doctrine.html
[8]:  http://symfony.com/doc/2.4/book/templating.html
[9]:  http://symfony.com/doc/2.4/book/security.html
[10]: http://symfony.com/doc/2.4/cookbook/email.html
[11]: http://symfony.com/doc/2.4/cookbook/logging/monolog.html
[12]: http://symfony.com/doc/2.4/cookbook/assetic/asset_management.html
[13]: http://symfony.com/doc/2.4/bundles/SensioGeneratorBundle/index.html
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
