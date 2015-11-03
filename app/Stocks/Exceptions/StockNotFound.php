<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 21.10.15
 * Time: 13:52
 */

namespace AQAL\Stocks\Exceptions;


class StockNotFound extends StockException
{
    protected $message = 'Сток не найден';
}