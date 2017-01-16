<?php

namespace JanMaennig\ExtbaseViewExample\Controller;

use JanMaennig\ExtbaseViewExample\View\PdfView;

/**
 * @package JanMaennig\ExtbaseViewExample\Controller
 */
class RecordPdfController extends RecordController
{
    protected $defaultViewObjectName = PdfView::class;

    public function singleActionAction()
    {
        parent::singleActionAction();

        $this->view->assign('settings', $this->settings);
    }
}
