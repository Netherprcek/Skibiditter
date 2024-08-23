<?php

class __Mustache_c5aba8fc472731ea490cb48fcc558b44 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="flex flex-row">
';
        if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div class="grid grid-cols-2 gap-4">
';
        $buffer .= $indent . '    <div class="flex flex-col">
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="flex items-end justify-end">';
        if ($partial = $this->mustache->loadPartial('partials/followButton')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
