<?php

class __Mustache_b1cc5d64d6e3309c4d457d1661c742ca extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<title>';
        $value = $this->resolveValue($context->findDot('profile.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= ' - Following</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
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
        $value = $context->find('following');
        $buffer .= $this->section37cc68891e5d897d2f32ad98154bf41e($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
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
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section37cc68891e5d897d2f32ad98154bf41e(Mustache_Context $context, $indent, $value)
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
