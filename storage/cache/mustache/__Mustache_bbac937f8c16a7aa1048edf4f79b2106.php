<?php

class __Mustache_bbac937f8c16a7aa1048edf4f79b2106 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="right_column" class="flex w-1/4 justify-start border-l-2 pl-4 border-gray-800"><h2>';
        $value = $this->resolveValue($context->findDot('session_user.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= ' </h2></div>
';
        $buffer .= $indent . '      <!-- 25% width -->';

        return $buffer;
    }
}
