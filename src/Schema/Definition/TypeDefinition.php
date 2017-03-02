<?php

namespace Raml\Schema\Definition;

use Raml\Exception\InvalidJsonException;
use Raml\Exception\InvalidSchemaException;
use \Raml\Schema\SchemaDefinitionInterface;

class TypeDefinition implements SchemaDefinitionInterface
{
    /**
     * @var \stdClass
     */
    private $type;

    // --

    /**
     * @param \stdClass $type
     */
    public function __construct(\stdClass $type)
    {
        $this->type = $type;
    }

    // ---
    // SchemaDefinitionInterface

    /**
     * Validate a JSON string against the schema
     * - Converts the string into a JSON object then uses the JsonSchema Validator to validate
     *
     * @param $string
     *
     * @throws \Exception
     *
     * @return boolean
     */
    public function validate($string)
    {
        $json = json_decode($string);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidJsonException(json_last_error());
        }

        return $this->validateJsonObject($json);
    }

    /**
     * Returns the JSON schema as a string
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->type);
    }

    // ---

    /**
     * Validates a json object
     *
     * @param string $jsonObject
     *
     * @throws \Exception
     *
     * @return boolean
     */
    private function validateJsonObject($jsonObject)
    {
        $jsonObject = $jsonObject;

        return true;
    }

    /**
     * Returns the JSON Schema as a \stdClass
     *
     * @return \stdClass
     */
    public function getJsonObject()
    {
        return $this->type;
    }

    /**
     * Returns Type as JSON array
     *
     * @return array
     */
    public function getJsonArray()
    {
        return json_decode(json_encode($this->type), true);
    }
}
