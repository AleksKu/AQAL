<?php

namespace AQAL\Stocks\Contracts;

interface StockDocument {



    public function activate();
    public function warehouse();
    public function organization();

    public function items();

    public  function codeForLinks($prefix);



}