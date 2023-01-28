<?php

class FiguresCollection
{
    private array $figures = array();

    public function addFigure(iFigure $figure): void
    {
        $this->figures[] = $figure;
    }

    public function getTotalPerimeter(): float
    {
        $sum = 0;
        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }

        return $sum;
    }
}