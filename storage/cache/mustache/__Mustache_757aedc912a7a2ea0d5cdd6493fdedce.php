<?php

class __Mustache_757aedc912a7a2ea0d5cdd6493fdedce extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="rounded-lg bg-gray-800 p-6 shadow-md">
';
        $buffer .= $indent . '  <form action="/comments/create" method="post">
';
        $buffer .= $indent . '    <textarea name="comment_text" class="w-full rounded-lg bg-gray-700 p-2 text-white"></textarea>
';
        $buffer .= $indent . '    <button type="submit" class="mt-2 rounded-lg bg-blue-500 p-2 text-white">Post comment</button>
';
        $buffer .= $indent . '  </form>
';
        $buffer .= $indent . '    </div>';

        return $buffer;
    }
}
