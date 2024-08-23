<?php

class __Mustache_7dd2f470ff537f3c2aa1ecc33a3fab2f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mb-2 rounded-lg bg-gray-800 p-6 shadow-md">
';
        $buffer .= $indent . '  <form action="/';
        $value = $this->resolveValue($context->findDot('post.id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '/createComment" method="post">
';
        $buffer .= $indent . '    <input type="hidden" name="post_id" value="';
        $value = $this->resolveValue($context->findDot('post.id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '" />
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
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
