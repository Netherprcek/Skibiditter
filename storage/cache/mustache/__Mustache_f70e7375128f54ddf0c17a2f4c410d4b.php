<?php

class __Mustache_f70e7375128f54ddf0c17a2f4c410d4b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<a href="/profile" class="ml-10 rounded-full p-0.5">
';
        $buffer .= $indent . '  <div
';
        $buffer .= $indent . '    class="flex h-10 w-10 items-center justify-start overflow-hidden rounded-full bg-gray-300 font-bold text-gray-600"
';
        $buffer .= $indent . '  >
';
        $buffer .= $indent . '    <span
';
        $buffer .= $indent . '      class="pl-1"
';
        $buffer .= $indent . '      style="
';
        $buffer .= $indent . '        white-space: nowrap;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        text-overflow: clip;
';
        $buffer .= $indent . '        width: 36px;
';
        $buffer .= $indent . '      "
';
        $buffer .= $indent . '      >';
        $value = $this->resolveValue($context->find('user'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }
}
