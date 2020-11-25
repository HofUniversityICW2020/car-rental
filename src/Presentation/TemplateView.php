<?php
namespace HofUniversityICW\CarRental\Presentation;

class TemplateView
{
    /**
     * @var string
     */
    private $rootDirectory;

    /**
     * @var \duncan3dc\Laravel\BladeInstance
     */
    private $blade;

    /**
     * @var array
     */
    private $variables = [];

    public function __construct()
    {
        // @todo Ugly, substitute with proper configuration later
        $this->rootDirectory = __DIR__ . '/../..';
        $this->blade = new \duncan3dc\Laravel\BladeInstance(
            $this->rootDirectory . '/res/views',
            $this->rootDirectory . '/var/cache'
        );
    }

    public function assignVariables(array $variables): void
    {
        $this->variables = array_merge(
            $this->variables,
            $variables
        );
    }

    public function render(string $name): string
    {
        return $this->blade->render($name, $this->variables);
    }
}
