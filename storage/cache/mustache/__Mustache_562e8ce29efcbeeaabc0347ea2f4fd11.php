<?php

class __Mustache_562e8ce29efcbeeaabc0347ea2f4fd11 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->sectionE2aa111d60e23e60f739e0eeb1cac809($context, $indent, $value);
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

    private function sectionE2aa111d60e23e60f739e0eeb1cac809(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/header}}
<title>{{session_user.username}} - Edit Profile</title>

<div class="mt-16 flex w-full">
  {{> partials/leftBar}} {{!-- List of posts --}}
  <div id="center_column" class="flex w-1/3 justify-center">
    <div style="width: 100%; max-width: 42rem">
      {{> partials/profileCard}}
      <h1 class="mb-6 text-center text-3xl font-bold text-white">
        {{pageTitle}}
      </h1>
      <form id="edit_form" action="/{{username}}/edit-profile" method="post" class="relative mb-4 mx-4">
        <input
          type="text"
          placeholder="Avatar URL"
          name="avatar"
          id="avatar"
          class="w-full mb-4 resize-none overflow-hidden rounded-lg bg-slate-700 p-2 pr-20 focus:outline-none"
          oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
        >
      
        <input
          type="text"
          placeholder="Background URL"
          name="background"
          id="background"
          class="w-full resize-none overflow-hidden rounded-lg bg-slate-700 p-2 pr-20 focus:outline-none"
          oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
        >
        <button
          type="submit"
          class="mt-2 rounded-lg bg-blue-500 px-4 py-1 text-white align-middle"
        >
          Update
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
                $buffer .= ' - Edit Profile</title>
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
                $buffer .= $indent . '      <form id="edit_form" action="/';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/edit-profile" method="post" class="relative mb-4 mx-4">
';
                $buffer .= $indent . '        <input
';
                $buffer .= $indent . '          type="text"
';
                $buffer .= $indent . '          placeholder="Avatar URL"
';
                $buffer .= $indent . '          name="avatar"
';
                $buffer .= $indent . '          id="avatar"
';
                $buffer .= $indent . '          class="w-full mb-4 resize-none overflow-hidden rounded-lg bg-slate-700 p-2 pr-20 focus:outline-none"
';
                $buffer .= $indent . '          oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '      
';
                $buffer .= $indent . '        <input
';
                $buffer .= $indent . '          type="text"
';
                $buffer .= $indent . '          placeholder="Background URL"
';
                $buffer .= $indent . '          name="background"
';
                $buffer .= $indent . '          id="background"
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
                $buffer .= $indent . '          class="mt-2 rounded-lg bg-blue-500 px-4 py-1 text-white align-middle"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '          Update
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
