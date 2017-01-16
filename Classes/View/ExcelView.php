<?php

namespace JanMaennig\ExtbaseViewExample\View;

use TYPO3\CMS\Extbase\Mvc\View\AbstractView;
use JanMaennig\ExtbaseViewExample\Domain\Model\Record;

/**
 * @package JanMaennig\ExtbaseViewExample\View
 */
class ExcelView extends AbstractView
{

    /**
     * @return void
     */
    public function render()
    {
        $objPHPExcel = new \PHPExcel();

        /** @var Record $record */
        foreach ($this->variables['records'] as $sheetRow => $record) {
            foreach (
                $this->variables['settings']['excel']['columns'] as $sheetColumn => $recordProperty
            ) {
                $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue($sheetColumn . ($sheetRow + 1), $record->_getProperty($recordProperty));
            }
        }

        $objPHPExcel->getActiveSheet()->setTitle('Example');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $this->variables['settings']['excel']['fileName'] . '"');
        header('Cache-Control: max-age=0');

        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');

        $this->stopRendering();
    }

    /**
     * @return void
     */
    private function stopRendering()
    {
        exit;
    }
}
