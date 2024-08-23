<?php

class __Mustache_3cf501d4160d5a9c920177fe0d70a123 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="flex h-full flex-row items-center justify-between">
';
        $buffer .= $indent . '  <div class="flex items-center">
';
        if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div class="ml-4 flex flex-col">
';
        $buffer .= $indent . '      <a href="/profile/';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '" class="">
';
        $buffer .= $indent . '        <p>';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '      </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div class="flex h-full items-center">
';
        $value = $context->find('is_current_user');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="button-wrapper mx-2 flex h-full items-center text-sm">
';
            if ($partial = $this->mustache->loadPartial('partials/followButton')) {
                $buffer .= $partial->renderInternal($context, $indent . '      ');
            }
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
