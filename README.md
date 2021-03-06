# Base Controller

Provides the basic functionalities of a resource controller out-of-the-box.


[![Latest Stable Version](https://img.shields.io/packagist/v/phpunit/phpunit.svg?style=flat-square)](https://packagist.org/packages/phpunit/phpunit)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.3-8892BF.svg?style=flat-square)](https://php.net/)
[![CI Status](https://github.com/sebastianbergmann/phpunit/workflows/CI/badge.svg?branch=master&event=push)](https://phpunit.de/build-status.html)
[![Type Coverage](https://shepherd.dev/github/sebastianbergmann/phpunit/coverage.svg)](https://shepherd.dev/github/sebastianbergmann/phpunit)


## IMPORTANT
Please note that this package is still in the development phase and not ready to deploy.

## INSTALLATION
composer require design_crystals/base_controller

## USAGE

BACK END SETTINGS HELP

User settings can be made in the settings method of the child controller (controller that extends the base class). If settings method does not exists in the child class, you can create it manually like any other function. The settings will be loaded automatically.

    To override a setting, add the required setter to the child settings method, like below:
    public function setting()
    {
        $this->base->setModel(App\Model::class);

        return;
    }

    For permissions to work, the user model must have a "hasPermission" method, that would be used to check permission. This could be by manually creating a method or using supported permission management packages.

    /**

        * Basic settings

        */
    current model
    (make sure it is set with the "::class" added)
    $this->base->setModel(string 'App\Directory\Name(Model)::class');

    Current model's name
    Automatically gotten from the route's uri (e.g. user will be gotten from the uri 'localhost/user/methodUri [show, edit, delete, etc]')
    $this->base->setName(string 'Model');

        Current model's plural name
    Automatically set using name
    $this->base->setPluralName(string 'Models');

    Related models that should be fetched along with the model for display.
    There is none as default
    $this->base->setRelated(array (['App\Directory\Name(User)::class', 'App\Directory\Name(Model)::class']));

    Name of folder where view files are located
    Default is the plural name of the model
    $this->setViewsFolder('models');

    /**

        * This are controller methods
        * Override and add your to the list
        * This are the available settings.
        * Simply create a "setting" method in your controller and call any of the functions below
        * set general defaults here and other setting in your controller

        *
        */
    Methods that requires storing data [update, store]
    Override and add yours to the list
    $this->setStorageMethods(array (['update', 'store']));

    Methods that deletes data ['delete', 'forceDelete']
    $this->setDeleteMethods(array ([]));

    All your supported controller methods ['index', 'create', 'update', 'store', 'show', 'delete', 'forceDelete']
    $this->setAllMethods(array ([]));

    Methods that requires single models for display ['show', 'edit']
    $this->setSingleMethods(array ([]));

    Methods that requires multiple models for display ['index']
    $this->setMultipleMethods(array ([]));

    Methods that requires models for display []
    $this->setRequiresModel(array ([]));

    Methods that allowed for the model
    $this->setAllowedMethods(array ([]));

    Methods that are not allowed (Will be rejected)
    $this->setNotAllowedMethods(array ([]));

        $this->base->setModel(Model::class); // current model (could also use 'App\Model' as a string)
        $this->base->setName('Model');   // model name
        $this->base->setPluralName('Models');    // plural name
        $this->base->setRelated([Hello::class, Help::class]);  // related models (could also use 'App\Hello' as a string)

    /**

        * Validation

        */
    Form validation class
    $this->setValidator(string 'App\Directory\Name(validator)::class');
