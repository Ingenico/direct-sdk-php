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
class AdditionalOrderInput extends DataObject
{
    // Properties
    /**
     * @var AirlineData
     */
    private $airlineData;

    /**
     * @var LoanRecipient
     */
    private $loanRecipient;

    /**
     * @var OrderTypeInformation
     */
    private $typeInformation;

    // Methods
    /**
     * @return AirlineData
     */
    public function getAirlineData()
    {
        return $this->airlineData;
    }
    /**
     * @var AirlineData
     */
    public function setAirlineData($value)
    {
        $this->airlineData = $value;
    }

    /**
     * @return LoanRecipient
     */
    public function getLoanRecipient()
    {
        return $this->loanRecipient;
    }
    /**
     * @var LoanRecipient
     */
    public function setLoanRecipient($value)
    {
        $this->loanRecipient = $value;
    }

    /**
     * @return OrderTypeInformation
     */
    public function getTypeInformation()
    {
        return $this->typeInformation;
    }
    /**
     * @var OrderTypeInformation
     */
    public function setTypeInformation($value)
    {
        $this->typeInformation = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->airlineData !== null) {
            $object->airlineData = $this->airlineData->toObject();
        }
        if ($this->loanRecipient !== null) {
            $object->loanRecipient = $this->loanRecipient->toObject();
        }
        if ($this->typeInformation !== null) {
            $object->typeInformation = $this->typeInformation->toObject();
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
        if (property_exists($object, 'airlineData')) {
            if (!is_object($object->airlineData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->airlineData, true) . '\' is not an object');
            }
            $value = new AirlineData();
            $this->airlineData = $value->fromObject($object->airlineData);
        }
        if (property_exists($object, 'loanRecipient')) {
            if (!is_object($object->loanRecipient)) {
                throw new UnexpectedValueException('value \'' . print_r($object->loanRecipient, true) . '\' is not an object');
            }
            $value = new LoanRecipient();
            $this->loanRecipient = $value->fromObject($object->loanRecipient);
        }
        if (property_exists($object, 'typeInformation')) {
            if (!is_object($object->typeInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->typeInformation, true) . '\' is not an object');
            }
            $value = new OrderTypeInformation();
            $this->typeInformation = $value->fromObject($object->typeInformation);
        }
        return $this;
    }
}
