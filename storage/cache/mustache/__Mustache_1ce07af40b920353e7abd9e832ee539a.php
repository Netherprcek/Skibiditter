<?php

class __Mustache_1ce07af40b920353e7abd9e832ee539a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="flex items-center">
';
        $value = $context->find('is_following');
        $buffer .= $this->section1a400629b5dc533170965fd42430e485($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('is_following');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '  <form action="/';
            $value = $this->resolveValue($context->find('user_id'), $context);
            $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
            $buffer .= '/follow" method="POST" class="ml-2">
';
            $buffer .= $indent . '    <button
';
            $buffer .= $indent . '      type="submit"
';
            $buffer .= $indent . '      class="rounded-lg bg-blue-600 px-2 py-1 text-sm text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
';
            $buffer .= $indent . '    >
';
            $buffer .= $indent . '      Follow
';
            $buffer .= $indent . '    </button>
';
            $buffer .= $indent . '  </form>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section1a400629b5dc533170965fd42430e485(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <form action="/{{user_id}}/unfollow" method="POST" class="ml-2">
    <button
      type="submit"
      class="rounded-lg bg-red-600 px-2 py-1 text-sm text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
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
                
                $buffer .= $indent . '  <form action="/';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/unfollow" method="POST" class="ml-2">
';
                $buffer .= $indent . '    <button
';
                $buffer .= $indent . '      type="submit"
';
                $buffer .= $indent . '      class="rounded-lg bg-red-600 px-2 py-1 text-sm text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '      Unfollow
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '  </form>
';
                $buffer .= $indent . '  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
