<?php

namespace JanMaennig\ExtbaseViewExample\Controller;

use JanMaennig\ExtbaseViewExample\View\ExcelView;

/**
 * @package JanMaennig\ExtbaseViewExample\Controller
 */
class RecordExcelController extends RecordController
{
    protected $defaultViewObjectName = ExcelView::class;

    public function listAction()
    {
        parent::listAction();
    }
}
