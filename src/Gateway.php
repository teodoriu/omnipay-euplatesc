<?php

namespace Omnipay\Euplatesc;

use Omnipay\Common\AbstractGateway;

/**
 * Euplatesc.ro Gateway
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Euplatesc.ro';
    }

    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
            'signature' => '',
            'testMode' => false,
        );
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }

    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    public function getSignature()
    {
        return $this->getParameter('signature');
    }

    public function setSignature($value)
    {
        return $this->setParameter('signature', $value);
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Euplatesc\Message\ProAuthorizeRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Euplatesc\Message\ProPurchaseRequest', $parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Euplatesc\Message\CaptureRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Euplatesc\Message\RefundRequest', $parameters);
    }

    public function fetchTransaction(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Euplatesc\Message\FetchTransactionRequest', $parameters);
    }
}
