<?php

namespace DKopasov\Library;

class KitchenUtensils
{

    /**
     * Метод проверяет, является ли указанная строка атрибутом кухни
    */
    public function isKitchenItem(string $item): bool
    {

        switch ($item) {
            case 'pot':
            case 'pan':
            case 'fork':
                return true;
            case 'mouse':
            default:
                return false;
        }
    }

}