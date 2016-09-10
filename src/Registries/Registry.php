<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\Dominio\PayrollExport\Exceptions\FieldNotExistsException;
use Convenia\Dominio\PayrollExport\Exceptions\RegistryTooLongException;
use Convenia\Dominio\PayrollExport\Exceptions\RegistryTooShortException;
use Convenia\Dominio\PayrollExport\Fields\Field;
use Convenia\Dominio\PayrollExport\Fields\Validations\Validation;
use Stringy\Stringy;

/**
 * Class Base Registry.
 */
abstract class Registry
{
    /**
     * Total length.
     *
     * @var int
     */
    protected $length = 400;

    /**
     * Final string.
     *
     * @var string
     */
    protected $resultString;

    /**
     * Registry type.
     *
     * @var int
     */
    protected $type;

    /**
     * List of fields and his types.
     *
     * @var array
     */
    protected $defaultFields = [];

    /**
     * @var array
     */
    protected $values = [];

    /**
     * @var Validation
     */
    protected $validator;

    /**
     * Registry constructor.
     *
     * @param array $fields
     */
    public function __construct(array $fields = [])
    {
        $this->validator = new Validation();
        $this->validator->make($this->defaultFields);

        $this->fill();

        foreach ($fields as $field => $value) {
            if (array_key_exists($field, $this->defaultFields) === false) {
                throw new FieldNotExistsException($field);
            }

            $this->values[$field]->setValue($value);
        }

        try {
            $this->validator->validate($fields);
        } catch (\Convenia\Dominio\PayrollExport\Exceptions\RegistryTooShortException $e) {
            new RegistryTooShortException($e->getMessage().'in registry '.get_class());
        }

        $this->generate();
        $this->validateLength();
    }

    /**
     * Fill the $values array with default and required values.
     */
    protected function fill()
    {
        array_map(function($field) {

            $defaultValue = isset($this->defaultFields[$field]['defaultValue']) ?
                $this->defaultFields[$field]['defaultValue'] :
                null;

            $this->values[$field] = (new $this->defaultFields[$field]['format']($defaultValue))
                ->setPosition($this->defaultFields[$field]['position'])
                ->setLength($this->defaultFields[$field]['length']);

        }, array_keys($this->defaultFields));
    }

    /**
     * Generate the full registry string.
     *
     * @return string
     */
    protected function generate()
    {
        $this->resultString = Stringy::create('');

        /*
         * @var Field
         */
        foreach ($this->values as $valueClass) {
            $this->resultString = $this->resultString->append($valueClass->getValue());
        }

        return (string) $this->resultString;
    }

    /**
     * Validate if the generated result string matches the length.
     *
     * @throws RegistryTooLongException
     * @throws RegistryTooShortException
     *
     * @return bool
     */
    public function validateLength()
    {
        $resultLength = strlen($this->generate());

        if ($resultLength > $this->length) {
            throw new RegistryTooLongException($resultLength);
        }

        if ($resultLength < $this->length) {
            throw new RegistryTooShortException($resultLength);
        }

        return true;
    }

    /**
     * @param $fieldName
     *
     * @return Field
     */
    public function getField($fieldName)
    {
        return $this->values[$fieldName];
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->generate();
    }
}
