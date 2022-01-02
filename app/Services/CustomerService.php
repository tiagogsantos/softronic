<?php
namespace App\Services;

use App\Models\Customer;

class CustomerService
{
    protected $customer;
    public function __construct()
    {
        $this->customer = new Customer();

    }
    public function create(array $data)
    {
        return $this->customer->create($data);
    }
}