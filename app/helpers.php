<?php

function getPrice($priceInDecimals) {
    return number_format(floatval($priceInDecimals)/100, 2, ',', ' ') . ' €';
}
