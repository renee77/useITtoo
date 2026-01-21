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
    public function addOrderRow(OrderRow $newRow): void
    {
        // save name for check if product is already in orderRows --> nu met naam straks met ID vd db
        $productName = $newRow->getProduct()->getName();

        // Does product already exists in orderRows
        foreach ($this->orderRows as $existingRow) {
            if ($existingRow->getProduct()->getName() === $productName) {
                // quantity verhogen
                $existingRow->increaseQuantity($newRow->getQuantity());
                return;
            }

            // add new-product row
            $this->orderRows[] = $newRow;
        }

        $this->orderRows[] = $newRow;
    }
}
