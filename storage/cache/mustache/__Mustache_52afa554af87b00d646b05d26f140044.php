<?php

class __Mustache_52afa554af87b00d646b05d26f140044 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="flex flex-row items-center justify-between h-full">
';
        $buffer .= $indent . '  <div class="flex items-center">
';
        if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div class="ml-4 flex flex-col">
';
        $buffer .= $indent . '      <p>';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div class="flex items-center h-full">
';
        $buffer .= $indent . '    <div class="button-wrapper text-sm mx-2 flex items-center h-full">
';
        if ($partial = $this->mustache->loadPartial('partials/followButton')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
