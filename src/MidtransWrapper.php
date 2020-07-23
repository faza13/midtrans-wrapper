<?php


namespace fazaa13\MidtransWrapper;


use Midtrans\Config;
use Midtrans\CoreApi;
use Midtrans\Snap;
use Midtrans\Transaction;

class MidtransWrapper
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans_wrapper.server_key');
        Config::$clientKey = config('midtrans_wrapper.client_key');
        Config::$isSanitized = (bool) config('midtrans_wrapper.sanitize');
        Config::$is3ds = (bool) config('midtrans_wrapper.3ds');
        Config::$isProduction = (bool) config('midtrans_wrapper.production');
    }

    public function getChannel()
    {
        return config('midtrans_wrapper.channel');
    }

    public function getTokenSnap($params)
    {
        return Snap::getSnapToken($params);
    }

    public function coreApiCharge($transaction)
    {
        return CoreApi::charge($transaction);
    }

    public function getStatus($orderId)
    {
        return Transaction::status($orderId);
    }

    public function setCancel($orderId)
    {
        return Transaction::cancel($orderId);
    }
}