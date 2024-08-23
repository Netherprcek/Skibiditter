<?php

class __Mustache_314ce052eba5a85fe152565d339b62a6 extends Mustache_Template
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
        $buffer .= $indent . '      <form class="w-80 rounded-lg bg-gray-800 p-4">
';
        $buffer .= $indent . '        <h1 class="mb-2 text-center text-2xl font-bold">Login</h1>
';
        $buffer .= $indent . '        <input
';
        $buffer .= $indent . '          type="text"
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
        $buffer .= $indent . '          class="mb-4 w-full rounded-md bg-gray-700 p-2"
';
        $buffer .= $indent . '          placeholder="Password"
';
        $buffer .= $indent . '        />
';
        $buffer .= $indent . '        <button class="w-auto rounded-md bg-blue-500 p-2">Login</button>
';
        $buffer .= $indent . '      </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }
}
