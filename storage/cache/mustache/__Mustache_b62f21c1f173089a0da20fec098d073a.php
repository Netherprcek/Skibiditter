<?php

class __Mustache_b62f21c1f173089a0da20fec098d073a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->sectionF8280ac1dff9f1ea4ba2d2833963c9f7($context, $indent, $value);

        return $buffer;
    }

    private function section039325991f147e28f217596680cbde09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 
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
                
                $buffer .= $indent . '          ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8280ac1dff9f1ea4ba2d2833963c9f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<title>{{session_user.username}} - Profile</title>
{{> partials/header}} 

<div class="flex w-full">
      <div id="left_column" class="flex w-1/4"></div>

      <div id="center_column" class="flex w-1/2 justify-center">
        <div style="width: 100%; max-width: 42rem; padding: 2rem">
          <h1 class="mb-6 text-center text-3xl font-bold text-white">
            Your Posts
          </h1>
          {{#session_user}} 
          {{/session_user}} {{!-- List of posts --}} 
          {{> partials/postList}}
        </div>
      </div>
      <div id="right_column" class="flex w-1/4"></div>
      <!-- 25% width -->
    </div>
  </body>
</html>

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
                
                $buffer .= $indent . '<title>';
                $value = $this->resolveValue($context->findDot('session_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= ' - Profile</title>
';
                if ($partial = $this->mustache->loadPartial('partials/header')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="flex w-full">
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
                $buffer .= $indent . '            Your Posts
';
                $buffer .= $indent . '          </h1>
';
                $value = $context->find('session_user');
                $buffer .= $this->section039325991f147e28f217596680cbde09($context, $indent, $value);
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
                $buffer .= $indent . '      <div id="right_column" class="flex w-1/4"></div>
';
                $buffer .= $indent . '      <!-- 25% width -->
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </body>
';
                $buffer .= $indent . '</html>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
