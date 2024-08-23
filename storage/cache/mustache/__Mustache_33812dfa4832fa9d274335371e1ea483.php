<?php

class __Mustache_33812dfa4832fa9d274335371e1ea483 extends Mustache_Template
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
        $value = $this->resolveValue($context->findDot('profile.username'), $context);
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
        $buffer .= $indent . '      <div class="mx-8 grid grid-cols-2 gap-4">
';
        $buffer .= $indent . '        ';
        $value = $context->find('followers');
        $buffer .= $this->section8949f8c122f5f6826e2ccc18c599cf9d($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
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

    private function section8949f8c122f5f6826e2ccc18c599cf9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/userCard}}
        <div class="flex items-center">Following since: {{created_at}}</div>
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
                $buffer .= $indent . '        <div class="flex items-center">Following since: ';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
