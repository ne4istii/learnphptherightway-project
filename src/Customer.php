<?php

declare(strict_types=1);

class Customer
{
    public function __construct(private ?PaymentProfile $paymentProfile = null)
    {
    }

    public function getPaymentProfile(): ?PaymentProfile
    {
        return $this->paymentProfile;
    }
}
