<?php

class __Mustache_89ee0c3d54838ef53b53eec094eca5fa extends Mustache_Template
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
        $buffer .= $indent . '      <form class="mt-6 rounded-lg bg-gray-800 p-4">
';
        $buffer .= $indent . '        <h1 class="text-2xl font-bold">Login</h1>
';
        $buffer .= $indent . '        <input type="text" class="mb-3 w-full rounded-md bg-gray-700 p-2" />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <input type="password" class="mb-4 w-full rounded-md bg-gray-700 p-2" />
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
