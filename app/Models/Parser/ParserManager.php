<?php


namespace App\Models\Parser;


use App\Models\Parser\Interfaces\ParserStrategyInterface;
use App\Models\Parser\Strategies\CoreStrategy;

class ParserManager
{
    private $path;
    private $extension;
    private $parseStrategy;

    public function __construct(string $path, string $extension)
    {
        $this->path = $path;
        $this->extension = $extension;

    }

    public function handle()
    {
        $red = $this->parse();
        return $red;

    }

    private function parse()
    {
        $strategy = $this->getParseStrategyByExtension($this->extension);
         $this->setParseStrategy($strategy);
         return $this->parseStrategy->parse($this->path);
    }

    private function getParseStrategyByExtension($extension):ParserStrategyInterface
    {
        $strategyName = $extension . 'Strategy';
        $strategyClass = __NAMESPACE__ . '\\Strategies\\' .ucwords($strategyName);
        throw_if(!class_exists($strategyClass), \Exception::class,
            "Class do not exist [{$strategyClass}]");
        return  new $strategyClass ;
    }

    private function setParseStrategy(ParserStrategyInterface $strategy)
    {
        $this->parseStrategy = $strategy;
    }
}
