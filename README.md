# Symfony Bridge for Google AppEngine

Currently very much a Work in Progress

# Installation

First, download the dependency:

```shell
composer require tiriel/appengine-bridge
```

Then, replace the `BaseKernel` class in you `src/Kernel.php` file
with the one from this bridge:

```php
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Tiriel\AppEngineBridge\Kernel\AppEngineKernel;

class Kernel extends AppEngineKernel
{
    use MicroKernelTrait;
}
```

That's it!
