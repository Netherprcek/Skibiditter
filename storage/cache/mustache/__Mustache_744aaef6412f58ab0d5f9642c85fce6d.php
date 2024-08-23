<?php

class __Mustache_744aaef6412f58ab0d5f9642c85fce6d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  id="left_column"
';
        $buffer .= $indent . '  class="flex w-1/4 content-end flex-col border-r-2 border-gray-800 pl-4 text-right"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">Home Page</a>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">Explore</a>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">Search</a>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">Profile</a>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">SKIBIDITTER</a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
