<?php

class __Mustache_9220a6bbb15731c674bde38408cc13c2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
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
        if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div id="center_column" class="flex-1 flex justify-center">
';
        $buffer .= $indent . '      <div class="w-full max-w-2xl">
';
        $buffer .= $indent . '        <h1 class="mb-6 mt-6 text-center text-3xl font-bold text-white">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->find('pageTitle'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '        </h1>
';
        $buffer .= $indent . '        <form action="/search" method="post" class="relative mx-4 mb-4">
';
        $buffer .= $indent . '          <input
';
        $buffer .= $indent . '            type="text"
';
        $buffer .= $indent . '            placeholder="Search for users"
';
        $buffer .= $indent . '            name="searchTerm"
';
        $buffer .= $indent . '            id="searchTerm"
';
        $buffer .= $indent . '            class="w-full resize-none overflow-hidden rounded-lg bg-slate-700 p-2 pr-20 focus:outline-none"
';
        $buffer .= $indent . '            oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
';
        $buffer .= $indent . '          />
';
        $buffer .= $indent . '          <button
';
        $buffer .= $indent . '            type="submit"
';
        $buffer .= $indent . '            class="absolute right-1 top-1/2 -translate-y-1/2 rounded-lg bg-blue-500 px-4 py-1 text-white"
';
        $buffer .= $indent . '          >
';
        $buffer .= $indent . '            Search
';
        $buffer .= $indent . '          </button>
';
        $buffer .= $indent . '        </form>
';
        $value = $context->find('profile');
        $buffer .= $this->section6338f0a8852882c4eb396006e05e9e1e($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/buttons.js"></script>';

        return $buffer;
    }

    private function section6338f0a8852882c4eb396006e05e9e1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="mx-4">{{> partials/recommendedUsers}}</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="mx-4">';
                if ($partial = $this->mustache->loadPartial('partials/recommendedUsers')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
