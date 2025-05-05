<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

class Generatepdf
{
    public function generate($html, $filename = "", $stream = true, $paper = 'A4', $orientation = "portrait")
    {
        define('DOMPDF_ENABLE_AUTOLOAD', false);

        $dompdf = new DOMPDF();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();

        if ($stream) {
            $dompdf->stream($filename, [
                'Attachment' => 0
            ]);
        } else {
            return $dompdf->output();
        }
    }

    public function save($html, $filename="", $paper = 'A4', $orientation = "portrait")
    {
        define('DOMPDF_ENABLE_AUTOLOAD', false);

        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $output = $dompdf->output();

        file_put_contents($_SERVER["DOCUMENT_ROOT"] . '/pdf/assets/pdf/' . $filename, $output);
    }
}
