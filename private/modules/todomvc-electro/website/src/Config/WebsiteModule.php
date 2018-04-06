<?php
namespace TodomvcElectro\Website\Config;

use Electro\Interfaces\Http\Shared\ApplicationRouterInterface;
use Electro\Interfaces\KernelInterface;
use Electro\Interfaces\ModuleInterface;
use Electro\Kernel\Config\KernelSettings;
use Electro\Kernel\Lib\ModuleInfo;
use Electro\Navigation\Config\NavigationSettings;
use Electro\Profiles\ApiProfile;
use Electro\Profiles\WebProfile;
use Electro\ViewEngine\Config\ViewEngineSettings;

class WebsiteModule implements ModuleInterface
{
  static function getCompatibleProfiles ()
  {
    return [WebProfile::class, ApiProfile::class];
  }

  static function startUp (KernelInterface $kernel, ModuleInfo $moduleInfo)
  {
    $kernel->onConfigure (
      function (KernelSettings $app, ApplicationRouterInterface $router, NavigationSettings $navigationSettings,
                ViewEngineSettings $viewEngineSettings)
      use ($moduleInfo) {
        $app->name    = 'todomvcelectro';      // session cookie name
        $app->appName = 'TodoMVC Electro';     // default page title; also displayed on title bar (optional)
        $app->title   = '@'; // @ = page title
        $viewEngineSettings->registerViews ($moduleInfo);
        $viewEngineSettings->registerViewModelsNamespace(\TodomvcElectro\Website\ViewModels::class);
        $router->add (Routes::class);
        $navigationSettings->registerNavigation (Navigation::class);
      });
  }

}
