<?php

class __Mustache_b7e398c10b1cc94babbd79b1708af100 extends Mustache_Template
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
        $buffer .= $this->section26f8b14696732f9b5e6c0ba09172e040($context, $indent, $value);
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
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA1cf646596420d0cca33b1405eed73f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{initials}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('initials'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26f8b14696732f9b5e6c0ba09172e040(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="hidden w-1/3 justify-end" id="dashboard_loggedin">
    <button class="rounded-md bg-blue-500 px-4 py-2 text-white">Logout</button>
    <a href="/profile" class="ml-10 rounded-full bg-blue-500 p-0.5">
      <div
        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-300 font-bold text-gray-600"
      >
        {{#user}} {{initials}} {{/user}} {{^user}} ? {{/user}}
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
                
                $buffer .= $indent . '  <div class="hidden w-1/3 justify-end" id="dashboard_loggedin">
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
                $value = $context->find('user');
                $buffer .= $this->sectionA1cf646596420d0cca33b1405eed73f0($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('user');
                if (empty($value)) {
                    
                    $buffer .= ' ? ';
                }
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
