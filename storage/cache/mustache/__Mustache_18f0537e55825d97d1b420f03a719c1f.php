<?php

class __Mustache_18f0537e55825d97d1b420f03a719c1f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  class="fixed left-0 right-0 top-0 z-10 flex items-center justify-between bg-gray-800 p-4"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <div class="w-1/3"></div>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-blue-500">SKIBIDITTER</a>
';
        $value = $context->find('user');
        $buffer .= $this->sectionFb6d5cd5b28fefa8f6ec2b1071e86d0e($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('user');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '  <div class="flex h-10 w-1/3 justify-end" id="dashboard_loggedout">
';
            $buffer .= $indent . '    <a href="/login" class="flex justify-end">
';
            $buffer .= $indent . '      <button class="h-10 rounded-md bg-blue-500 px-4 py-2 text-white">
';
            $buffer .= $indent . '        Login
';
            $buffer .= $indent . '      </button>
';
            $buffer .= $indent . '    </a>
';
            $buffer .= $indent . '    <a href="/register" class="ml-4 flex justify-end">
';
            $buffer .= $indent . '      <button class="h-10 rounded-md bg-blue-500 px-4 py-2 text-white">
';
            $buffer .= $indent . '        Register
';
            $buffer .= $indent . '      </button>
';
            $buffer .= $indent . '    </a>
';
            $buffer .= $indent . '  </div>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/auth.js"></script>';

        return $buffer;
    }

    private function sectionFb6d5cd5b28fefa8f6ec2b1071e86d0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="flex w-1/3 justify-end" id="dashboard_loggedin">
  {{!-- Logout Button --}}
    <form action="/logout" method="POST" class="ml-4 flex h-2 justify-end">
      <button
        type="submit"
        class="h-10 rounded-md bg-blue-500 px-4 py-2 text-white"
      >
        Logout
      </button>
    </form>
    {{!-- User Profile --}}
    <a href="/profile" class="ml-10 rounded-full bg-blue-500 p-0.5">
      <div
        class="flex h-10 w-10 items-center justify-start rounded-full bg-gray-300 font-bold text-gray-600 overflow-hidden"
      >
        <span class="pl-1" style="white-space: nowrap; overflow: hidden; text-overflow: clip;">{{user}}</span>
      </div>
    </a>
  </div>
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
                
                $buffer .= $indent . '  <div class="flex w-1/3 justify-end" id="dashboard_loggedin">
';
                $buffer .= $indent . '    <form action="/logout" method="POST" class="ml-4 flex h-2 justify-end">
';
                $buffer .= $indent . '      <button
';
                $buffer .= $indent . '        type="submit"
';
                $buffer .= $indent . '        class="h-10 rounded-md bg-blue-500 px-4 py-2 text-white"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        Logout
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '    </form>
';
                $buffer .= $indent . '    <a href="/profile" class="ml-10 rounded-full bg-blue-500 p-0.5">
';
                $buffer .= $indent . '      <div
';
                $buffer .= $indent . '        class="flex h-10 w-10 items-center justify-start rounded-full bg-gray-300 font-bold text-gray-600 overflow-hidden"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        <span class="pl-1" style="white-space: nowrap; overflow: hidden; text-overflow: clip;">';
                $value = $this->resolveValue($context->find('user'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
