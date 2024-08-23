<?php

class __Mustache_8b6844ff26444a67e756fa28802a63ed extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->sectionE90a54cf268283e3232ae62905fd3e18($context, $indent, $value);
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

    private function sectionE90a54cf268283e3232ae62905fd3e18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> partials/header}} 
<title>{{session_user.username}} - Profile</title>

<div class="flex w-full">
      {{> partials/leftBar}}

      <div id="center_column" class="flex w-1/2 justify-center">
        <div style="width: 100%; max-width: 42rem; padding: 2rem">
          <h1 class="mb-6 text-center text-3xl font-bold text-white">
            Your Posts
          </h1>
          {{!-- List of posts --}} 
          {{> partials/postList}}
        </div>
      </div>
      {{> partials/rightBar}}
      
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
                if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
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
                if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
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
