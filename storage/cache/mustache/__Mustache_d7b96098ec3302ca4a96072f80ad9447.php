<?php

class __Mustache_d7b96098ec3302ca4a96072f80ad9447 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->section1c5b1182acecf619a74ab1dea55739fa($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('session_user');
        if (empty($value)) {
            
            $buffer .= ' ';
            if ($partial = $this->mustache->loadPartial('login')) {
                $buffer .= $partial->renderInternal($context);
            }
            $buffer .= ' ';
        }
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
        if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/follows.js"></script>
';

        return $buffer;
    }

    private function section1c93240d0ca75eaad276b30d2020ca59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/userCard}}
        <div class="flex items-center">{{created_at}}</div>
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
                $buffer .= $indent . '        <div class="flex items-center">';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c5b1182acecf619a74ab1dea55739fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/header}}
<title>{{session_user.username}} - Profile</title>

<div class="mt-16 flex w-full">
  {{> partials/leftBar}} {{!-- List of posts --}}
  <div id="center_column" class="flex w-1/3 justify-center">
    <div style="width: 100%; max-width: 42rem">
      {{> partials/profileCard}}
      <h1 class="mb-6 text-center text-3xl font-bold text-white">
        {{pageTitle}}
      </h1>
      <div class="mx-4 grid grid-cols-2 gap-4">
        {{#following}} {{> partials/userCard}}
        <div class="flex items-center">{{created_at}}</div>
        {{/following}}
      </div>
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
                
                $buffer .= $indent . ' ';
                if ($partial = $this->mustache->loadPartial('partials/header')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $buffer .= $indent . '<title>';
                $value = $this->resolveValue($context->findDot('session_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= ' - Profile</title>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="mt-16 flex w-full">
';
                $buffer .= $indent . '  ';
                if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $buffer .= '
';
                $buffer .= $indent . '  <div id="center_column" class="flex w-1/3 justify-center">
';
                $buffer .= $indent . '    <div style="width: 100%; max-width: 42rem">
';
                if ($partial = $this->mustache->loadPartial('partials/profileCard')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $buffer .= $indent . '      <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('pageTitle'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '      </h1>
';
                $buffer .= $indent . '      <div class="mx-4 grid grid-cols-2 gap-4">
';
                $buffer .= $indent . '        ';
                $value = $context->find('following');
                $buffer .= $this->section1c93240d0ca75eaad276b30d2020ca59($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
