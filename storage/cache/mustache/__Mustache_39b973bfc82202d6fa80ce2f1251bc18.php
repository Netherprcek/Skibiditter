<?php

class __Mustache_39b973bfc82202d6fa80ce2f1251bc18 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="  p-6 border-2 border-gray-800">
';
        $buffer .= $indent . '  <div class="mb-4 flex items-center">
';
        $buffer .= $indent . '    <span class=""> ';
        if ($partial = $this->mustache->loadPartial('partials/sessionAvatar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= ' </span>
';
        $buffer .= $indent . '    <span class="pt-0 text-lg font-semibold text-white">
';
        $buffer .= $indent . '      <a href="/profile/';
        $value = $this->resolveValue($context->findDot('session_user.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '" class="flex-grow pt-0 text-lg font-semibold text-white">
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
        $buffer .= $indent . '  <form id="post_form" action="/post" method="post" enctype="multipart/form-data">
';
        $buffer .= $indent . '    <textarea
';
        $buffer .= $indent . '      placeholder="What\'s on your mind?"
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
        $buffer .= $indent . '    <button id="post_button" class="mt-2 px-4 rounded-lg bg-blue-500 p-2 text-white hover:bg-blue-600">
';
        $buffer .= $indent . '      Post
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '  </form>
';
        $buffer .= $indent . '  <p id="post_error" class="mt-2 text-orange-400"></p>
';
        $value = $context->find('post_error');
        $buffer .= $this->sectionF3e9b8cc610cadf5c0b5c443c369d2fa($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div id="notification" class="fixed left-1/2 top-24 z-50 hidden -translate-x-1/2 transform rounded border-l-4 border-yellow-500 bg-yellow-100 p-4 text-yellow-700 opacity-0 shadow-md transition-opacity duration-300" role="alert">
';
        $buffer .= $indent . '    <p id="notification-message"></p>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/post.js"></script>
';

        return $buffer;
    }

    private function sectionF3e9b8cc610cadf5c0b5c443c369d2fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <p class="mt-2 text-orange-400">{{.}}</p>
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
                
                $buffer .= $indent . '  <p class="mt-2 text-orange-400">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
