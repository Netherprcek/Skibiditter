<?php

class __Mustache_9eeacdf30bdcb309dd29c221864b149e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->section155c34f8a90dfc95fe8a22517d141b1a($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('session_user');
        if (empty($value)) {
            
            $buffer .= ' ';
            if ($partial = $this->mustache->loadPartial('login')) {
                $buffer .= $partial->renderInternal($context);
            }
            $buffer .= ' ';
        }
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
        if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section155c34f8a90dfc95fe8a22517d141b1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/header}}
<title>{{session_user.username}} - Profile</title>

<div class="mt-16 flex w-full">
  {{> partials/leftBar}} {{!-- List of posts --}}
  <div id="center_column" class="flex w-1/3 justify-center">
    <div style="width: 100%; max-width: 42rem">
      {{> partials/profileCard}}
      <h1 class="mb-6 text-center text-3xl font-bold text-white">
        {{pageTitle}}
      </h1>
      <form id="post_form" action="/post" method="post">
        <textarea
          placeholder="Avatar URL"
          name="avatar"
          id="avatar"
          class="mb-2 w-full resize-none overflow-hidden rounded-lg bg-slate-700 p-2 focus:outline-none"
          rows="3"
          oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
        ></textarea>
        <div class="relative">
          <input
            type="text"
            placeholder="Image URL"
            name="img"
            id="imageInput"
            class="hidden w-full rounded-lg bg-slate-700 p-2"
          />
        </div>
        <button
          id="post_button"
          class="mt-2 rounded-lg bg-blue-500 p-2 text-white"
        >
          Post
        </button>
      </form>
    </div>
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
                
                $buffer .= $indent . ' ';
                if ($partial = $this->mustache->loadPartial('partials/header')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $buffer .= $indent . '<title>';
                $value = $this->resolveValue($context->findDot('session_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= ' - Profile</title>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="mt-16 flex w-full">
';
                $buffer .= $indent . '  ';
                if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $buffer .= '
';
                $buffer .= $indent . '  <div id="center_column" class="flex w-1/3 justify-center">
';
                $buffer .= $indent . '    <div style="width: 100%; max-width: 42rem">
';
                if ($partial = $this->mustache->loadPartial('partials/profileCard')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $buffer .= $indent . '      <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('pageTitle'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '      </h1>
';
                $buffer .= $indent . '      <form id="post_form" action="/post" method="post">
';
                $buffer .= $indent . '        <textarea
';
                $buffer .= $indent . '          placeholder="Avatar URL"
';
                $buffer .= $indent . '          name="avatar"
';
                $buffer .= $indent . '          id="avatar"
';
                $buffer .= $indent . '          class="mb-2 w-full resize-none overflow-hidden rounded-lg bg-slate-700 p-2 focus:outline-none"
';
                $buffer .= $indent . '          rows="3"
';
                $buffer .= $indent . '          oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
';
                $buffer .= $indent . '        ></textarea>
';
                $buffer .= $indent . '        <div class="relative">
';
                $buffer .= $indent . '          <input
';
                $buffer .= $indent . '            type="text"
';
                $buffer .= $indent . '            placeholder="Image URL"
';
                $buffer .= $indent . '            name="img"
';
                $buffer .= $indent . '            id="imageInput"
';
                $buffer .= $indent . '            class="hidden w-full rounded-lg bg-slate-700 p-2"
';
                $buffer .= $indent . '          />
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <button
';
                $buffer .= $indent . '          id="post_button"
';
                $buffer .= $indent . '          class="mt-2 rounded-lg bg-blue-500 p-2 text-white"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '          Post
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '      </form>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
