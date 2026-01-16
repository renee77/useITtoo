<?php



class Product
{
    private string $name;
    private float $price;
    // een string mag geen null bevatten maar een ?string kan dat wel
    private ?string $imageUrl;
    private ?string $weight;
    private int $orderAmount;
    private int $storageAmount;

    // in de toekomst wordt bovenstaande lijst aangevuld met $id $description $aantallenOpVoorraad en eventuele andere velden uit de database 
    // hierna worden de arrays waarmee de webshop gerenderd wordt uit de database gegenereerd.

    // de constructor wordt aangeroepen bij new Product()
    public function __construct(
        string $name,
        ?string $imageUrl,
        // de verplichte parameters die bij het aanmaken van een object meegegeven moeten worden komen eerst
        // daarna de defaults
        float $price = 1.50, // de default waarde voor nu wordt straks uit de database gehaald
        ?string $weight = '1 KG', // default wordt later uit db gehaald
        int $orderAmount = 0,
        int $storageAmount = 10, // default wordt later uit db gehaald
    ) {
        $this->name = $name; //this verwijst naar het object dat aangemaakt wordt/is. 
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->weight = $weight;
        $this->orderAmount = $orderAmount;
        $this->storageAmount = $storageAmount;
    }

    // getters and setters
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $url): void
    {
        $this->imageUrl = $url;
    }

    public function getOrderAmount(): int
    {
        return $this->orderAmount;
    }

    public function setOrderAmount(int $amount): void
    {
        $this->orderAmount = $amount;
    }

    public function getStorageAmount(): int
    {
        return $this->storageAmount;
    }

    public function setStorageAmount(int $amount): void
    {
        $this->storageAmount = $amount;
    }

    // voor nu geen setter voor $price $weight want we gebruiken een default waarde
    public function getPrice(): float
    {
        return $this->price;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }
}
