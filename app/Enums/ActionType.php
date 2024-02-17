<?php

namespace App\Enums;

enum ActionType: int{
    case dms = 0;
    case Favorite = 1;
    case Follow = 2;
    case Order = 3;
    case Shipped = 4;
    case Review = 5;
    case Restocked = 6;
    case Information = 7;

    private static function string($value): string
    {
        return match($value){
            self::dms, self::dms->value => 'dms',
            self::Favorite, self::Favorite->value => 'favorite',
            self::Follow, self::Follow->value => 'follow',
            self::Order, self::Order->value => 'order',
            self::Shipped, self::Shipped->value => 'shipped',
            self::Review, self::Review->value => 'review',
            self::Restocked, self::Restocked->value => 'restocked',
            self::Information, self::Information->value => 'information',
        };
    }

    public static function label(): string
    {
        return self::string($this);
    }

    public static function search($int): string
    {
        return self::string($int);
    }
}