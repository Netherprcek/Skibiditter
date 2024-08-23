<?php

class __Mustache_b8c3a8d425c4beaf6a91d1c10b9bb204 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
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
        $buffer .= $indent . '        <p id="login_error" class="mb-2 mt-2 text-center text-sm text-red-600">
';
        $buffer .= $indent . '          &nbsp;
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <input type="hidden" id="loginErrorField" value="';
        $value = $this->resolveValue($context->find('session_error'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="loginError"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="flex justify-center">
';
        $buffer .= $indent . '          <button class="flex w-auto rounded-md bg-blue-500 p-2 text-center">
';
        $buffer .= $indent . '            Login
';
        $buffer .= $indent . '          </button>
';
        $buffer .= $indent . '        </div>
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
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
