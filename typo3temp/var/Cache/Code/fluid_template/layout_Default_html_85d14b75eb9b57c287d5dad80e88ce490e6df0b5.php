<?php

class layout_Default_html_85d14b75eb9b57c287d5dad80e88ce490e6df0b5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '

			<div id="c';
$array117 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array117)]);

$output116 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
					<a id="c';
$array124 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array124)]);

$output123 .= '"></a>
				';
return $output123;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['__thenClosure'] = $renderChildrenClosure119;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output116 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['section'] = NULL;
$arguments130['partial'] = NULL;
$arguments130['delegate'] = NULL;
$arguments130['renderable'] = NULL;
$arguments130['arguments'] = array (
);
$arguments130['optional'] = false;
$arguments130['default'] = NULL;
$arguments130['contentAs'] = NULL;
$arguments130['partial'] = 'DropIn/Before/All';
$arguments130['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
				';
return $output129;
};
$arguments125 = array();
$arguments125['section'] = NULL;
$arguments125['partial'] = NULL;
$arguments125['delegate'] = NULL;
$arguments125['renderable'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['optional'] = false;
$arguments125['default'] = NULL;
$arguments125['contentAs'] = NULL;
$arguments125['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array127['0'] = 'true';

$expression128 = function($context) {return TRUE;};
$arguments125['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output116 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['section'] = NULL;
$arguments138['partial'] = NULL;
$arguments138['delegate'] = NULL;
$arguments138['renderable'] = NULL;
$arguments138['arguments'] = array (
);
$arguments138['optional'] = false;
$arguments138['default'] = NULL;
$arguments138['contentAs'] = NULL;
$arguments138['partial'] = 'Header';
$arguments138['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
				';
return $output137;
};
$arguments133 = array();
$arguments133['section'] = NULL;
$arguments133['partial'] = NULL;
$arguments133['delegate'] = NULL;
$arguments133['renderable'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['optional'] = false;
$arguments133['default'] = NULL;
$arguments133['contentAs'] = NULL;
$arguments133['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array135['0'] = 'true';

$expression136 = function($context) {return TRUE;};
$arguments133['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output116 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['section'] = NULL;
$arguments141['partial'] = NULL;
$arguments141['delegate'] = NULL;
$arguments141['renderable'] = NULL;
$arguments141['arguments'] = array (
);
$arguments141['optional'] = false;
$arguments141['default'] = NULL;
$arguments141['contentAs'] = NULL;
$arguments141['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array143['0'] = 'true';

$expression144 = function($context) {return TRUE;};
$arguments141['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output116 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['section'] = NULL;
$arguments150['partial'] = NULL;
$arguments150['delegate'] = NULL;
$arguments150['renderable'] = NULL;
$arguments150['arguments'] = array (
);
$arguments150['optional'] = false;
$arguments150['default'] = NULL;
$arguments150['contentAs'] = NULL;
$arguments150['partial'] = 'Footer/All';
$arguments150['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
				';
return $output149;
};
$arguments145 = array();
$arguments145['section'] = NULL;
$arguments145['partial'] = NULL;
$arguments145['delegate'] = NULL;
$arguments145['renderable'] = NULL;
$arguments145['arguments'] = array (
);
$arguments145['optional'] = false;
$arguments145['default'] = NULL;
$arguments145['contentAs'] = NULL;
$arguments145['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array147['0'] = 'true';

$expression148 = function($context) {return TRUE;};
$arguments145['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output116 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['section'] = NULL;
$arguments158['partial'] = NULL;
$arguments158['delegate'] = NULL;
$arguments158['renderable'] = NULL;
$arguments158['arguments'] = array (
);
$arguments158['optional'] = false;
$arguments158['default'] = NULL;
$arguments158['contentAs'] = NULL;
$arguments158['partial'] = 'DropIn/After/All';
$arguments158['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
				';
return $output157;
};
$arguments153 = array();
$arguments153['section'] = NULL;
$arguments153['partial'] = NULL;
$arguments153['delegate'] = NULL;
$arguments153['renderable'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['optional'] = false;
$arguments153['default'] = NULL;
$arguments153['contentAs'] = NULL;
$arguments153['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array155['0'] = 'true';

$expression156 = function($context) {return TRUE;};
$arguments153['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output116 .= '
			</div>

		';
return $output116;
};
$arguments114 = array();

$output113 .= '';

$output113 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '

			<a id="c';
$array164 = array (
);
$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array164)]);

$output163 .= '"></a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
				<a id="c';
$array171 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array171)]);

$output170 .= '"></a>
			';
return $output170;
};
$arguments165 = array();
$arguments165['then'] = NULL;
$arguments165['else'] = NULL;
$arguments165['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array168);

$expression169 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments165['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments165['__thenClosure'] = $renderChildrenClosure166;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output163 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
				<div class="frame-space-before-';
$array178 = array (
);
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array178)]);

$output177 .= '"></div>
			';
return $output177;
};
$arguments172 = array();
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments172['__thenClosure'] = $renderChildrenClosure173;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output163 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['section'] = NULL;
$arguments184['partial'] = NULL;
$arguments184['delegate'] = NULL;
$arguments184['renderable'] = NULL;
$arguments184['arguments'] = array (
);
$arguments184['optional'] = false;
$arguments184['default'] = NULL;
$arguments184['contentAs'] = NULL;
$arguments184['partial'] = 'DropIn/Before/All';
$arguments184['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output183 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
			';
return $output183;
};
$arguments179 = array();
$arguments179['section'] = NULL;
$arguments179['partial'] = NULL;
$arguments179['delegate'] = NULL;
$arguments179['renderable'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['optional'] = false;
$arguments179['default'] = NULL;
$arguments179['contentAs'] = NULL;
$arguments179['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array181 = array();
$array181['0'] = 'true';

$expression182 = function($context) {return TRUE;};
$arguments179['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output163 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['section'] = NULL;
$arguments192['partial'] = NULL;
$arguments192['delegate'] = NULL;
$arguments192['renderable'] = NULL;
$arguments192['arguments'] = array (
);
$arguments192['optional'] = false;
$arguments192['default'] = NULL;
$arguments192['contentAs'] = NULL;
$arguments192['partial'] = 'Header';
$arguments192['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
			';
return $output191;
};
$arguments187 = array();
$arguments187['section'] = NULL;
$arguments187['partial'] = NULL;
$arguments187['delegate'] = NULL;
$arguments187['renderable'] = NULL;
$arguments187['arguments'] = array (
);
$arguments187['optional'] = false;
$arguments187['default'] = NULL;
$arguments187['contentAs'] = NULL;
$arguments187['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array189['0'] = 'true';

$expression190 = function($context) {return TRUE;};
$arguments187['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output163 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['section'] = NULL;
$arguments195['partial'] = NULL;
$arguments195['delegate'] = NULL;
$arguments195['renderable'] = NULL;
$arguments195['arguments'] = array (
);
$arguments195['optional'] = false;
$arguments195['default'] = NULL;
$arguments195['contentAs'] = NULL;
$arguments195['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array197['0'] = 'true';

$expression198 = function($context) {return TRUE;};
$arguments195['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output163 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['section'] = NULL;
$arguments204['partial'] = NULL;
$arguments204['delegate'] = NULL;
$arguments204['renderable'] = NULL;
$arguments204['arguments'] = array (
);
$arguments204['optional'] = false;
$arguments204['default'] = NULL;
$arguments204['contentAs'] = NULL;
$arguments204['partial'] = 'Footer/All';
$arguments204['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output203 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
			';
return $output203;
};
$arguments199 = array();
$arguments199['section'] = NULL;
$arguments199['partial'] = NULL;
$arguments199['delegate'] = NULL;
$arguments199['renderable'] = NULL;
$arguments199['arguments'] = array (
);
$arguments199['optional'] = false;
$arguments199['default'] = NULL;
$arguments199['contentAs'] = NULL;
$arguments199['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array201 = array();
$array201['0'] = 'true';

$expression202 = function($context) {return TRUE;};
$arguments199['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)
					),
					$renderingContext
				);

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output163 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['section'] = NULL;
$arguments212['partial'] = NULL;
$arguments212['delegate'] = NULL;
$arguments212['renderable'] = NULL;
$arguments212['arguments'] = array (
);
$arguments212['optional'] = false;
$arguments212['default'] = NULL;
$arguments212['contentAs'] = NULL;
$arguments212['partial'] = 'DropIn/After/All';
$arguments212['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
			';
return $output211;
};
$arguments207 = array();
$arguments207['section'] = NULL;
$arguments207['partial'] = NULL;
$arguments207['delegate'] = NULL;
$arguments207['renderable'] = NULL;
$arguments207['arguments'] = array (
);
$arguments207['optional'] = false;
$arguments207['default'] = NULL;
$arguments207['contentAs'] = NULL;
$arguments207['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array209 = array();
$array209['0'] = 'true';

$expression210 = function($context) {return TRUE;};
$arguments207['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output163 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
				<div class="frame-space-after-';
$array221 = array (
);
$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array221)]);

$output220 .= '"></div>
			';
return $output220;
};
$arguments215 = array();
$arguments215['then'] = NULL;
$arguments215['else'] = NULL;
$arguments215['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array218 = array (
);$array217['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array218);

$expression219 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments215['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);
$arguments215['__thenClosure'] = $renderChildrenClosure216;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output163 .= '

		';
return $output163;
};
$arguments161 = array();
$arguments161['if'] = NULL;

$output113 .= '';

$output113 .= '
	';
return $output113;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array111);
$array110['1'] = ' != none';

$expression112 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '

			<div id="c';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array7)]);

$output6 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
					<a id="c';
$array14 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array14)]);

$output13 .= '"></a>
				';
return $output13;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['partial'] = 'DropIn/Before/All';
$arguments20['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
				';
return $output19;
};
$arguments15 = array();
$arguments15['section'] = NULL;
$arguments15['partial'] = NULL;
$arguments15['delegate'] = NULL;
$arguments15['renderable'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['optional'] = false;
$arguments15['default'] = NULL;
$arguments15['contentAs'] = NULL;
$arguments15['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array17['0'] = 'true';

$expression18 = function($context) {return TRUE;};
$arguments15['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['partial'] = 'Header';
$arguments28['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
				';
return $output27;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array25['0'] = 'true';

$expression26 = function($context) {return TRUE;};
$arguments23['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array33['0'] = 'true';

$expression34 = function($context) {return TRUE;};
$arguments31['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['partial'] = 'Footer/All';
$arguments40['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
				';
return $output39;
};
$arguments35 = array();
$arguments35['section'] = NULL;
$arguments35['partial'] = NULL;
$arguments35['delegate'] = NULL;
$arguments35['renderable'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$arguments35['default'] = NULL;
$arguments35['contentAs'] = NULL;
$arguments35['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array37['0'] = 'true';

$expression38 = function($context) {return TRUE;};
$arguments35['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['partial'] = 'DropIn/After/All';
$arguments48['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
				';
return $output47;
};
$arguments43 = array();
$arguments43['section'] = NULL;
$arguments43['partial'] = NULL;
$arguments43['delegate'] = NULL;
$arguments43['renderable'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['optional'] = false;
$arguments43['default'] = NULL;
$arguments43['contentAs'] = NULL;
$arguments43['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array45['0'] = 'true';

$expression46 = function($context) {return TRUE;};
$arguments43['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output6 .= '
			</div>

		';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '

			<a id="c';
$array52 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array52)]);

$output51 .= '"></a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
				<a id="c';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array59)]);

$output58 .= '"></a>
			';
return $output58;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array56);

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output51 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
				<div class="frame-space-before-';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array66)]);

$output65 .= '"></div>
			';
return $output65;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments60['__thenClosure'] = $renderChildrenClosure61;

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output51 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['section'] = NULL;
$arguments72['partial'] = NULL;
$arguments72['delegate'] = NULL;
$arguments72['renderable'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['optional'] = false;
$arguments72['default'] = NULL;
$arguments72['contentAs'] = NULL;
$arguments72['partial'] = 'DropIn/Before/All';
$arguments72['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
			';
return $output71;
};
$arguments67 = array();
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['renderable'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array69['0'] = 'true';

$expression70 = function($context) {return TRUE;};
$arguments67['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output51 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['section'] = NULL;
$arguments80['partial'] = NULL;
$arguments80['delegate'] = NULL;
$arguments80['renderable'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['optional'] = false;
$arguments80['default'] = NULL;
$arguments80['contentAs'] = NULL;
$arguments80['partial'] = 'Header';
$arguments80['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
			';
return $output79;
};
$arguments75 = array();
$arguments75['section'] = NULL;
$arguments75['partial'] = NULL;
$arguments75['delegate'] = NULL;
$arguments75['renderable'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['optional'] = false;
$arguments75['default'] = NULL;
$arguments75['contentAs'] = NULL;
$arguments75['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array77['0'] = 'true';

$expression78 = function($context) {return TRUE;};
$arguments75['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output51 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['section'] = NULL;
$arguments83['partial'] = NULL;
$arguments83['delegate'] = NULL;
$arguments83['renderable'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$arguments83['default'] = NULL;
$arguments83['contentAs'] = NULL;
$arguments83['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array85['0'] = 'true';

$expression86 = function($context) {return TRUE;};
$arguments83['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output51 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['section'] = NULL;
$arguments92['partial'] = NULL;
$arguments92['delegate'] = NULL;
$arguments92['renderable'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['optional'] = false;
$arguments92['default'] = NULL;
$arguments92['contentAs'] = NULL;
$arguments92['partial'] = 'Footer/All';
$arguments92['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
			';
return $output91;
};
$arguments87 = array();
$arguments87['section'] = NULL;
$arguments87['partial'] = NULL;
$arguments87['delegate'] = NULL;
$arguments87['renderable'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['optional'] = false;
$arguments87['default'] = NULL;
$arguments87['contentAs'] = NULL;
$arguments87['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array89['0'] = 'true';

$expression90 = function($context) {return TRUE;};
$arguments87['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output51 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['partial'] = 'DropIn/After/All';
$arguments100['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
			';
return $output99;
};
$arguments95 = array();
$arguments95['section'] = NULL;
$arguments95['partial'] = NULL;
$arguments95['delegate'] = NULL;
$arguments95['renderable'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['optional'] = false;
$arguments95['default'] = NULL;
$arguments95['contentAs'] = NULL;
$arguments95['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array97['0'] = 'true';

$expression98 = function($context) {return TRUE;};
$arguments95['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output51 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
				<div class="frame-space-after-';
$array109 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array109)]);

$output108 .= '"></div>
			';
return $output108;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output51 .= '

		';
return $output51;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#