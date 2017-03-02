<?php

namespace Raml\Type;

class TypeParser implements TypeParserInterface
{
    public function createTypeDefinition($type)
    {
        $typeObject = json_decode(json_encode($type));

        return new TypeDefinition($typeObject);
    }
}
