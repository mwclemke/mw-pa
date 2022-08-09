<?php

class partial_Grids_3_Columns_33_33_33_Full_Screen_205c43acd74e7a33742ef2c31a9fe982ca63455f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
}

/**
 * section column
 */
public function section_aa60230ab00282b5a1f3f1993b2d1c503e7d15a5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <div style="background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['src'] = NULL;
$arguments1['treatIdAsReference'] = false;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['absolute'] = false;
$array3 = array (
);$arguments1['image'] = $renderingContext->getVariableProvider()->getByPath('background', $array3);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '\'); background-size: cover"
         class="box-one-third light-text">
        <div class="inner wow" data-wow-delay="0s">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output0 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output0 .= '
        </div>
    </div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output7 = '';

$output7 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['section'] = 'column';
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['content'] = $renderingContext->getVariableProvider()->getByPath('data.tx_gridelements_view_column_100', $array11);
$array12 = array (
);$array10['background'] = $renderingContext->getVariableProvider()->getByPath('assets.0', $array12);
$arguments8['arguments'] = $array10;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['section'] = 'column';
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['content'] = $renderingContext->getVariableProvider()->getByPath('data.tx_gridelements_view_column_120', $array16);
$array17 = array (
);$array15['background'] = $renderingContext->getVariableProvider()->getByPath('assets.1', $array17);
$arguments13['arguments'] = $array15;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output7 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['section'] = 'column';
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['content'] = $renderingContext->getVariableProvider()->getByPath('data.tx_gridelements_view_column_110', $array21);
$array22 = array (
);$array20['background'] = $renderingContext->getVariableProvider()->getByPath('assets.2', $array22);
$arguments18['arguments'] = $array20;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output7 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
    <div style="background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['src'] = NULL;
$arguments26['treatIdAsReference'] = false;
$arguments26['image'] = NULL;
$arguments26['crop'] = NULL;
$arguments26['cropVariant'] = 'default';
$arguments26['width'] = NULL;
$arguments26['height'] = NULL;
$arguments26['minWidth'] = NULL;
$arguments26['minHeight'] = NULL;
$arguments26['maxWidth'] = NULL;
$arguments26['maxHeight'] = NULL;
$arguments26['absolute'] = false;
$array28 = array (
);$arguments26['image'] = $renderingContext->getVariableProvider()->getByPath('background', $array28);

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= '\'); background-size: cover"
         class="box-one-third light-text">
        <div class="inner wow" data-wow-delay="0s">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array31);
};
$arguments29 = array();
$arguments29['value'] = NULL;

$output25 .= isset($arguments29['value']) ? $arguments29['value'] : $renderChildrenClosure30();

$output25 .= '
        </div>
    </div>
';
return $output25;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['name'] = 'column';

$output7 .= NULL;

$output7 .= '

';

return $output7;
}


}
#