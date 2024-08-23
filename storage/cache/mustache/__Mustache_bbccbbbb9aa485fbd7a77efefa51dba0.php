<?php

class __Mustache_bbccbbbb9aa485fbd7a77efefa51dba0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1 class="text-4xl font-bold text-cen">Page not found</h1>
';

        return $buffer;
    }
}
