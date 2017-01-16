<?php

namespace JanMaennig\ExtbaseViewExample\View;

use TYPO3\CMS\Fluid\View\TemplateView;

class PdfView extends TemplateView
{

    /**
     *
     */
    public function render()
    {

        header("Content-type:application/pdf");

        $content = parent::render();
        $mpdf = new \mPDF();
        $mpdf->WriteHTML($content);
        $mpdf->Output('test.pdf', 'D');

        return;
    }

}
