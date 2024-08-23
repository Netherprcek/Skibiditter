<?php

class __Mustache_a052be2a8cb832f27ceed61a5d564287 extends Mustache_Template
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
        $buffer .= $indent . '  <div class="w-1/4"></div>
';
        $buffer .= $indent . '  <p class="text-2xl font-bold text-blue-500">SKIBIDITTER</p>
';
        $buffer .= $indent . '  <a href="/login" class="flex w-1/4 justify-end">
';
        $buffer .= $indent . '    <button class="bg-blue-500 px-4 py-2 text-white">Logout</button>
';
        $buffer .= $indent . '  </a>
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
