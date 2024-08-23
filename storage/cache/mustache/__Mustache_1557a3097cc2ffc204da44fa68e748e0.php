<?php

class __Mustache_1557a3097cc2ffc204da44fa68e748e0 extends Mustache_Template
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
        $buffer .= $this->section8a12c181e9e2cca4baabf6231e1839be($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8a12c181e9e2cca4baabf6231e1839be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li>{{notification}}</li>
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
                
                $buffer .= $indent . '      <li>';
                $value = $this->resolveValue($context->find('notification'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
