<?php

class __Mustache_b551bb323e94f8133c3212bb4b6bc2cc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  id="right_column"
';
        $buffer .= $indent . '  class="flex w-1/4 flex-col border-l-2 border-gray-800 pl-4"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <h2 class="mb-2">To-do list</h2>
';
        $buffer .= $indent . '  <ul class="list-disc pl-5">
';
        $buffer .= $indent . '    <li>Set up comments</li>
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
