<?php

class __Mustache_79a2786e8600acdeb92609dab709c9ff extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="justify-left flex h-12 w-12 items-center">
';
        $buffer .= $indent . '  <a href="/profile" class="rounded-full bg-blue-500 p-0.5">
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '      class="flex h-10 w-10 items-center justify-start overflow-hidden rounded-full bg-gray-300 font-bold text-gray-600"
';
        $buffer .= $indent . '    >
';
        $value = $context->find('session_user');
        $buffer .= $this->sectionE2b5532b209a894e6890f2bb4ede4d70($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('posts_user');
        $buffer .= $this->sectionE0a7d3426ff74fc449111a5ee537c4bc($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE2b5532b209a894e6890f2bb4ede4d70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <span
        class="pl-1"
        style="
          white-space: nowrap;
          overflow: hidden;
          text-overflow: clip;
          width: 36px;
        "
        >{{session_user.username}}</span
      >
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
                
                $buffer .= $indent . '      <span
';
                $buffer .= $indent . '        class="pl-1"
';
                $buffer .= $indent . '        style="
';
                $buffer .= $indent . '          white-space: nowrap;
';
                $buffer .= $indent . '          overflow: hidden;
';
                $buffer .= $indent . '          text-overflow: clip;
';
                $buffer .= $indent . '          width: 36px;
';
                $buffer .= $indent . '        "
';
                $buffer .= $indent . '        >';
                $value = $this->resolveValue($context->findDot('session_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '      ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0a7d3426ff74fc449111a5ee537c4bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <span
        class="pl-1"
        style="
          white-space: nowrap;
          overflow: hidden;
          text-overflow: clip;
          width: 36px;
        "
        >{{post_user.username}}</span
      >
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
                
                $buffer .= '
';
                $buffer .= $indent . '      <span
';
                $buffer .= $indent . '        class="pl-1"
';
                $buffer .= $indent . '        style="
';
                $buffer .= $indent . '          white-space: nowrap;
';
                $buffer .= $indent . '          overflow: hidden;
';
                $buffer .= $indent . '          text-overflow: clip;
';
                $buffer .= $indent . '          width: 36px;
';
                $buffer .= $indent . '        "
';
                $buffer .= $indent . '        >';
                $value = $this->resolveValue($context->findDot('post_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span
';
                $buffer .= $indent . '      >
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
