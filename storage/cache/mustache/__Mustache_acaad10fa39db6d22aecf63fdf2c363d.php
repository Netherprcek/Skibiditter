<?php

class __Mustache_acaad10fa39db6d22aecf63fdf2c363d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('is_following');
        $buffer .= $this->section750bcc0a4b96afe11023b9a12548ab72($context, $indent, $value);
        $buffer .= $indent . ' ';
        $value = $context->find('is_following');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '<form action="/';
            $value = $this->resolveValue($context->find('user_id'), $context);
            $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
            $buffer .= '/follow" method="POST">
';
            $buffer .= $indent . '  <button
';
            $buffer .= $indent . '    type="submit"
';
            $buffer .= $indent . '    class="rounded-lg bg-blue-600 px-2 py-1 text-sm text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
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

        return $buffer;
    }

    private function section750bcc0a4b96afe11023b9a12548ab72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<form action="/{{user_id}}/unfollow" method="POST">
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
                
                $buffer .= $indent . '<form action="/';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/unfollow" method="POST">
';
                $buffer .= $indent . '  <button
';
                $buffer .= $indent . '    type="submit"
';
                $buffer .= $indent . '    class="rounded-lg bg-red-600 px-2 py-1 text-sm text-white transition duration-300 ease-in-out text-shadow-default hover:bg-red-700 hover:text-shadow-lg"
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

}
