<?php

class __Mustache_5ccc22d8eb315a67c5ba2006c03b2a83 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<title>Search</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div class="flex min-h-screen flex-col">
';
        if ($partial = $this->mustache->loadPartial('partials/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div class="flex flex-1 pt-16">
';
        $buffer .= $indent . '    <!-- Adjusted this line -->
';
        if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div id="center_column" class="flex w-1/3 justify-center overflow-y-auto">
';
        $buffer .= $indent . '      <div style="width: 100%; max-width: 42rem; padding: 2rem justify-center">
';
        $buffer .= $indent . '        <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->find('pageTitle'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '        </h1>
';
        $buffer .= $indent . '        <form>
';
        $buffer .= $indent . '          <input
';
        $buffer .= $indent . '          type="text"
';
        $buffer .= $indent . '          placeholder="Search for users"
';
        $buffer .= $indent . '          name="search"
';
        $buffer .= $indent . '          id="search"
';
        $buffer .= $indent . '          class="w-full resize-none overflow-hidden rounded-lg bg-slate-700 p-2 pr-20 focus:outline-none"
';
        $buffer .= $indent . '          oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '          type="submit"
';
        $buffer .= $indent . '          class="absolute right-1 top-1/2 -translate-y-1/2 rounded-lg bg-blue-500 px-4 py-1 text-white"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '        </form>
';
        if ($partial = $this->mustache->loadPartial('partials/recommendedUsers')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
