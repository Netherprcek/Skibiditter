<?php

class __Mustache_293a8f7e277a7f085a8d00b7d2e23946 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="flex flex-row items-center align-items-center justify-between">
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
        $buffer .= $indent . '      <p>';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div class="flex items-center">
';
        $buffer .= $indent . '    <div class="button-wrapper text-sm mx-2 flex items-center">
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
