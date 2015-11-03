<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 21.10.15
 * Time: 16:13
 */

namespace AQAL\Stocks\Contracts;


interface StockDocumentItem
{
    public function product();

    public function document();

    public function populateByDocumentItem(StockDocumentItem $documentItem);
}