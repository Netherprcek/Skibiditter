<?php

class __Mustache_2837f8f030c65fe0d6c79b48203ffb6a extends Mustache_Template
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
        $buffer .= $indent . '      <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
        $buffer .= $indent . '        Edit your post
';
        $buffer .= $indent . '      </h1>
';
        if ($partial = $this->mustache->loadPartial('partials/postForm')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
