<?php

class __Mustache_f157507f71760c3dbc0239aa0b1e9310 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('is_session');
        $buffer .= $this->sectionDe101252fc4d01fdf36ce9e210239e10($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('is_session');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '<a
';
            $buffer .= $indent . '  href="/login"
';
            $buffer .= $indent . '  class="rounded-lg bg-blue-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
';
            $buffer .= $indent . '>
';
            $buffer .= $indent . '  Follow
';
            $buffer .= $indent . '</a>
';
        }

        return $buffer;
    }

    private function sectionC76cbd1a0e5677c25d249b2392213dc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<form
  action="/{{user_id}}/unfollow"
  method="POST"
  class="flex h-full items-center"
>
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
                
                $buffer .= $indent . '<form
';
                $buffer .= $indent . '  action="/';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/unfollow"
';
                $buffer .= $indent . '  method="POST"
';
                $buffer .= $indent . '  class="flex h-full items-center"
';
                $buffer .= $indent . '>
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

    private function sectionDe101252fc4d01fdf36ce9e210239e10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#is_following}}
<form
  action="/{{user_id}}/unfollow"
  method="POST"
  class="flex h-full items-center"
>
  <button
    type="submit"
    class="rounded-lg bg-red-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
  >
    Unfollow 
  </button>
</form>
{{/is_following}} {{^is_following}}
<form
  action="/{{user_id}}/follow"
  method="POST"
  class="flex h-full items-center"
>
  <button
    type="submit"
    class="rounded-lg bg-blue-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
  >
    Follow 
  </button>
</form>
{{/is_following}} ';
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
                $buffer .= $this->sectionC76cbd1a0e5677c25d249b2392213dc5($context, $indent, $value);
                $buffer .= $indent . ' ';
                $value = $context->find('is_following');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    $buffer .= $indent . '<form
';
                    $buffer .= $indent . '  action="/';
                    $value = $this->resolveValue($context->find('user_id'), $context);
                    $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                    $buffer .= '/follow"
';
                    $buffer .= $indent . '  method="POST"
';
                    $buffer .= $indent . '  class="flex h-full items-center"
';
                    $buffer .= $indent . '>
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
                $buffer .= $indent . ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
