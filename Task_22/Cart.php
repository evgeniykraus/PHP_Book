<?php

class Cart
{
    private array $products;

    public function add(object $product): void
    {
        $this->products[] = $product;
    }

    public function remove(string $name): void
    {
        $this->products = array_filter($this->products, function ($product) use ($name) {
            return $product->name !== $name;
        });
    }

    public function getTotalCost(): float
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->price;
        }

        return $sum;
    }

    public function getTotalQuantity(): int
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->quantity;
        }

        return $sum;
    }

    public function getAvgPrice(): float
    {
        return $this->getTotalCost() / $this->getTotalQuantity();
    }
}