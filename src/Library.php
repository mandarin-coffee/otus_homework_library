<?php

namespace DKopasov\Library;

class Library
{

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