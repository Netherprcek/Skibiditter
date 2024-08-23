<?php

class __Mustache_44cb598e9afdabf6b1bb0d1ab50eb7ec extends Mustache_Template
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
        $buffer .= $this->section938a106b8bac6522a55d631e08247b0b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section938a106b8bac6522a55d631e08247b0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/userCard}} 
      <div class="flex items-center h-full">
      <div class="button-wrapper text-sm mx-2 flex items-center h-full">
      {{> partials/followButton}}
    </div>
      </div>
    </div>';
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
                $buffer .= $indent . '      <div class="flex items-center h-full">
';
                $buffer .= $indent . '      <div class="button-wrapper text-sm mx-2 flex items-center h-full">
';
                if ($partial = $this->mustache->loadPartial('partials/followButton')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
