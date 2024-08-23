<?php

class __Mustache_fe81f098fd6a29189fca998285880126 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  class="sticky left-0 right-0 top-0 z-10 flex items-center justify-between bg-gray-800 p-4"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <div class="w-1/3"></div>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-blue-500">SKIBIDITTER</a>
';
        $buffer .= $indent . '  ';
        $buffer .= ' ';
        $value = $context->find('user');
        $buffer .= $this->sectionDd2d0843ab3208421ff5993eaca1c066($context, $indent, $value);
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
        $buffer .= $indent . '<script src="/js/auth.js"></script>
';

        return $buffer;
    }

    private function sectionDd2d0843ab3208421ff5993eaca1c066(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="flex w-1/3 justify-end" id="dashboard_loggedin">
    {{!-- Logout Button --}}
    <form action="/logout" method="POST" class="ml-4 flex h-2 justify-end">
      <button
        type="submit"
        class="h-11 rounded-md bg-blue-500 px-4 py-2 text-white"
      >
        Logout
      </button>
    </form>
    {{!-- User Profile --}}
    <div class="ml-10">{{> partials/profileAvatar}}</div>
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
                
                $buffer .= '
';
                $buffer .= $indent . '  <div class="flex w-1/3 justify-end" id="dashboard_loggedin">
';
                $buffer .= $indent . '    <form action="/logout" method="POST" class="ml-4 flex h-2 justify-end">
';
                $buffer .= $indent . '      <button
';
                $buffer .= $indent . '        type="submit"
';
                $buffer .= $indent . '        class="h-11 rounded-md bg-blue-500 px-4 py-2 text-white"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        Logout
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '    </form>
';
                $buffer .= $indent . '    <div class="ml-10">';
                if ($partial = $this->mustache->loadPartial('partials/profileAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</div>
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
