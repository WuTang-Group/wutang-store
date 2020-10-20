<?php


namespace App\Handlers;


class DiscountHandler
{
    /**
     * @param $totalAmount
     * @param float $percentage
     * @return float|int
     */
    public static function discount($totalAmount, $percentage = 0.8)
    {
        return $totalAmount * $percentage;
    }
}
