<?php
require_once 'Index.php';
class Directorya implements MyComputer
{
    public array $elements = [];
    public $counter;
    protected string $directoryName;
    public function __construct(string $enteredDirectoryName)
    {
        $this->directoryName = $enteredDirectoryName;
    }
    public function render(): string
    {
        $directory = $this->directoryName . "/";
        foreach ($this->elements as $element) {
            $directory .= $element->render();
        }
        $directory .= "/";
        return $directory;
    }
    public function addElement(MyComputer $element)
    {
        if (!($element instanceof Directory)) {

            $this->elements[] = $element;
        }
    }
    public function getCounter(): int
    {
        $counter = 0;
        foreach ($this->elements as $element) {
            $counter = $element->getCounter() + $counter;
        }
        return $counter;
    }
}
