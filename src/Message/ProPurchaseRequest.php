<?php

namespace Omnipay\Euplatesc\Message;

/**
 * Euplatesc.ro Pro Purchase Request
 */
class ProPurchaseRequest extends ProAuthorizeRequest
{
    public function getData()
    {
        $data = parent::getData();
        $data['PAYMENTACTION'] = 'Sale';

        return $data;
    }
}
