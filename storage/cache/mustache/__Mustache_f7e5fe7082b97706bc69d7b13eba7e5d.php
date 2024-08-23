<?php

class __Mustache_f7e5fe7082b97706bc69d7b13eba7e5d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mb-2 rounded-lg bg-gray-900 px-6 pt-2 shadow-md">
';
        $buffer .= $indent . '  <form action="/';
        $value = $this->resolveValue($context->findDot('parent_comment.id_comment'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '/createReply" method="post">
';
        $buffer .= $indent . '    <input type="hidden" name="id_parentComment" value="';
        $value = $this->resolveValue($context->findDot('parent_comment.id_comment'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="id_post" value="';
        $value = $this->resolveValue($context->findDot('parent_comment.id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '" />
';
        $buffer .= $indent . '    <div class="flex items-start">
';
        $buffer .= $indent . '      <span class="mr-2 mt-2">';
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
        $buffer .= $indent . '        oninput="this.style.height = \'\'; this.style.height = this.scrollHeight + \'px\'; checkMaxLength(this);"
';
        $buffer .= $indent . '        maxlength="255"
';
        $buffer .= $indent . '      ></textarea>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div id="maxLengthMessage" class="text-red-500 hidden">
';
        $buffer .= $indent . '      Max comment length reached: 255
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
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '  function checkMaxLength(textarea) {
';
        $buffer .= $indent . '    const maxLengthMessage = document.getElementById(\'maxLengthMessage\');
';
        $buffer .= $indent . '    if (textarea.value.length >= 255) {
';
        $buffer .= $indent . '      maxLengthMessage.classList.remove(\'hidden\');
';
        $buffer .= $indent . '    } else {
';
        $buffer .= $indent . '      maxLengthMessage.classList.add(\'hidden\');
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }
}
