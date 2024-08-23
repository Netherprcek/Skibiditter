<?php

class __Mustache_2329242d9729502134cd8cf4088fa052 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->findDot('session.error'), $context);
        $buffer .= $indent . ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';

        return $buffer;
    }
}
