<?php

class __Mustache_a6ff7583157188c9def7c18f57d5925f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="justify-left flex h-12 w-12 items-center">
';
        $buffer .= $indent . '  <a href="/profile" class="rounded-full bg-blue-500 p-0.5">
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '      class="flex h-10 w-10 items-center justify-start overflow-hidden rounded-full bg-gray-300 font-bold text-gray-600"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '      <span
';
        $buffer .= $indent . '        class="pl-1"
';
        $buffer .= $indent . '        style="
';
        $buffer .= $indent . '          white-space: nowrap;
';
        $buffer .= $indent . '          overflow: hidden;
';
        $buffer .= $indent . '          text-overflow: clip;
';
        $buffer .= $indent . '          width: 36px;
';
        $buffer .= $indent . '        "
';
        $buffer .= $indent . '        >';
        $value = $this->resolveValue($context->find('user'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span
';
        $buffer .= $indent . '      >
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
