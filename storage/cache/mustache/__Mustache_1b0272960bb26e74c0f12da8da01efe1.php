<?php

class __Mustache_1b0272960bb26e74c0f12da8da01efe1 extends Mustache_Template
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
        $buffer .= $this->section806a0f64372b83ee79e49ecc7dfc4134($context, $indent, $value);
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
            $buffer .= $indent . '    <form action="/logout" method="POST" class="ml-4 flex justify-end">
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
            $buffer .= $indent . '  </div>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/auth.js"></script>
';

        return $buffer;
    }

    private function section806a0f64372b83ee79e49ecc7dfc4134(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="flex w-1/3 justify-end" id="dashboard_loggedin">
    <button class="rounded-md bg-blue-500 px-4 py-2 text-white">Logout</button>
    <a href="/profile" class="ml-10 rounded-full bg-blue-500 p-0.5">
      <div
        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-300 font-bold text-gray-600"
      >
        {{userInitial}}
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
                $buffer .= $indent . '    <button class="rounded-md bg-blue-500 px-4 py-2 text-white">Logout</button>
';
                $buffer .= $indent . '    <a href="/profile" class="ml-10 rounded-full bg-blue-500 p-0.5">
';
                $buffer .= $indent . '      <div
';
                $buffer .= $indent . '        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-300 font-bold text-gray-600"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('userInitial'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
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
