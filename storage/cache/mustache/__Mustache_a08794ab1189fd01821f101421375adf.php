<?php

class __Mustache_a08794ab1189fd01821f101421375adf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<html lang="en">
';
        $buffer .= $indent . '  <head>
';
        $buffer .= $indent . '    <meta charset="UTF-8" />
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
';
        $buffer .= $indent . '    <link rel="stylesheet" href="/css/output.css" />
';
        $buffer .= $indent . '    <title>Login</title>
';
        $buffer .= $indent . '  </head>
';
        $buffer .= $indent . '  <body class="bg-gray-900 text-white">
';
        if ($partial = $this->mustache->loadPartial('partials/dashboard')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="flex min-h-screen items-center justify-center">
';
        $buffer .= $indent . '      <form
';
        $buffer .= $indent . '        class="w-80 rounded-lg bg-gray-800 p-4"
';
        $buffer .= $indent . '        id="login_form"
';
        $buffer .= $indent . '        action="/login"
';
        $buffer .= $indent . '        method="post"
';
        $buffer .= $indent . '      >
';
        $buffer .= $indent . '        <h1 class="mb-2 text-center text-2xl font-bold">Login</h1>
';
        $buffer .= $indent . '        <input
';
        $buffer .= $indent . '          type="text"
';
        $buffer .= $indent . '          name="username"
';
        $buffer .= $indent . '          id="login_username"
';
        $buffer .= $indent . '          class="mb-3 w-full rounded-md bg-gray-700 p-2"
';
        $buffer .= $indent . '          placeholder="Username"
';
        $buffer .= $indent . '        />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <input
';
        $buffer .= $indent . '          type="password"
';
        $buffer .= $indent . '          name="password"
';
        $buffer .= $indent . '          id="login_password"
';
        $buffer .= $indent . '          class="mb-4 w-full rounded-md bg-gray-700 p-2"
';
        $buffer .= $indent . '          placeholder="Password"
';
        $buffer .= $indent . '        />
';
        $buffer .= $indent . '        <p id="login_error" class="mt-2 text-center text-sm text-red-600">
';
        $buffer .= $indent . '          &nbsp;
';
        $buffer .= $indent . '        </p>
';
        $value = $context->find('error');
        $buffer .= $this->section59e7c641fa74a7fa8968742d53cde5f5($context, $indent, $value);
        $buffer .= $indent . '        <button class="w-auto rounded-md bg-blue-500 p-2">Login</button>
';
        $buffer .= $indent . '      </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <script src="/js/auth.js"></script>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function section59e7c641fa74a7fa8968742d53cde5f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="mt-2 text-sm text-red-600">{{error}}</p>
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
                
                $buffer .= $indent . '        <p class="mt-2 text-sm text-red-600">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
