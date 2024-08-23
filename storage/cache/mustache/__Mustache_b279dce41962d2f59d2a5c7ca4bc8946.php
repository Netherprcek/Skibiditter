<?php

class __Mustache_b279dce41962d2f59d2a5c7ca4bc8946 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mb-2 rounded-lg bg-gray-800  px-6 shadow-md">
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
        $buffer .= $indent . '    <span class="flex items-center mb-2">';
        if ($partial = $this->mustache->loadPartial('partials/sessionAvatar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= ' ';
        $value = $this->resolveValue($context->findDot('session_user.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span>
';
        $buffer .= $indent . '    <textarea
';
        $buffer .= $indent . '      name="comment_text"
';
        $buffer .= $indent . '      class="w-full resize-none overflow-hidden rounded-lg bg-gray-700 p-2 text-white focus:outline-none"
';
        $buffer .= $indent . '    ></textarea>
';
        $buffer .= $indent . '    <div class="flex justify-end">
';
        $buffer .= $indent . '      <button type="submit" class="rounded-lg bg-blue-500 p-2 mt-2 text-white">
';
        $buffer .= $indent . '        Respond
';
        $buffer .= $indent . '      </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </form>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
