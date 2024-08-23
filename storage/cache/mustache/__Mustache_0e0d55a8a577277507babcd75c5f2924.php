<?php

class __Mustache_0e0d55a8a577277507babcd75c5f2924 extends Mustache_Template
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
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <form>
';
        $buffer .= $indent . '    <input
';
        $buffer .= $indent . '      type="text"
';
        $buffer .= $indent . '      placeholder="Title"
';
        $buffer .= $indent . '      class="mb-2 w-full rounded-lg bg-slate-700 p-2"
';
        $buffer .= $indent . '    />
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
