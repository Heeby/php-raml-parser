<?php

namespace Raml\Type;

interface TypeParserInterface
{
    /**
     * @param string $type
     *
     * @return TypeDefinitionInterface
     */
    public function createTypeDefinition($type);
}
