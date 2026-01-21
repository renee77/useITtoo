<?php

class OrderRow
{
    private Product $product;
    private int $quantity;

    public function __construct(
        Product $product,
        int $quantity
    ) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    //getters and setters
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    // methodes
    public function getOrderTotal(): float
    {
        return $this->product->getPrice() * $this->quantity;
    }

    public function increaseQuantity(int $amount): void
    {
        $this->quantity += $amount;
    }
}
