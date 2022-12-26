<?php
require_once 'Index.php';
class File implements MyComputer
{
    protected string $fileName;
    public function __construct(string $enteredFileName)
    {
        $this->fileName = $enteredFileName;
    }
    public function render(): string
    {

        return "$this->fileName ";
    }
    public function getCounter(): int
    {
        return 1;
    }
}
