<?php

class __Mustache_ba44a54597e097e5f54bc7ee0536c8cb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('is_following');
        $buffer .= $this->sectionCc261bdd97cf68b4205904f2f2ddee4b($context, $indent, $value);
        $buffer .= $indent . ' ';
        $value = $context->find('is_following');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '<form
';
            $buffer .= $indent . '  action="/';
            $value = $this->resolveValue($context->findDot('profile.user_id'), $context);
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
        $buffer .= $indent . '  ';
        $value = $context->find('session_user');
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

    private function sectionCc261bdd97cf68b4205904f2f2ddee4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<form
  action="/{{profile.user_id}}/unfollow"
  method="POST"
  class="flex h-full items-center"
>
  <button
    type="submit"
    class="rounded-lg bg-red-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
  >
    Unfollow {{profile.username}}
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
                $value = $this->resolveValue($context->findDot('profile.user_id'), $context);
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
                $buffer .= $indent . '    Unfollow ';
                $value = $this->resolveValue($context->findDot('profile.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
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

}
