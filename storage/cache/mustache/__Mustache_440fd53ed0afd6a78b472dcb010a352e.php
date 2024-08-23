<?php

class __Mustache_440fd53ed0afd6a78b472dcb010a352e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<title>Edit Post - ';
        $value = $this->resolveValue($context->findDot('post.id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="flex w-full">
';
        $buffer .= $indent . '  <div
';
        $buffer .= $indent . '    id="left_column"
';
        $buffer .= $indent . '    class="flex w-1/4 justify-end border-r-2 border-gray-800 pl-4"
';
        $buffer .= $indent . '  ></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div id="center_column" class="flex w-1/2 justify-center">
';
        $buffer .= $indent . '    <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
        $buffer .= $indent . '      <h1 class="mb-6 text-center text-3xl font-bold text-white">Home Page</h1>
';
        $buffer .= $indent . '      <div
';
        $buffer .= $indent . '        id="right_column"
';
        $buffer .= $indent . '        class="flex w-1/4 justify-start border-l-2 border-gray-800 pl-4"
';
        $buffer .= $indent . '      >
';
        $buffer .= $indent . '        <h2>';
        $value = $this->resolveValue($context->findDot('session_user.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h2>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <!-- 25% width -->
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
