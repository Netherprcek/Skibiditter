<?php

class __Mustache_23ced7e0073dc9b5470e6de0137c7724 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mb-2 rounded-lg bg-gray-800 p-6 shadow-md">
';
        $buffer .= $indent . '  <form action="/';
        $value = $this->resolveValue($context->find('post_id'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '/comments/create" method="post">
';
        $buffer .= $indent . '    <textarea
';
        $buffer .= $indent . '      name="comment_text"
';
        $buffer .= $indent . '      class="w-full resize-none overflow-hidden rounded-lg bg-gray-700 p-2 text-white focus:outline-none"
';
        $buffer .= $indent . '    ></textarea>
';
        $buffer .= $indent . '    <button type="submit" class="mt-2 rounded-lg bg-blue-500 p-2 text-white">
';
        $buffer .= $indent . '      Respond
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '  </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
