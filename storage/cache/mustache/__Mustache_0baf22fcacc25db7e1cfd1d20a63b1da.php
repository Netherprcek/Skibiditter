<?php

class __Mustache_0baf22fcacc25db7e1cfd1d20a63b1da extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<title>Home Page</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="flex w-full">
';
        $buffer .= $indent . '      <div id="left_column" class="flex w-1/4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div id="center_column" class="flex w-1/2 justify-center">
';
        $buffer .= $indent . '        <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
        $buffer .= $indent . '          <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
        $buffer .= $indent . '            Home Page
';
        $buffer .= $indent . '          </h1>
';
        $buffer .= $indent . '          ';
        $buffer .= ' ';
        $value = $context->find('session_user');
        $buffer .= $this->sectionBc7b1cc1df8748fdd808dfed762d03f4($context, $indent, $value);
        $buffer .= ' ';
        $buffer .= ' 
';
        if ($partial = $this->mustache->loadPartial('partials/postList')) {
            $buffer .= $partial->renderInternal($context, $indent . '          ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div id="right_column" class="flex w-1/4 justify-start border-l-2 pl-4 border-gray-800"><h2>';
        $value = $this->resolveValue($context->findDot('session_user.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= ' </h2></div>
';
        $buffer .= $indent . '      <!-- 25% width -->
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function sectionBc7b1cc1df8748fdd808dfed762d03f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/postForm}}
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
                if ($partial = $this->mustache->loadPartial('partials/postForm')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $buffer .= $indent . '          ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
