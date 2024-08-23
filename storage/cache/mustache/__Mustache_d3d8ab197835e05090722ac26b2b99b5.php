<?php

class __Mustache_d3d8ab197835e05090722ac26b2b99b5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1 class="mt-20 text-center text-4xl font-bold">';
        $value = $this->resolveValue($context->find('session_error'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h1>
';

        return $buffer;
    }
}
