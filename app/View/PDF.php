<?php

namespace App\View;




use TCPDF;

/**
 *
 */
class PDF extends TCPDF
{
    public function __construct()
    {
        parent::__construct('P', 'mm', 'A4', true, 'UTF-8', false);
    }
}

