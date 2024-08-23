<?php

class __Mustache_1a67244222c2cc8eba83cb5bba7f156a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->section21b2fbacf8a263c160d4929d01780030($context, $indent, $value);
        $buffer .= $indent . ' ';
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/post.js"></script>
';

        return $buffer;
    }

    private function section21b2fbacf8a263c160d4929d01780030(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/header}}
<title>{{session_user.username}} - Edit Profile</title>

<div class="mt-16 flex w-full">
  {{> partials/leftBar}}
  <div id="center_column" class="flex w-1/3 justify-center">
    <div class="border-x-2 border-gray-800 max-w-2xl w-full">
      {{> partials/profileCard}}
      <h1 class="mb-6 text-center text-3xl font-bold text-white">
        {{pageTitle}}
      </h1>
      <form
        id="edit_form"
        action="/{{username}}/edit-profile"
        method="post"
        enctype="multipart/form-data"
        class="relative mx-4 mb-4"
      >
        <div class="relative mb-4 grid grid-cols-2 gap-2">
          <div class="flex flex-col items-center">
            <label for="avatarFileInput" class="mb-2 block text-white"
              >Avatar</label
            >
            <label class="flex cursor-pointer flex-col items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-12 w-12 text-white hover:text-blue-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 4.5a4.5 4.5 0 110 9 4.5 4.5 0 010-9zM12 14.5a7.5 7.5 0 00-7.5 7.5h15a7.5 7.5 0 00-7.5-7.5z"
                />
              </svg>
              <input
                type="file"
                name="avatar_file"
                id="avatarFileInput"
                class="hidden"
                accept="image/*"
                onchange="displayFileName(this, \'avatarFileName\')"
              />
            </label>
            <span id="avatarFileName" class="mt-2 text-white"></span>
          </div>

          <div class="flex flex-col items-center">
            <label for="backgroundFileInput" class="mb-2 block text-white"
              >Background</label
            >
            <label class="flex cursor-pointer flex-col items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-12 w-12 text-white hover:text-blue-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 7h18M3 12h18M3 17h18"
                />
              </svg>
              <input
                type="file"
                name="background_file"
                id="backgroundFileInput"
                class="hidden"
                accept="image/*"
                onchange="displayFileName(this, \'backgroundFileName\')"
              />
            </label>
            <span id="backgroundFileName" class="mt-2 text-white"></span>
          </div>
        </div>

        <div class="flex justify-center">
          <button
            type="submit"
            class="mt-6 rounded-lg bg-blue-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
          >
            Update
          </button>
        </div>
      </form>
      <div
        id="notification"
        class="fixed left-1/2 top-80 z-50 hidden -translate-x-1/2 transform rounded border-l-4 border-yellow-500 bg-yellow-100 p-4 text-yellow-700 opacity-0 shadow-md transition-opacity duration-300"
        role="alert"
      >
        <p id="notification-message"></p>
      </div>
    </div>
  </div>
  {{> partials/rightBar}}
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
                if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $buffer .= $indent . '  <div id="center_column" class="flex w-1/3 justify-center">
';
                $buffer .= $indent . '    <div class="border-x-2 border-gray-800 max-w-2xl w-full">
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
                $buffer .= $indent . '      <form
';
                $buffer .= $indent . '        id="edit_form"
';
                $buffer .= $indent . '        action="/';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/edit-profile"
';
                $buffer .= $indent . '        method="post"
';
                $buffer .= $indent . '        enctype="multipart/form-data"
';
                $buffer .= $indent . '        class="relative mx-4 mb-4"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        <div class="relative mb-4 grid grid-cols-2 gap-2">
';
                $buffer .= $indent . '          <div class="flex flex-col items-center">
';
                $buffer .= $indent . '            <label for="avatarFileInput" class="mb-2 block text-white"
';
                $buffer .= $indent . '              >Avatar</label
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '            <label class="flex cursor-pointer flex-col items-center">
';
                $buffer .= $indent . '              <svg
';
                $buffer .= $indent . '                xmlns="http://www.w3.org/2000/svg"
';
                $buffer .= $indent . '                class="h-12 w-12 text-white hover:text-blue-300"
';
                $buffer .= $indent . '                fill="none"
';
                $buffer .= $indent . '                viewBox="0 0 24 24"
';
                $buffer .= $indent . '                stroke="currentColor"
';
                $buffer .= $indent . '              >
';
                $buffer .= $indent . '                <path
';
                $buffer .= $indent . '                  stroke-linecap="round"
';
                $buffer .= $indent . '                  stroke-linejoin="round"
';
                $buffer .= $indent . '                  stroke-width="2"
';
                $buffer .= $indent . '                  d="M12 4.5a4.5 4.5 0 110 9 4.5 4.5 0 010-9zM12 14.5a7.5 7.5 0 00-7.5 7.5h15a7.5 7.5 0 00-7.5-7.5z"
';
                $buffer .= $indent . '                />
';
                $buffer .= $indent . '              </svg>
';
                $buffer .= $indent . '              <input
';
                $buffer .= $indent . '                type="file"
';
                $buffer .= $indent . '                name="avatar_file"
';
                $buffer .= $indent . '                id="avatarFileInput"
';
                $buffer .= $indent . '                class="hidden"
';
                $buffer .= $indent . '                accept="image/*"
';
                $buffer .= $indent . '                onchange="displayFileName(this, \'avatarFileName\')"
';
                $buffer .= $indent . '              />
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '            <span id="avatarFileName" class="mt-2 text-white"></span>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          <div class="flex flex-col items-center">
';
                $buffer .= $indent . '            <label for="backgroundFileInput" class="mb-2 block text-white"
';
                $buffer .= $indent . '              >Background</label
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '            <label class="flex cursor-pointer flex-col items-center">
';
                $buffer .= $indent . '              <svg
';
                $buffer .= $indent . '                xmlns="http://www.w3.org/2000/svg"
';
                $buffer .= $indent . '                class="h-12 w-12 text-white hover:text-blue-300"
';
                $buffer .= $indent . '                fill="none"
';
                $buffer .= $indent . '                viewBox="0 0 24 24"
';
                $buffer .= $indent . '                stroke="currentColor"
';
                $buffer .= $indent . '              >
';
                $buffer .= $indent . '                <path
';
                $buffer .= $indent . '                  stroke-linecap="round"
';
                $buffer .= $indent . '                  stroke-linejoin="round"
';
                $buffer .= $indent . '                  stroke-width="2"
';
                $buffer .= $indent . '                  d="M3 7h18M3 12h18M3 17h18"
';
                $buffer .= $indent . '                />
';
                $buffer .= $indent . '              </svg>
';
                $buffer .= $indent . '              <input
';
                $buffer .= $indent . '                type="file"
';
                $buffer .= $indent . '                name="background_file"
';
                $buffer .= $indent . '                id="backgroundFileInput"
';
                $buffer .= $indent . '                class="hidden"
';
                $buffer .= $indent . '                accept="image/*"
';
                $buffer .= $indent . '                onchange="displayFileName(this, \'backgroundFileName\')"
';
                $buffer .= $indent . '              />
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '            <span id="backgroundFileName" class="mt-2 text-white"></span>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="flex justify-center">
';
                $buffer .= $indent . '          <button
';
                $buffer .= $indent . '            type="submit"
';
                $buffer .= $indent . '            class="mt-6 rounded-lg bg-blue-600 px-4 py-2 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
';
                $buffer .= $indent . '          >
';
                $buffer .= $indent . '            Update
';
                $buffer .= $indent . '          </button>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </form>
';
                $buffer .= $indent . '      <div
';
                $buffer .= $indent . '        id="notification"
';
                $buffer .= $indent . '        class="fixed left-1/2 top-80 z-50 hidden -translate-x-1/2 transform rounded border-l-4 border-yellow-500 bg-yellow-100 p-4 text-yellow-700 opacity-0 shadow-md transition-opacity duration-300"
';
                $buffer .= $indent . '        role="alert"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        <p id="notification-message"></p>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </div>
';
                if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
