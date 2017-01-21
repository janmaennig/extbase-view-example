<?php

namespace JanMaennig\ExtbaseViewExample\Controller;

use JanMaennig\ExtbaseViewExample\Domain\Model\Record;
use JanMaennig\ExtbaseViewExample\View\TwigView;

class RecordTwigController extends RecordController
{
    protected $defaultViewObjectName = TwigView::class;

    public function singleAction(Record $record)
    {
        parent::singleAction($record);

        $this->view->assign('test', 'hallo welt');
    }
}
