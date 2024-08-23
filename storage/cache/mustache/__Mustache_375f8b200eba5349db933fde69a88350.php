<?php

class __Mustache_375f8b200eba5349db933fde69a88350 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  id="left_column"
';
        $buffer .= $indent . '  class="sticky top-16 flex h-[calc(100vh-4rem)] w-1/3 content-end overflow-y-auto border-r-2 border-gray-800 pl-4 pr-4 text-right"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <div class="flex w-1/3 flex-col text-left"></div>
';
        $buffer .= $indent . '  <div class="flex w-1/3 flex-col text-left"></div>
';
        $buffer .= $indent . '  <div class="mt-12 flex w-full flex-col items-end text-left">
';
        $buffer .= $indent . '    <a href="/" class="mb-8 text-2xl font-bold text-gray-300">
';
        $buffer .= $indent . '      <i class="fas fa-home"></i> Home
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <a href="/explore" class="mb-8 text-2xl font-bold text-gray-300">
';
        $buffer .= $indent . '      <i class="fas fa-compass"></i> Explore
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <a href="/search" class="mb-8 text-2xl font-bold text-gray-300">
';
        $buffer .= $indent . '      <i class="fas fa-search"></i> Search
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <a href="/profile" class="text-2xl font-bold text-gray-300">
';
        $buffer .= $indent . '      <i class="fas fa-user"></i> Profile
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
