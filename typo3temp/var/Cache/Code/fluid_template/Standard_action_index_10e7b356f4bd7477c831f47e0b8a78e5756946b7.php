<?php

class Standard_action_index_10e7b356f4bd7477c831f47e0b8a78e5756946b7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
    2 => NULL,
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 20;
$arguments1['data'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

        <div class="clearfix"></div>
        <div id="content" class="no-padding">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = NULL;
$arguments5['data'] = NULL;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$arguments5['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array8);
$array7['colPos'] = 0;
$arguments5['data'] = $array7;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
        </div>
    ';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output9 = '';

$output9 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
     xmlns:f="http://xsd.helhum.io/ns/typo3/cms-fluid/master/ViewHelpers">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['name'] = NULL;
$arguments10['name'] = 'Default';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output9 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['typoscriptObjectPath'] = NULL;
$arguments15['data'] = NULL;
$arguments15['currentValueKey'] = NULL;
$arguments15['table'] = '';
$arguments15['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array18);
$array17['colPos'] = 20;
$arguments15['data'] = $array17;

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '

        <div class="clearfix"></div>
        <div id="content" class="no-padding">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['typoscriptObjectPath'] = NULL;
$arguments19['data'] = NULL;
$arguments19['currentValueKey'] = NULL;
$arguments19['table'] = '';
$arguments19['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array22);
$array21['colPos'] = 0;
$arguments19['data'] = $array21;

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output14 .= '
        </div>
    ';
return $output14;
};
$arguments12 = array();
$arguments12['name'] = NULL;
$arguments12['name'] = 'Content';

$output9 .= NULL;

$output9 .= '
</div>';

return $output9;
}


}
#