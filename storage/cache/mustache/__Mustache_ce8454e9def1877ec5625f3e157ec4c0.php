<?php

class __Mustache_ce8454e9def1877ec5625f3e157ec4c0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1 class="mt-20 text-center text-4xl font-bold">Page not found</h1>
';

        return $buffer;
    }
}
