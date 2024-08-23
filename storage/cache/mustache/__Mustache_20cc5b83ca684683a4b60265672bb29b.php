<?php

class __Mustache_20cc5b83ca684683a4b60265672bb29b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  id="left_column"
';
        $buffer .= $indent . '  class="flex w-1/4 content-end flex-col border-r-2 border-gray-800 pl-4 text-right pr-4"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '<div class="flex  w-1/2 text-left"></div>
';
        $buffer .= $indent . '<div class="flex  w-1/2 text-left">
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">Home Page</a>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">Explore</a>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">Search</a>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-gray-300">Profile</a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
