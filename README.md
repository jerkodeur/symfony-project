# symfony-project
Creation of Symfony's Framework by following the official tutorial

The aim of this project is to recreate the controller part of the Symfony framework thanks to the tutorial present on the official site.
This in order to better understand how a Framework works, and to discover what is behind the cover, which will then allow me to better understand and master Symfony.

[Symfony tutorial (official page)](https://symfony.com/doc/current/create_framework/index.html)
[View project documentation (fr)](https://github.com/jerkodeur/symfony-project/wiki)

### Why create your own framework ?
- To learn more about the low-level architecture of modern web frameworks in general and the internal components of the full-stack Symfony framework in particular
- To create a framework adapted to very specific needs
- Experiment with the creation of a framework for fun
- Refactoring an old / existing application that requires a good dose of recent good web development practices;

### Features
- Initialize configuration file _composer.json_ | [View documentation](https://getcomposer.org/doc/03-cli.md#init)
- Performing unit tests with phpunit
- [Using http-foundation to handle requests more easily](https://github.com/jerkodeur/symfony-project/wiki/Protocole-HTTP#utilisation-du-composant-symfony-httpfoundation)
- [Implement 'front controller' design pattern](https://github.com/jerkodeur/symfony-project/wiki/Front-Controller)
- [Manage the routing of our framework](https://github.com/jerkodeur/symfony-project/wiki/Routing)

### Security
- Protect data from XSS attacks with htmlspecialchars.

### Bundles
- __PHPUnit__ -  `composer require phpunit/phpunit --dev` - Perform tests
- __http-foundation__ -  `composer require symfony/http-foundation` - Replaces default PHP global variables and functions with an object oriented layer
- __Routing__ - `composer require symfony/routing` - Handle the routing of the framework

