<?php

class __Mustache_8beedad8cea04fc4fd888bec3e45319b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1 class="mt-20text-center text-4xl font-bold">Page not found</h1>
';

        return $buffer;
    }
}
