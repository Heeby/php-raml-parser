<?php
declare(strict_types=1);

namespace Raml\Validator;

interface DefinitionInterface
{
    /**
     * @param mixed $value
     *
     * @throws \Exception
     *
     * @return boolean
     */
    public function validate($value);
}
