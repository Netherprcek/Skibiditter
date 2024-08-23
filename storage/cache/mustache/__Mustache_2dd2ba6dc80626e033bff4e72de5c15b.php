<?php

class __Mustache_2dd2ba6dc80626e033bff4e72de5c15b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
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
        $buffer .= $indent . '  <form
';
        $buffer .= $indent . '    id="post_form"
';
        $buffer .= $indent . '    action="/post"
';
        $buffer .= $indent . '    method="post"
';
        $buffer .= $indent . '    enctype="multipart/form-data"
';
        $buffer .= $indent . '  >
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
        $buffer .= $indent . '      <label for="imageFileInput1" class="mb-2 block text-white"
';
        $buffer .= $indent . '        >Upload Image 1</label
';
        $buffer .= $indent . '      >
';
        $buffer .= $indent . '      <input
';
        $buffer .= $indent . '        type="file"
';
        $buffer .= $indent . '        name="image_file1"
';
        $buffer .= $indent . '        id="imageFileInput1"
';
        $buffer .= $indent . '        class="w-full rounded-lg bg-slate-700 p-2 text-white"
';
        $buffer .= $indent . '        accept="image/*"
';
        $buffer .= $indent . '      />
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="relative mb-4">
';
        $buffer .= $indent . '      <label for="imageFileInput2" class="mb-2 block text-white"
';
        $buffer .= $indent . '        >Upload Image 2</label
';
        $buffer .= $indent . '      >
';
        $buffer .= $indent . '      <input
';
        $buffer .= $indent . '        type="file"
';
        $buffer .= $indent . '        name="image_file2"
';
        $buffer .= $indent . '        id="imageFileInput2"
';
        $buffer .= $indent . '        class="w-full rounded-lg bg-slate-700 p-2 text-white"
';
        $buffer .= $indent . '        accept="image/*"
';
        $buffer .= $indent . '      />
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <button
';
        $buffer .= $indent . '      id="post_button"
';
        $buffer .= $indent . '      class="mt-2 rounded-lg bg-blue-500 p-2 px-4 text-white hover:bg-blue-600"
';
        $buffer .= $indent . '    >
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
