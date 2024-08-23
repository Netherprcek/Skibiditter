<?php

class __Mustache_09f01509e21a58d8e82290e7c1ab504e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<title>Profile</title>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="flex w-full">
';
        $buffer .= $indent . '  <div id="left_column" class="flex w-1/4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div id="center_column" class="flex w-1/2 justify-center">
';
        $buffer .= $indent . '    <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
        $buffer .= $indent . '      <h1 class="mb-6 text-center text-3xl font-bold text-white">Your Posts</h1>
';
        $buffer .= $indent . '      ';
        $buffer .= ' ';
        if ($partial = $this->mustache->loadPartial('partials/postList')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div
';
        $buffer .= $indent . '    id="right_column"
';
        $buffer .= $indent . '    class="flex w-1/4 justify-start border-l-2 border-gray-800 pl-4"
';
        $buffer .= $indent . '  >
';
        $buffer .= $indent . '    <h2>';
        $value = $this->resolveValue($context->findDot('session_user.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h2>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
