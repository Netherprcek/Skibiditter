<?php

class __Mustache_57942506fde4fc94cd573825e7d2d4d1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('posts');
        $buffer .= $this->section0483b4c7f58b252c9dc1446984de7551($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/post.js"></script>
';

        return $buffer;
    }

    private function section0483b4c7f58b252c9dc1446984de7551(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="post_form" class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
  <div class="mb-4 flex items-center">
    <span class="mr-2"> {{> partials/sessionAvatar }} </span>
    <span class="pt-0 text-lg font-semibold text-white">
      {{ session_user.username }}
    </span>
  </div>
  <form action="/{{id_post}}/edit" method="post">
    <input type="hidden" name="post_id" value="{{id_post}}" />
    <textarea
      placeholder="You changed your mind?"
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
    <button id="post_button" class="mt-2 rounded-lg bg-blue-500 p-2 text-white">
      Update
    </button>
  </form>
  <button>asdasd</button>
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
                
                $buffer .= $indent . '<div id="post_form" class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
                $buffer .= $indent . '  <div class="mb-4 flex items-center">
';
                $buffer .= $indent . '    <span class="mr-2"> ';
                if ($partial = $this->mustache->loadPartial('partials/sessionAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' </span>
';
                $buffer .= $indent . '    <span class="pt-0 text-lg font-semibold text-white">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->findDot('session_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '    </span>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '  <form action="/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/edit" method="post">
';
                $buffer .= $indent . '    <input type="hidden" name="post_id" value="';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '    <textarea
';
                $buffer .= $indent . '      placeholder="You changed your mind?"
';
                $buffer .= $indent . '      name="post_text"
';
                $buffer .= $indent . '      id="post_text"
';
                $buffer .= $indent . '      class="mb-2 w-full resize-none overflow-hidden rounded-lg bg-slate-700 p-2 focus:outline-none"
';
                $buffer .= $indent . '      rows="3"
';
                $buffer .= $indent . '      oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
';
                $buffer .= $indent . '    ></textarea>
';
                $buffer .= $indent . '    <div class="relative">
';
                $buffer .= $indent . '      <button
';
                $buffer .= $indent . '        type="button"
';
                $buffer .= $indent . '        id="toggleImageInput"
';
                $buffer .= $indent . '        class="absolute bottom-2 right-2 mb-2 text-gray-400 hover:text-gray-300"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        <svg
';
                $buffer .= $indent . '          xmlns="http://www.w3.org/2000/svg"
';
                $buffer .= $indent . '          class="h-6 w-6"
';
                $buffer .= $indent . '          fill="none"
';
                $buffer .= $indent . '          viewBox="0 0 24 24"
';
                $buffer .= $indent . '          stroke="currentColor"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '          <path
';
                $buffer .= $indent . '            stroke-linecap="round"
';
                $buffer .= $indent . '            stroke-linejoin="round"
';
                $buffer .= $indent . '            stroke-width="2"
';
                $buffer .= $indent . '            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
';
                $buffer .= $indent . '          />
';
                $buffer .= $indent . '        </svg>
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '      <input
';
                $buffer .= $indent . '        type="text"
';
                $buffer .= $indent . '        placeholder="Image URL"
';
                $buffer .= $indent . '        name="img"
';
                $buffer .= $indent . '        id="imageInput"
';
                $buffer .= $indent . '        class="hidden w-full rounded-lg bg-slate-700 p-2"
';
                $buffer .= $indent . '      />
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <button id="post_button" class="mt-2 rounded-lg bg-blue-500 p-2 text-white">
';
                $buffer .= $indent . '      Update
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '  </form>
';
                $buffer .= $indent . '  <button>asdasd</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
