<?php

class __Mustache_863e47682205dcaf39d97b8e16df5283 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->sectionD3a76ef6689884dcd6aca9998c65e317($context, $indent, $value);
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

    private function sectionD3a76ef6689884dcd6aca9998c65e317(Mustache_Context $context, $indent, $value)
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
          placeholder="What\'s on your mind?"
          name="post_text"
          id="post_text"
          class="mb-2 w-full resize-none overflow-hidden rounded-lg bg-slate-700 p-2 focus:outline-none"
          rows="3"
          oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
        ></textarea>
        <div class="relative">
          <button
            type="button"
            id="toggleImageInput"
            class="absolute bottom-2 right-2 mb-2 text-gray-400 hover:text-gray-300"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
              />
            </svg>
          </button>
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
                $buffer .= $indent . '          placeholder="What\'s on your mind?"
';
                $buffer .= $indent . '          name="post_text"
';
                $buffer .= $indent . '          id="post_text"
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
                $buffer .= $indent . '          <button
';
                $buffer .= $indent . '            type="button"
';
                $buffer .= $indent . '            id="toggleImageInput"
';
                $buffer .= $indent . '            class="absolute bottom-2 right-2 mb-2 text-gray-400 hover:text-gray-300"
';
                $buffer .= $indent . '          >
';
                $buffer .= $indent . '            <svg
';
                $buffer .= $indent . '              xmlns="http://www.w3.org/2000/svg"
';
                $buffer .= $indent . '              class="h-6 w-6"
';
                $buffer .= $indent . '              fill="none"
';
                $buffer .= $indent . '              viewBox="0 0 24 24"
';
                $buffer .= $indent . '              stroke="currentColor"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '              <path
';
                $buffer .= $indent . '                stroke-linecap="round"
';
                $buffer .= $indent . '                stroke-linejoin="round"
';
                $buffer .= $indent . '                stroke-width="2"
';
                $buffer .= $indent . '                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
';
                $buffer .= $indent . '              />
';
                $buffer .= $indent . '            </svg>
';
                $buffer .= $indent . '          </button>
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
