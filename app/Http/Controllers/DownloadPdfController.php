<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class DownloadPdfController extends Controller
{
    /**
     * @return mixed
     */
    public function downloadVeelgesteldePdf()
    {
        $myFile = public_path("pdf/Website-FAQ.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'nicesnippets-pdf-file-'.time().'.pdf';

        return response()->download($myFile, $newName, $headers);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadoverOns()
    {
        $myFile = public_path("pdf/Website-About-us.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'nicesnippets-pdf-file-'.time().'.pdf';

        return response()->download($myFile, $newName, $headers);
    }
}
