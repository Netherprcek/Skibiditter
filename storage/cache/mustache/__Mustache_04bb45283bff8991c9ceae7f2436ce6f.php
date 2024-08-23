<?php

class __Mustache_04bb45283bff8991c9ceae7f2436ce6f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<tit
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1 class="mt-32 text-center text-4xl font-bold">';
        $value = $this->resolveValue($context->find('pageTitle'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h1>
';

        return $buffer;
    }
}
