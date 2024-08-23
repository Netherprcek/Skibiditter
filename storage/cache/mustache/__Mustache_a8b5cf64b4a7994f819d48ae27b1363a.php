<?php

class __Mustache_a8b5cf64b4a7994f819d48ae27b1363a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<title>404 - Page not found</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1 class="mt-32 text-center text-4xl font-bold">Page not found</h1>
';

        return $buffer;
    }
}
