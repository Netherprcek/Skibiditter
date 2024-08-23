<?php

class __Mustache_6da50a28e73658fcac2588fc39dd44bf extends Mustache_Template
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
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-blue-500">SKIBIDITTER</a>
';
        $buffer .= $indent . '  <div class="flex w-1/3 justify-end">
';
        $buffer .= $indent . '    <a href="/login" class="flex justify-end">
';
        $buffer .= $indent . '      <button class="bg-blue-500 px-4 py-2 text-white">Login</button>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <a href="/register" class="ml-4 flex justify-end">
';
        $buffer .= $indent . '      <button class="bg-blue-500 px-4 py-2 text-white">Register</button>
';
        $buffer .= $indent . '    </a>
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
