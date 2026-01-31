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
        }

        $this->orderRows[] = $newRow;
    }

    public function removeOrderRowByIndex(int $index): void
    {
        if (!isset($this->orderRows[$index])) {
            return;
        }

        unset($this->orderRows[$index]);

        // indexes opnieuw netjes maken
        $this->orderRows = array_values($this->orderRows);
    }
}
