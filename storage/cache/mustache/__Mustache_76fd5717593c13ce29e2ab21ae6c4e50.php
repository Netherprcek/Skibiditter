<?php

class __Mustache_76fd5717593c13ce29e2ab21ae6c4e50 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="flex flex-row items-center justify-between">
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
        $buffer .= $indent . '  <div class="flex items-center">';
        if ($partial = $this->mustache->loadPartial('partials/followButton')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
