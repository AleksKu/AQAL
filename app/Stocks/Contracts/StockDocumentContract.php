<?php

namespace AQAL\Stocks\Contracts;

interface StockDocumentContract
{




    public function activate();

    public function warehouse();

    public function organization();

    public function items();

    public function codeForLinks($prefix);

    public function populateByDocument(StockDocumentContract $document);

    public function setStatusAttribute($status);

    public function getAllStatuses();

    public function isActive();
    public function isOpen();
    public function isDeactive();
    public function isClose();


}