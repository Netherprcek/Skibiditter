<?php

class __Mustache_5c3ca8d9854ad280ea0aba433b8bf200 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('is_following');
        $buffer .= $this->sectionD24e13c435196bcd219bb50b699f5987($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('is_following');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '    <form action="/';
            $value = $this->resolveValue($context->find('user_id'), $context);
            $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
            $buffer .= '/follow" method="POST">
';
            $buffer .= $indent . '      <button
';
            $buffer .= $indent . '        type="submit"
';
            $buffer .= $indent . '        class="mt-16 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
';
            $buffer .= $indent . '      >
';
            $buffer .= $indent . '        Follow
';
            $buffer .= $indent . '      </button>
';
            $buffer .= $indent . '    </form>
';
            $buffer .= $indent . '
';
        }

        return $buffer;
    }

    private function sectionD24e13c435196bcd219bb50b699f5987(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <form action="/{{user_id}}/unfollow" method="POST" class="h-1">
      <button
        type="submit"
        class="text-md mt-16 rounded-lg border-2 border-red-700 bg-red-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
      >
        Unfollow
      </button>
    </form>
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
                
                $buffer .= $indent . '    <form action="/';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/unfollow" method="POST" class="h-1">
';
                $buffer .= $indent . '      <button
';
                $buffer .= $indent . '        type="submit"
';
                $buffer .= $indent . '        class="text-md mt-16 rounded-lg border-2 border-red-700 bg-red-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        Unfollow
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '    </form>
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
