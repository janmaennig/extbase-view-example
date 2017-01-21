<?php

namespace JanMaennig\ExtbaseViewExample\View;

use TYPO3\CMS\Fluid\View\AbstractTemplateView;

/**
 * @package JanMaennig\ExtbaseViewExample\View
 */
class TwigView extends AbstractTemplateView
{
    const TWIG_TEMPLATE_FORMAT = 'html.twig';

    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * @var string
     */
    private $templateFileName = '';

    public function initializeView()
    {
        $templateReference = $this->getCurrentRenderingContext()
            ->getTemplatePaths()
            ->resolveTemplateFileForControllerAndActionAndFormat(
                $this->getRenderingContext()->getControllerName(),
                $this->getRenderingContext()->getControllerAction(),
                self::TWIG_TEMPLATE_FORMAT
            );

        $loader = new \Twig_Loader_Filesystem(
            [
                dirname($templateReference)
            ]
        );

        $this->templateFileName = basename($templateReference);

        $this->twig = new \Twig_Environment($loader);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->twig->render(
            $this->templateFileName,
            $this->baseRenderingContext->getTemplateVariableContainer()->getAll()
        );
    }
}
