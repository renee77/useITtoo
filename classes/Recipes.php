<?php

class Recipe {
  private string $name;
  private ?string $imageUrl;
  private array $ingredients;
  private array $instructions;

  public function __construct(
    string $name,
    ?string $imageUrl,
    array $ingredients,
    array $instructions,
  )
  {
    $this->name = $name;
    $this->imageUrl = $imageUrl;
    $this->ingredients = $ingredients;
    $this->instructions = $instructions;
  }


  // GETTERS AND SETTERS
  public function getName(): string {
    return $this->name;
  }

  public function setName(string $name): void {
    $this->name = $name;
  }

  public function getImageUrl(): ?string {
    return $this->imageUrl;
  }

  public function setImageUrl(?string $url): void {
    $this->imageUrl = $url;
  }

  public function getIngredients(): array {
    return $this->ingredients;
  }

  public function setIngredients(array $ingredients): void {
    $this->ingredients = $ingredients;
  }

  public function getInstructions(): array {
    return $this->instructions;
  }

  public function setInstructions(array $instructions): void {
    $this->instructions = $instructions;
  }

}