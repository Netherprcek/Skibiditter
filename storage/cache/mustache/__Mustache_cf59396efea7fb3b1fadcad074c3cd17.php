<?php

class __Mustache_cf59396efea7fb3b1fadcad074c3cd17 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('post');
        $buffer .= $this->sectionF74e662bc99e55df1998cc0fc93733c8($context, $indent, $value);
        $buffer .= $indent . ' ';
        $value = $context->find('post');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '<p class="text-center text-gray-400">No posts found.</p>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/buttons.js"></script>
';

        return $buffer;
    }

    private function sectionEae24bf0fea151661a317baeb65e30c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="relative">
      <button class="text-white" onclick="toggleOptions(\'{{id_post}}\', event)">
        <i class="fas fa-ellipsis-v"></i>
      </button>
      <div
        id="options-{{id_post}}"
        class="absolute right-0 mt-2 hidden w-48 rounded-lg bg-gray-700 shadow-lg"
      >
        <a
          href="http://localhost:8000/{{id_post}}/edit"
          class="block px-4 py-2 text-white hover:bg-gray-600"
        >
          Edit
        </a>
        <form action="/{{id_post}}/delete" method="POST" class="m-0 block">
          <input type="hidden" name="post_id" value="{{id_post}}" />
          <input type="hidden" name="username" value="{{username}}" />
          <button
            type="submit"
            class="w-full px-4 py-2 text-left text-white hover:bg-gray-600"
          >
            Delete
          </button>
        </form>
      </div>
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
                
                $buffer .= $indent . '    <div class="relative">
';
                $buffer .= $indent . '      <button class="text-white" onclick="toggleOptions(\'';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '\', event)">
';
                $buffer .= $indent . '        <i class="fas fa-ellipsis-v"></i>
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '      <div
';
                $buffer .= $indent . '        id="options-';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '        class="absolute right-0 mt-2 hidden w-48 rounded-lg bg-gray-700 shadow-lg"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        <a
';
                $buffer .= $indent . '          href="http://localhost:8000/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/edit"
';
                $buffer .= $indent . '          class="block px-4 py-2 text-white hover:bg-gray-600"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '          Edit
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <form action="/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/delete" method="POST" class="m-0 block">
';
                $buffer .= $indent . '          <input type="hidden" name="post_id" value="';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '          <input type="hidden" name="username" value="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '          <button
';
                $buffer .= $indent . '            type="submit"
';
                $buffer .= $indent . '            class="w-full px-4 py-2 text-left text-white hover:bg-gray-600"
';
                $buffer .= $indent . '          >
';
                $buffer .= $indent . '            Delete
';
                $buffer .= $indent . '          </button>
';
                $buffer .= $indent . '        </form>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBaca6edcac90e4dfe4976efdb705b1a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="mt-4 flex w-full justify-center">
    <img
      src="{{ img }}"
      alt="{{ title }}"
      class="aspect-[5/3] w-4/5 rounded-lg object-cover"
    />
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
                
                $buffer .= $indent . '  <div class="mt-4 flex w-full justify-center">
';
                $buffer .= $indent . '    <img
';
                $buffer .= $indent . '      src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '      alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '      class="aspect-[5/3] w-4/5 rounded-lg object-cover"
';
                $buffer .= $indent . '    />
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF74e662bc99e55df1998cc0fc93733c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<article class="relative mb-6 rounded-lg bg-gray-800 p-6 pb-0 shadow-md">
  <div class="mb-4 flex items-center justify-between">
    <div class="flex items-center w-full">
      <span class="mr-2"> {{> partials/postsAvatar}} </span>
      <span class="pt-0 text-lg font-semibold text-white flex-grow">
        {{ username }}
      </span>
      <span class="text-sm pt-0 pr-10 text-gray-300">Created at: {{ created_at }}</span>
    </div>
    {{#is_owner}}
    <div class="relative">
      <button class="text-white" onclick="toggleOptions(\'{{id_post}}\', event)">
        <i class="fas fa-ellipsis-v"></i>
      </button>
      <div
        id="options-{{id_post}}"
        class="absolute right-0 mt-2 hidden w-48 rounded-lg bg-gray-700 shadow-lg"
      >
        <a
          href="http://localhost:8000/{{id_post}}/edit"
          class="block px-4 py-2 text-white hover:bg-gray-600"
        >
          Edit
        </a>
        <form action="/{{id_post}}/delete" method="POST" class="m-0 block">
          <input type="hidden" name="post_id" value="{{id_post}}" />
          <input type="hidden" name="username" value="{{username}}" />
          <button
            type="submit"
            class="w-full px-4 py-2 text-left text-white hover:bg-gray-600"
          >
            Delete
          </button>
        </form>
      </div>
    </div>
    {{/is_owner}}
  </div>

  
  <p class="mb-2 px-14  text-gray-200">{{ post_text }}</p>
  {{#img}}
  <div class="mt-4 flex w-full justify-center">
    <img
      src="{{ img }}"
      alt="{{ title }}"
      class="aspect-[5/3] w-4/5 rounded-lg object-cover"
    />
  </div>
  {{/img}}

  <div class="flex justify-center">
    <form action="/{{id_post}}/like" method="POST" class="flex items-center">
      <input type="hidden" name="post_id" value="{{id_post}}" />
      <input type="hidden" name="username" value="{{username}}" />
      <button class="mr-2 rounded-lg px-4 py-2 text-white hover:text-blue-600">
        <i class="fas fa-toilet"></i> {{likes}}
      </button>
    </form>
    <a href="http://localhost:8000/{{id_post}}/comments">
      <button class="mr-2 rounded-lg px-4 py-2 text-white hover:text-blue-600">
        <i class="fas fa-comment"></i> {{comment_count}}
      </button>
    </a>
  </div>
</article>

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
                
                $buffer .= $indent . '<article class="relative mb-6 rounded-lg bg-gray-800 p-6 pb-0 shadow-md">
';
                $buffer .= $indent . '  <div class="mb-4 flex items-center justify-between">
';
                $buffer .= $indent . '    <div class="flex items-center w-full">
';
                $buffer .= $indent . '      <span class="mr-2"> ';
                if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' </span>
';
                $buffer .= $indent . '      <span class="pt-0 text-lg font-semibold text-white flex-grow">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '      </span>
';
                $buffer .= $indent . '      <span class="text-sm pt-0 pr-10 text-gray-300">Created at: ';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span>
';
                $buffer .= $indent . '    </div>
';
                $value = $context->find('is_owner');
                $buffer .= $this->sectionEae24bf0fea151661a317baeb65e30c9($context, $indent, $value);
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  
';
                $buffer .= $indent . '  <p class="mb-2 px-14  text-gray-200">';
                $value = $this->resolveValue($context->find('post_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $value = $context->find('img');
                $buffer .= $this->sectionBaca6edcac90e4dfe4976efdb705b1a4($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="flex justify-center">
';
                $buffer .= $indent . '    <form action="/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/like" method="POST" class="flex items-center">
';
                $buffer .= $indent . '      <input type="hidden" name="post_id" value="';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '      <input type="hidden" name="username" value="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '      <button class="mr-2 rounded-lg px-4 py-2 text-white hover:text-blue-600">
';
                $buffer .= $indent . '        <i class="fas fa-toilet"></i> ';
                $value = $this->resolveValue($context->find('likes'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '    </form>
';
                $buffer .= $indent . '    <a href="http://localhost:8000/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/comments">
';
                $buffer .= $indent . '      <button class="mr-2 rounded-lg px-4 py-2 text-white hover:text-blue-600">
';
                $buffer .= $indent . '        <i class="fas fa-comment"></i> ';
                $value = $this->resolveValue($context->find('comment_count'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</article>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
