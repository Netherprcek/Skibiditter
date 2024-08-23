<?php

class __Mustache_2b9fa805734181529164c5c3b6c1f425 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->section6f1d09289e122c11e3ddb590c4fc7aa2($context, $indent, $value);
        $value = $context->find('session_user');
        if (empty($value)) {
            
            $buffer .= $indent . '  <a href="/login"
';
            $buffer .= $indent . '    class="rounded-lg bg-blue-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
';
            $buffer .= $indent . '  >
';
            $buffer .= $indent . '    Follow
';
            $buffer .= $indent . '  </a>
';
        }
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionA28f2013d368a12c73d61b8c7636947b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<form action="/{{user_id}}/unfollow" method="POST" class="flex items-center h-full">
  <button
    type="submit"
    class="rounded-lg bg-red-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
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
                
                $buffer .= $indent . '<form action="/';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/unfollow" method="POST" class="flex items-center h-full">
';
                $buffer .= $indent . '  <button
';
                $buffer .= $indent . '    type="submit"
';
                $buffer .= $indent . '    class="rounded-lg bg-red-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
';
                $buffer .= $indent . '  >
';
                $buffer .= $indent . '    Unfollow
';
                $buffer .= $indent . '  </button>
';
                $buffer .= $indent . '</form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f1d09289e122c11e3ddb590c4fc7aa2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#is_following}}
<form action="/{{user_id}}/unfollow" method="POST" class="flex items-center h-full">
  <button
    type="submit"
    class="rounded-lg bg-red-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
  >
    Unfollow
  </button>
</form>
{{/is_following}} 
{{^is_following}}
<form action="/{{user_id}}/follow" method="POST" class="flex items-center h-full">
  <button
    type="submit"
    class="rounded-lg bg-blue-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
  >
    Follow
  </button>
</form>
{{/is_following}}
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
                
                $value = $context->find('is_following');
                $buffer .= $this->sectionA28f2013d368a12c73d61b8c7636947b($context, $indent, $value);
                $value = $context->find('is_following');
                if (empty($value)) {
                    
                    $buffer .= $indent . '<form action="/';
                    $value = $this->resolveValue($context->find('user_id'), $context);
                    $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                    $buffer .= '/follow" method="POST" class="flex items-center h-full">
';
                    $buffer .= $indent . '  <button
';
                    $buffer .= $indent . '    type="submit"
';
                    $buffer .= $indent . '    class="rounded-lg bg-blue-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
';
                    $buffer .= $indent . '  >
';
                    $buffer .= $indent . '    Follow
';
                    $buffer .= $indent . '  </button>
';
                    $buffer .= $indent . '</form>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
