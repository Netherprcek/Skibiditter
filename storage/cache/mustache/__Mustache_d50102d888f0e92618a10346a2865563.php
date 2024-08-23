<?php

class __Mustache_d50102d888f0e92618a10346a2865563 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  class="fixed left-0 right-0 top-0 z-10 flex items-center justify-between bg-gray-800 p-4"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <div class="w-1/3"></div>
';
        $buffer .= $indent . '  <p class="align-self-center text-2xl font-bold text-blue-500">SKIBIDITTER</p>
';
        $buffer .= $indent . '  <div class="flex hidden w-1/3 justify-end">
';
        $buffer .= $indent . '    <img
';
        $buffer .= $indent . '      src="/path/to/avatar.jpg"
';
        $buffer .= $indent . '      alt="Profile Avatar"
';
        $buffer .= $indent . '      class="h-10 w-10 rounded-full object-cover"
';
        $buffer .= $indent . '    />
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Add a spacer to prevent content from being hidden behind the fixed navbar -->
';
        $buffer .= $indent . '<div class="h-16"></div>
';

        return $buffer;
    }
}
