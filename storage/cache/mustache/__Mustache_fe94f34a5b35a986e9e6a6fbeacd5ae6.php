<?php

class __Mustache_fe94f34a5b35a986e9e6a6fbeacd5ae6 extends Mustache_Template
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
        $buffer .= $indent . '    <div class="flex h-screen items-center justify-center">
';
        $buffer .= $indent . '      <form class="bg-gray-800 p-4 my-4">
';
        $buffer .= $indent . '        <h1 class="text-2xl font-bold">Login</h1>
';
        $buffer .= $indent . '        <input type="text" class="w-full rounded-md bg-gray-700 p-2" />
';
        $buffer .= $indent . '        <input type="password" class="w-full rounded-md bg-gray-700 p-2" />
';
        $buffer .= $indent . '        <button class="w-full rounded-md bg-blue-500 p-2">Login</button>
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
