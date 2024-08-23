<?php

class __Mustache_35f19fbaedce31f25af18259a4eacef8 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="right_column" class="flex w-1/4 border-l-2 border-gray-800 pl-4">
';
        $buffer .= $indent . '  <h2>To-do list</h2>
';
        $buffer .= $indent . '  <ul>
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
