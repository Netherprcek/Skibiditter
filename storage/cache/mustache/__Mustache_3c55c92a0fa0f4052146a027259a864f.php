<?php

class __Mustache_3c55c92a0fa0f4052146a027259a864f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<title>';
        $value = $this->resolveValue($context->find('img'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= ' - Profile</title>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="flex w-full">
';
        $buffer .= $indent . '  <div id="left_column" class="flex w-1/4">
';
        $value = $context->find('posts');
        $buffer .= $this->section32b4a172ad5012fbf94a079468ee176d($context, $indent, $value);
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div id="center_column" class="flex w-1/2 justify-center">
';
        $buffer .= $indent . '    <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
        $buffer .= $indent . '      <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '\'s Posts
';
        $buffer .= $indent . '      </h1>
';
        $buffer .= $indent . '      ';
        $buffer .= ' ';
        if ($partial = $this->mustache->loadPartial('partials/postList')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div
';
        $buffer .= $indent . '    id="right_column"
';
        $buffer .= $indent . '    class="flex w-1/4 justify-start border-l-2 border-gray-800 pl-4"
';
        $buffer .= $indent . '  >
';
        $buffer .= $indent . '    <h2>';
        $value = $this->resolveValue($context->findDot('session_user.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h2>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section32b4a172ad5012fbf94a079468ee176d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h2>{{username}}a</h2>
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
                
                $buffer .= $indent . '    <h2>';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= 'a</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
