<?php

class __Mustache_5aac0f60c1ccc38ee13c8dd6c9bf4e1a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="text-center text-lg">
';
        $buffer .= $indent . '  <h2 class="mb-8">';
        $value = $this->resolveValue($context->find('result'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h2>
';
        $buffer .= $indent . '  <div class="flex flex-col">
';
        $buffer .= $indent . '    <div class="grid grid-cols-2 gap-4">
';
        $buffer .= $indent . '      ';
        $value = $context->find('profile');
        $buffer .= $this->sectionF54477140d3d66ed1475cba8927bf65c($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF54477140d3d66ed1475cba8927bf65c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/userCard}} 
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('partials/userCard')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
