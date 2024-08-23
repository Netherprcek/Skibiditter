<?php

class __Mustache_b1997def0f013160d9148d8f83103d33 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  id="right_column"
';
        $buffer .= $indent . '  class="sticky top-16 flex h-[calc(100vh-4rem)] w-1/3 flex-col overflow-y-auto border-l-2 border-gray-800 pl-4"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <div class="mt-8">
';
        $buffer .= $indent . '    <!-- Added wrapper div with top margin -->
';
        $buffer .= $indent . '    <h2 class="mb-2">To-do list</h2>
';
        $buffer .= $indent . '    <ul class="list-disc pl-5">
';
        $value = $context->find('notifications');
        $buffer .= $this->section20b5a53a605f41ad0bb920cb0a99ffa0($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section20b5a53a605f41ad0bb920cb0a99ffa0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li>{{> partials/postsAvatar}}</li>
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
                
                $buffer .= $indent . '        <li>';
                if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
