<?php

class __Mustache_07daba3f395335a5fede78e3b52b8d72 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="post_form" class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
        $buffer .= $indent . '  <div class="mb-4 flex items-center">
';
        $buffer .= $indent . '    <span class="mr-2">';
        if ($partial = $this->mustache->loadPartial('partials/profileAvatar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '    <span class="pt-0 text-lg font-semibold text-white">';
        $value = $this->resolveValue($context->find('user'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= ' asd </span>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <form>
';
        $buffer .= $indent . '    <input
';
        $buffer .= $indent . '      type="text"
';
        $buffer .= $indent . '      placeholder="Description"
';
        $buffer .= $indent . '      class="w-full rounded-lg bg-slate-700 p-2"
';
        $buffer .= $indent . '    />
';
        $buffer .= $indent . '    <input
';
        $buffer .= $indent . '      type="text"
';
        $buffer .= $indent . '      placeholder="Image"
';
        $buffer .= $indent . '      class="w-full rounded-lg bg-slate-700 p-2"
';
        $buffer .= $indent . '    />
';
        $buffer .= $indent . '  </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
