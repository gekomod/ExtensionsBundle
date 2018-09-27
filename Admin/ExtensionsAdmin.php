<?php

namespace Gekomod\ExtensionsBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;

class ExtensionsAdmin extends AbstractAdmin {
    protected $baseRoutePattern = 'extensions';
    protected $baseRouteName = 'extensions';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clearExcept(['list']);
        $collection->add('install', 'install/{name}', [], [], [], '', ['http','https'], ['GET']);
        $collection->add('uninstall', 'uninstall/{name}', [], [], [], '', ['http','https'], ['GET']);
        $collection->add('upgrade', 'upgrade/{name}', [], [], [], '', ['http','https'], ['GET']);
        $collection->add('search', 'search/{name}', [], [], [], '', ['http','https'], ['GET']);
    }
}
