<?php

namespace JanMaennig\ExtbaseViewExample\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use JanMaennig\ExtbaseViewExample\Domain\Model\Record;

/**
 * @package JanMaennig\ExtbaseViewExample\Controller
 */
class RecordController extends ActionController
{
    /**
     * @var \JanMaennig\ExtbaseViewExample\Domain\Repository\RecordRepository
     * @inject
     */
    protected $recordRepository;

    public function listAction()
    {
        $records = $this->recordRepository->findAll();
        $this->view->assign('records', $records);
    }

    public function singleAction(Record $record)
    {
        $this->view->assign('record', $record);
    }
}
