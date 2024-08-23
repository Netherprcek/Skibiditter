<?php

class __Mustache_b0013018bd6870e992f52e4fa0266ea4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="post_form" class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
        $buffer .= $indent . '            <div class="mb-4">';
        if ($partial = $this->mustache->loadPartial('partials/profileAvatar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '            <form>
';
        $buffer .= $indent . '              <input
';
        $buffer .= $indent . '                type="text"
';
        $buffer .= $indent . '                placeholder="Title"
';
        $buffer .= $indent . '                class="mb-2 w-full rounded-lg bg-slate-700 p-2"
';
        $buffer .= $indent . '              />
';
        $buffer .= $indent . '              <input
';
        $buffer .= $indent . '                type="text"
';
        $buffer .= $indent . '                placeholder="Description"
';
        $buffer .= $indent . '                class="w-full rounded-lg bg-slate-700 p-2"
';
        $buffer .= $indent . '              />
';
        $buffer .= $indent . '              <input
';
        $buffer .= $indent . '                type="text"
';
        $buffer .= $indent . '                placeholder="Image"
';
        $buffer .= $indent . '                class="w-full rounded-lg bg-slate-700 p-2"
';
        $buffer .= $indent . '              />
';
        $buffer .= $indent . '            </form>
';
        $buffer .= $indent . '          </div>';

        return $buffer;
    }
}
