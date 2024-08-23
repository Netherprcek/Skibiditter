<?php

class __Mustache_c80aac885b16b580ad073a19beae24ae extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('posts');
        $buffer .= $this->section1ba23cbf68e2f573eae6c9fb578d70f3($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/post.js"></script>';

        return $buffer;
    }

    private function section1ba23cbf68e2f573eae6c9fb578d70f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="mb-6  p-6 shadow-md">
  <div class="mb-4 flex items-center">
    <a
      href="javascript:history.back()"
      class="mr-2 text-gray-400 hover:text-gray-300"
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
          d="M15 19l-7-7 7-7"
        />
      </svg>
    </a>
    <span class="mr-2"> {{> partials/sessionAvatar }} </span>
    <span class="pt-0 text-lg font-semibold text-white">
      <a
        href="/profile/{{ session_user.username }}"
        class="flex-grow pt-0 text-lg font-semibold text-white"
      >
        {{ session_user.username }}
      </a>
    </span>
  </div>
  <form id="post_form" action="/{{id_post}}/edit" method="post" enctype="multipart/form-data">
    <input type="hidden" name="post_id" value="{{id_post}}" />
    <input type="hidden" name="username" value="{{username}}" />
    <textarea
      placeholder="You dont like this? : {{post_text}}"
      name="post_text"
      id="post_text"
      class="mb-2 w-full resize-none overflow-hidden rounded-lg bg-slate-700 p-2 focus:outline-none"
      rows="3"
      oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"
    ></textarea>
    
    <div class="relative mb-4">
      <div class="flex items-center">
        <label class="cursor-pointer flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          <input
            type="file"
            name="image_file"
            id="imageFileInput"
            class="hidden"
            accept="image/*"
            onchange="validateFileSize(this)"
          />
        </label>
        <span id="fileName" class="ml-2 text-white"></span>
      </div>
    </div>

    <button id="post_button" class="mt-2 rounded-lg bg-blue-500 p-2 text-white">
      Update
    </button>
  </form>

  <form action="/{{id_post}}/delete" method="post">
    <button id="post_button" class="mt-2 rounded-lg bg-red-500 p-2 text-white">
      Delete
    </button>
  </form>

  <!-- Notification div -->
  <div id="notification" class="fixed left-1/2 top-40 z-50 hidden -translate-x-1/2 transform rounded border-l-4 border-yellow-500 bg-yellow-100 p-4 text-yellow-700 opacity-0 shadow-md transition-opacity duration-300" role="alert">
    <p id="notification-message"></p>
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
                
                $buffer .= $indent . '<div class="mb-6  p-6 shadow-md">
';
                $buffer .= $indent . '  <div class="mb-4 flex items-center">
';
                $buffer .= $indent . '    <a
';
                $buffer .= $indent . '      href="javascript:history.back()"
';
                $buffer .= $indent . '      class="mr-2 text-gray-400 hover:text-gray-300"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '      <svg
';
                $buffer .= $indent . '        xmlns="http://www.w3.org/2000/svg"
';
                $buffer .= $indent . '        class="h-6 w-6"
';
                $buffer .= $indent . '        fill="none"
';
                $buffer .= $indent . '        viewBox="0 0 24 24"
';
                $buffer .= $indent . '        stroke="currentColor"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        <path
';
                $buffer .= $indent . '          stroke-linecap="round"
';
                $buffer .= $indent . '          stroke-linejoin="round"
';
                $buffer .= $indent . '          stroke-width="2"
';
                $buffer .= $indent . '          d="M15 19l-7-7 7-7"
';
                $buffer .= $indent . '        />
';
                $buffer .= $indent . '      </svg>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <span class="mr-2"> ';
                if ($partial = $this->mustache->loadPartial('partials/sessionAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' </span>
';
                $buffer .= $indent . '    <span class="pt-0 text-lg font-semibold text-white">
';
                $buffer .= $indent . '      <a
';
                $buffer .= $indent . '        href="/profile/';
                $value = $this->resolveValue($context->findDot('session_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '        class="flex-grow pt-0 text-lg font-semibold text-white"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->findDot('session_user.username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '      </a>
';
                $buffer .= $indent . '    </span>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '  <form id="post_form" action="/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/edit" method="post" enctype="multipart/form-data">
';
                $buffer .= $indent . '    <input type="hidden" name="post_id" value="';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '    <input type="hidden" name="username" value="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '    <textarea
';
                $buffer .= $indent . '      placeholder="You dont like this? : ';
                $value = $this->resolveValue($context->find('post_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
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
                $buffer .= $indent . '    
';
                $buffer .= $indent . '    <div class="relative mb-4">
';
                $buffer .= $indent . '      <div class="flex items-center">
';
                $buffer .= $indent . '        <label class="cursor-pointer flex items-center">
';
                $buffer .= $indent . '          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
';
                $buffer .= $indent . '            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
';
                $buffer .= $indent . '          </svg>
';
                $buffer .= $indent . '          <input
';
                $buffer .= $indent . '            type="file"
';
                $buffer .= $indent . '            name="image_file"
';
                $buffer .= $indent . '            id="imageFileInput"
';
                $buffer .= $indent . '            class="hidden"
';
                $buffer .= $indent . '            accept="image/*"
';
                $buffer .= $indent . '            onchange="validateFileSize(this)"
';
                $buffer .= $indent . '          />
';
                $buffer .= $indent . '        </label>
';
                $buffer .= $indent . '        <span id="fileName" class="ml-2 text-white"></span>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <button id="post_button" class="mt-2 rounded-lg bg-blue-500 p-2 text-white">
';
                $buffer .= $indent . '      Update
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '  </form>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <form action="/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/delete" method="post">
';
                $buffer .= $indent . '    <button id="post_button" class="mt-2 rounded-lg bg-red-500 p-2 text-white">
';
                $buffer .= $indent . '      Delete
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '  </form>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <!-- Notification div -->
';
                $buffer .= $indent . '  <div id="notification" class="fixed left-1/2 top-40 z-50 hidden -translate-x-1/2 transform rounded border-l-4 border-yellow-500 bg-yellow-100 p-4 text-yellow-700 opacity-0 shadow-md transition-opacity duration-300" role="alert">
';
                $buffer .= $indent . '    <p id="notification-message"></p>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
