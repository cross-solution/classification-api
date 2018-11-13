<?php
namespace Classify\V1\Rpc\Type;

class TypeControllerFactory
{
    public function __invoke($controllers)
    {
        return new TypeController();
    }
}
