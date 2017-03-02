<?php

namespace Raml\Schema\Parser;

use JsonSchema\SchemaStorage;
use Raml\Exception\InvalidJsonException;
use Raml\Schema\Definition\TypeDefinition;
use Raml\Schema\SchemaParserAbstract;
use Raml\Schema\Definition\JsonSchemaDefinition;

class TypeParser extends SchemaParserAbstract
{

    /**
     * List of known JSON content types
     *
     * @var array
     */
    protected $compatibleContentTypes = [
        'application/json',
        'text/json'
    ];

    /**
     * Create a new JSON Schema definition from a string
     *
     * @param $type
     *
     * @throws InvalidJsonException
     *
     * @return \Raml\Schema\Definition\TypeDefinition
     */
    public function createSchemaDefinition($type)
    {
        $typeObject = json_decode(json_encode($type));

        return new TypeDefinition($typeObject);
    }
}
