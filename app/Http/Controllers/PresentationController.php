<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Color;

class PresentationController extends Controller
{
    public function present()
    {

      $objPHPPowerPoint = new PhpPresentation();

      $reader = IOFactory::createReader('PowerPoint2007');
      $reader->load(__DIR__ . '/sample.pptx');

      dd($reader);

    }
}
