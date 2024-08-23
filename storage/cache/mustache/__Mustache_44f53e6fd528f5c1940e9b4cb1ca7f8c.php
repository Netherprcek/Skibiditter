<?php

class __Mustache_44f53e6fd528f5c1940e9b4cb1ca7f8c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<title>Edit Post - ';
        $value = $this->resolveValue($context->findDot('posts.id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="flex w-full mt-16">
';
        if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div id="center_column" class="flex w-1/2 justify-center">
';
        $buffer .= $indent . '    <div class="border-x-2 border-gray-800 max-w-3xl w-full">
';
        $buffer .= $indent . '      <h1 class="mb-6 text-center text-3xl font-bold mt-8 text-white">
';
        $buffer .= $indent . '        Edit your post
';
        $buffer .= $indent . '      </h1>
';
        $buffer .= $indent . '      <div class="mx-8">';
        if ($partial = $this->mustache->loadPartial('partials/editForm')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
