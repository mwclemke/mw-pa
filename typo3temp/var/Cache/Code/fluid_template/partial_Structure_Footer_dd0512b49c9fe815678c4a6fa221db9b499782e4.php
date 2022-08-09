<?php

class partial_Structure_Footer_dd0512b49c9fe815678c4a6fa221db9b499782e4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
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
  'mw' => 
  array (
    0 => 'MW\\MwStarterkit\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">


                <div class="col-md-4">
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
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 10;
$arguments1['data'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
                </div>

                <div class="col-md-4">
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
$array7['colPos'] = 11;
$arguments5['data'] = $array7;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                </div>

                <div class="col-md-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['typoscriptObjectPath'] = NULL;
$arguments9['data'] = NULL;
$arguments9['currentValueKey'] = NULL;
$arguments9['table'] = '';
$arguments9['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array12);
$array11['colPos'] = 12;
$arguments9['data'] = $array11;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
                </div>

            </div>
        </div>
    </footer>
    <!-- footer close -->
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output13 = '';

$output13 .= '<?xml version="1.0" encoding="UTF-8" ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
      xmlns:f="http://xsd.helhum.io/ns/typo3/cms-fluid/master/ViewHelpers">
<head>
    <title>Header Html</title>
</head>
<body>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '

    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">


                <div class="col-md-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['data'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array19['colPos'] = 10;
$arguments17['data'] = $array19;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
                </div>

                <div class="col-md-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['typoscriptObjectPath'] = NULL;
$arguments21['data'] = NULL;
$arguments21['currentValueKey'] = NULL;
$arguments21['table'] = '';
$arguments21['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array24);
$array23['colPos'] = 11;
$arguments21['data'] = $array23;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output16 .= '
                </div>

                <div class="col-md-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['typoscriptObjectPath'] = NULL;
$arguments25['data'] = NULL;
$arguments25['currentValueKey'] = NULL;
$arguments25['table'] = '';
$arguments25['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array28);
$array27['colPos'] = 12;
$arguments25['data'] = $array27;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output16 .= '
                </div>

            </div>
        </div>
    </footer>
    <!-- footer close -->
';
return $output16;
};
$arguments14 = array();
$arguments14['name'] = NULL;
$arguments14['name'] = 'Main';

$output13 .= NULL;

$output13 .= '
</body>
</html>';

return $output13;
}


}
#