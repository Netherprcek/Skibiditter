<?php

class __Mustache_ce7581765155b1b8bc942791f6a7a1a1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mb-2 rounded-lg bg-gray-800 px-6 pt-2 shadow-md">
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
        $buffer .= $indent . '    <div class="flex items-start">
';
        $buffer .= $indent . '      <span class="mr-2">';
        if ($partial = $this->mustache->loadPartial('partials/sessionAvatar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '      <textarea
';
        $buffer .= $indent . '        name="comment_text"
';
        $buffer .= $indent . '        class="w-full resize-none overflow-hidden rounded-lg bg-gray-700 p-2 text-white focus:outline-none"
';
        $buffer .= $indent . '      ></textarea>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="flex justify-end">
';
        $buffer .= $indent . '      <button type="submit" class="my-2 rounded-lg bg-blue-500 p-2 text-white">
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
