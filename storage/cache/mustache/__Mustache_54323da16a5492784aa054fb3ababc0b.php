<?php

class __Mustache_54323da16a5492784aa054fb3ababc0b extends Mustache_Template
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
        $buffer .= $indent . '      <img
';
        $buffer .= $indent . '        src="';
        $value = $this->resolveValue($context->findDot('posts.avatar'), $context);
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
