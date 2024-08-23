<?php

class __Mustache_d4371fdd2c5069bee35f2c88708dc0dc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1 class="text-4xl font-bold">Page not found</h1>
';

        return $buffer;
    }
}
