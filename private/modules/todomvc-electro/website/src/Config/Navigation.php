<?php

namespace TodomvcElectro\Website\Config;

use Electro\Interfaces\Navigation\NavigationInterface;
use Electro\Interfaces\Navigation\NavigationProviderInterface;

class Navigation implements NavigationProviderInterface
{
    function defineNavigation(NavigationInterface $nav)
    {
        $nav->add([
            '' => $nav
                ->link()
                ->id('home')
                ->title('TodoMVC Electro'),
            'edit/@id' => $nav
                ->link()
                ->id('edit')
                ->title('TodoMVC Electro')
        ]);
    }

}
