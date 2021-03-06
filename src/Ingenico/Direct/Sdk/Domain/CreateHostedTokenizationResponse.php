<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class CreateHostedTokenizationResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $hostedTokenizationId;

    /**
     * @var string[]
     */
    private $invalidTokens;

    /**
     * @var string
     */
    private $partialRedirectUrl;

    // Methods
    /**
     * @return string
     */
    public function getHostedTokenizationId()
    {
        return $this->hostedTokenizationId;
    }
    /**
     * @var string
     */
    public function setHostedTokenizationId($value)
    {
        $this->hostedTokenizationId = $value;
    }

    /**
     * @return string[]
     */
    public function getInvalidTokens()
    {
        return $this->invalidTokens;
    }
    /**
     * @var string[]
     */
    public function setInvalidTokens($value)
    {
        $this->invalidTokens = $value;
    }

    /**
     * @return string
     */
    public function getPartialRedirectUrl()
    {
        return $this->partialRedirectUrl;
    }
    /**
     * @var string
     */
    public function setPartialRedirectUrl($value)
    {
        $this->partialRedirectUrl = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->hostedTokenizationId !== null) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
        }
        if ($this->invalidTokens !== null) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if ($element !== null) {
                    $object->invalidTokens[] = $element;
                }
            }
        }
        if ($this->partialRedirectUrl !== null) {
            $object->partialRedirectUrl = $this->partialRedirectUrl;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'hostedTokenizationId')) {
            $this->hostedTokenizationId = $object->hostedTokenizationId;
        }
        if (property_exists($object, 'invalidTokens')) {
            if (!is_array($object->invalidTokens) && !is_object($object->invalidTokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->invalidTokens, true) . '\' is not an array or object');
            }
            $this->invalidTokens = [];
            foreach ($object->invalidTokens as $element) {
                $this->invalidTokens[] = $element;
            }
        }
        if (property_exists($object, 'partialRedirectUrl')) {
            $this->partialRedirectUrl = $object->partialRedirectUrl;
        }
        return $this;
    }
}
