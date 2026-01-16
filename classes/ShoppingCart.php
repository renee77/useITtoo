<?php
class ShoppingCart
{

    // @var OrderRow[]
    private array $orderRows = [];

    public function __construct()
    {
        // eventueel later extra init-logica
    }


    // getters and setters
    public function getOrderRows(): array
    {
        return $this->orderRows;
    }

    // methods
    public function addOrderRow(OrderRow $row): void
    {
        $this->orderRows[] = $row;
    }
}
