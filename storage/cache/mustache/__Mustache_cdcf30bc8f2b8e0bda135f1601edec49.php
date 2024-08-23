<?php

class __Mustache_cdcf30bc8f2b8e0bda135f1601edec49 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->section3ddad463dd6fd32ad6d4cb9cc35165d4($context, $indent, $value);
        $value = $context->find('session_user');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('login')) {
                $buffer .= $partial->renderInternal($context, $indent . ' ');
            }
        }
        $buffer .= $indent . ' </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function section3ddad463dd6fd32ad6d4cb9cc35165d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> partials/header}} 
<title>{{session_user.username}} - Profile</title>

<div class="flex w-full">
      <div id="left_column" class="flex w-1/4 justify-end border-r-2 pl-4 border-gray-800"></div>

      <div id="center_column" class="flex w-1/2 justify-center">
        <div style="width: 100%; max-width: 42rem; padding: 2rem">
          <h1 class="mb-6 text-center text-3xl font-bold text-white">
            Your Posts
          </h1>
          {{!-- List of posts --}} 
          {{> partials/postList}}
        </div>
      </div>
      <div id="right_column" class="flex w-1/4 justify-start border-l-2 pl-4 border-gray-800"><h2>{{session_user.username}} </h2></div>
      
    </div>
  

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
                
                if ($partial = $this->mustache->loadPartial('partials/header')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= $indent . '<title>';
                $value = $this->resolveValue($context->findDot('session_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= ' - Profile</title>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="flex w-full">
';
                $buffer .= $indent . '      <div id="left_column" class="flex w-1/4 justify-end border-r-2 pl-4 border-gray-800"></div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      <div id="center_column" class="flex w-1/2 justify-center">
';
                $buffer .= $indent . '        <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
                $buffer .= $indent . '          <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
                $buffer .= $indent . '            Your Posts
';
                $buffer .= $indent . '          </h1>
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
                $buffer .= $indent . '      
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
