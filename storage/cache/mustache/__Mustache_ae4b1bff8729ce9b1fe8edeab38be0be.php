<?php

class __Mustache_ae4b1bff8729ce9b1fe8edeab38be0be extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  id="right_column"
';
        $buffer .= $indent . '  class="sticky top-16 flex h-[calc(100vh-4rem)] w-1/3 flex-col overflow-y-auto border-l-2 border-gray-800 pl-4"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <div class="mt-8">
';
        $buffer .= $indent . '    <!-- Added wrapper div with top margin -->
';
        $buffer .= $indent . '    <h2 class="mb-2">To-do list</h2>
';
        $buffer .= $indent . '    <ul class="list-disc pl-5">
';
        $buffer .= $indent . '      <li>Set up comment responses and likes</li>
';
        $buffer .= $indent . '      <li>Red like color disappears after relog</li>
';
        $buffer .= $indent . '      <li>Set up follow system</li>
';
        $buffer .= $indent . '      <li>Set up Explore / Home page</li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
