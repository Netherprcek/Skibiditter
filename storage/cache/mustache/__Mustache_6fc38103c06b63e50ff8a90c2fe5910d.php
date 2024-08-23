<?php

class __Mustache_6fc38103c06b63e50ff8a90c2fe5910d extends Mustache_Template
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
        $buffer .= $indent . '    <div class="flex min-h-screen items-center justify-center mt-16">
';
        $buffer .= $indent . '      <form class="rounded-lg bg-gray-800 p-4 w-full max-w-md">
';
        $buffer .= $indent . '        <h1 class="text-2xl font-bold mb-4">Login</h1>
';
        $buffer .= $indent . '        <input type="text" class="w-full rounded-md bg-gray-700 p-2 mb-3" placeholder="Username" />
';
        $buffer .= $indent . '        <input type="password" class="w-full rounded-md bg-gray-700 p-2 mb-4" placeholder="Password" />
';
        $buffer .= $indent . '        <button class="w-full rounded-md bg-blue-500 p-2 hover:bg-blue-600 transition-colors">Login</button>
';
        $buffer .= $indent . '      </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
