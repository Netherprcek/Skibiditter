<?php

class __Mustache_785e7271c0a6c93609784757fa2c8845 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="justify-left flex h-12 w-12 items-center">
';
        $buffer .= $indent . '  <a
';
        $buffer .= $indent . '    href="/profile/';
        $value = $this->resolveValue($context->findDot('other_user.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '"
';
        $buffer .= $indent . '    class="rounded-full bg-blue-500 p-0.5"
';
        $buffer .= $indent . '  >
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '      class="flex h-10 w-10 items-center justify-start overflow-hidden rounded-full bg-gray-300 font-bold text-gray-600"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '      <img
';
        $buffer .= $indent . '        src="';
        $value = $this->resolveValue($context->find('avatar'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '"
';
        $buffer .= $indent . '        alt="User Avatar"
';
        $buffer .= $indent . '        class="h-full w-full object-cover"
';
        $buffer .= $indent . '      />
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
