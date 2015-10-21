<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 20.10.15
 * Time: 22:30
 */

namespace AQAL\Stocks\Exceptions;


class StockAlreadyExists extends StockException
{
    protected $message = 'Сток уже сущесвует';

}