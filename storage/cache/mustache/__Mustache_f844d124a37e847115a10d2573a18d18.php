<?php

class __Mustache_f844d124a37e847115a10d2573a18d18 extends Mustache_Template
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
        $buffer .= $indent . '  <ul class="list-disc space-y-2 pl-5">
';
        $buffer .= $indent . '    <li>Set up comments</li>
';
        $buffer .= $indent . '    <li>Set up likes</li>
';
        $buffer .= $indent . '    <li>Set up notifications</li>
';
        $buffer .= $indent . '  </ul>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
