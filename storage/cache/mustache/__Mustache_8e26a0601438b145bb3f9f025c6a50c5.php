<?php

class __Mustache_8e26a0601438b145bb3f9f025c6a50c5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mb-2 rounded-lg bg-gray-800 p-6 shadow-md">
';
        $buffer .= $indent . '  <form action="/';
        $value = $this->resolveValue($context->find('id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '/comments/create" method="post">
';
        $buffer .= $indent . '    <p>Post ID: ';
        $value = $this->resolveValue($context->findDot('post.id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '    <input type="hidden" name="post_id" value="';
        $value = $this->resolveValue($context->find('id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="username" value="';
        $value = $this->resolveValue($context->find('username'), $context);
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
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
