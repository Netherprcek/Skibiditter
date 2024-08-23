<?php

class __Mustache_f9039299a6e02482ac8f2e388633f3e1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('session_user');
        $buffer .= $this->section50fa4b88d01a989f50ea949f728eb59e($context, $indent, $value);
        $value = $context->find('session_user');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('login')) {
                $buffer .= $partial->renderInternal($context);
            }
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/post.js"></script>';

        return $buffer;
    }

    private function section50fa4b88d01a989f50ea949f728eb59e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 
{{> partials/header}}
<title>{{session_user.username}} - Edit Profile</title>

<div class="mt-16 flex w-full">
  {{> partials/leftBar}} 
  <div id="center_column" class="flex w-1/3 justify-center">
    <div style="width: 100%; max-width: 42rem">
      {{> partials/profileCard}}
      <h1 class="mb-6 text-center text-3xl font-bold text-white">
        {{pageTitle}}
      </h1>
      <form id="edit_form" action="/{{username}}/edit-profile" method="post" enctype="multipart/form-data" class="relative mb-4 mx-4">
        <div class="relative mb-4">
          <label for="avatarFileInput" class="block text-white mb-2">Upload Avatar</label>
          <div class="flex items-center">
            <label class="cursor-pointer flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <input
                type="file"
                name="avatar_file"
                id="avatarFileInput"
                class="hidden"
                accept="image/*"
                onchange="validateFileSize(this, \'avatarFileName\')"
              />
            </label>
            <span id="avatarFileName" class="ml-2 text-white"></span>
          </div>
        </div>
        
        <div class="relative mb-4">
          <label for="backgroundFileInput" class="block text-white mb-2">Upload Background</label>
          <div class="flex items-center">
            <label class="cursor-pointer flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <input
                type="file"
                name="background_file"
                id="backgroundFileInput"
                class="hidden"
                accept="image/*"
                onchange="validateFileSize(this, \'backgroundFileName\')"
              />
            </label>
            <span id="backgroundFileName" class="ml-2 text-white"></span>
          </div>
        </div>
        
        <button
          type="submit"
          class="rounded-lg bg-blue-600 px-4 py-2 mt-6 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
        >
          Update
        </button>
      </form>
      <div id="notification" class="fixed left-1/2 top-50 z-50 hidden -translate-x-1/2 transform rounded border-l-4 border-yellow-500 bg-yellow-100 p-4 text-yellow-700 opacity-0 shadow-md transition-opacity duration-300" role="alert">
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
                
                if ($partial = $this->mustache->loadPartial('partials/header')) {
                    $buffer .= $partial->renderInternal($context);
                }
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
                $buffer .= '/edit-profile" method="post" enctype="multipart/form-data" class="relative mb-4 mx-4">
';
                $buffer .= $indent . '        <div class="relative mb-4">
';
                $buffer .= $indent . '          <label for="avatarFileInput" class="block text-white mb-2">Upload Avatar</label>
';
                $buffer .= $indent . '          <div class="flex items-center">
';
                $buffer .= $indent . '            <label class="cursor-pointer flex items-center">
';
                $buffer .= $indent . '              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
';
                $buffer .= $indent . '                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
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
                $buffer .= $indent . '                onchange="validateFileSize(this, \'avatarFileName\')"
';
                $buffer .= $indent . '              />
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '            <span id="avatarFileName" class="ml-2 text-white"></span>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        <div class="relative mb-4">
';
                $buffer .= $indent . '          <label for="backgroundFileInput" class="block text-white mb-2">Upload Background</label>
';
                $buffer .= $indent . '          <div class="flex items-center">
';
                $buffer .= $indent . '            <label class="cursor-pointer flex items-center">
';
                $buffer .= $indent . '              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
';
                $buffer .= $indent . '                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
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
                $buffer .= $indent . '                onchange="validateFileSize(this, \'backgroundFileName\')"
';
                $buffer .= $indent . '              />
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '            <span id="backgroundFileName" class="ml-2 text-white"></span>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        <button
';
                $buffer .= $indent . '          type="submit"
';
                $buffer .= $indent . '          class="rounded-lg bg-blue-600 px-4 py-2 mt-6 text-white transition duration-300 ease-in-out text-shadow-default hover:bg-blue-700"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '          Update
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '      </form>
';
                $buffer .= $indent . '      <div id="notification" class="fixed left-1/2 top-50 z-50 hidden -translate-x-1/2 transform rounded border-l-4 border-yellow-500 bg-yellow-100 p-4 text-yellow-700 opacity-0 shadow-md transition-opacity duration-300" role="alert">
';
                $buffer .= $indent . '    <p id="notification-message"></p>
';
                $buffer .= $indent . '  </div>
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
