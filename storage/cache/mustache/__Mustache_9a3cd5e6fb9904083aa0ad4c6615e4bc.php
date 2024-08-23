<?php

class __Mustache_9a3cd5e6fb9904083aa0ad4c6615e4bc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  id="left_column"
';
        $buffer .= $indent . '  class="sticky top-16 flex h-[calc(100vh-4rem)] w-1/3 content-end overflow-y-auto border-r-2 border-gray-800 pl-4 pr-4 text-left"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <h2 class="mb-2">To-do list</h2>
';
        $buffer .= $indent . '  <ul class="list-disc pl-5">
';
        $buffer .= $indent . '    <li>Set up comments</li>
';
        $buffer .= $indent . '    <li>Set up AXIOS / ALPINE</li>
';
        $buffer .= $indent . '    <li>Set up likes</li>
';
        $buffer .= $indent . '    <li>Set up profile</li>
';
        $buffer .= $indent . '    <li>Set up follow system</li> 
';
        $buffer .= $indent . '  </ul>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
