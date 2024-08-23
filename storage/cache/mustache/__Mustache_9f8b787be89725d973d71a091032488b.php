<?php

class __Mustache_9f8b787be89725d973d71a091032488b extends Mustache_Template
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
        $buffer .= $indent . '    <title>Home Page</title>
';
        $buffer .= $indent . '  </head>
';
        $buffer .= $indent . '  <body class="bg-gray-900 text-white">
';
        if ($partial = $this->mustache->loadPartial('partials/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }
}
