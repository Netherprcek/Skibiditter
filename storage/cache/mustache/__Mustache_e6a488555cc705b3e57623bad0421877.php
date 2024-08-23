<?php

class __Mustache_e6a488555cc705b3e57623bad0421877 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="text-center text-lg">
';
        $buffer .= $indent . '  <h2>Recommended Users</h2>
';
        $buffer .= $indent . '  <div class="flex flex-col">
';
        $buffer .= $indent . '    <div class="flex flex-row">
';
        $value = $context->find('recommendedUsers');
        $buffer .= $this->section60a5817e6f658e24de35c3110dc25cb6($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section60a5817e6f658e24de35c3110dc25cb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> partials/userCard}}
      <p>Username</p>
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
                
                if ($partial = $this->mustache->loadPartial('partials/userCard')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $buffer .= $indent . '      <p>Username</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
