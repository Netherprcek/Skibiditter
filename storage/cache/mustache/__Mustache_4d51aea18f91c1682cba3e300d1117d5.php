<?php

class __Mustache_4d51aea18f91c1682cba3e300d1117d5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('post');
        $buffer .= $this->sectionD83a5990f352660752cc876d3a47f1df($context, $indent, $value);
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

    private function sectionAc07a29d89c1d1d87011a2d56b1cc943(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <span class="mr-2"> {{> partials/sessionAvatar}} </span>
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
                
                $buffer .= $indent . '      <span class="mr-2"> ';
                if ($partial = $this->mustache->loadPartial('partials/sessionAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' </span>
';
                $buffer .= $indent . '      ';
                $context->pop();
            }
        }
    
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

    private function section68d8ed37bbd4a2d3d94b3bb05211a434(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="mt-4 flex justify-center">
      <img
        src="{{ img }}"
        alt="{{ title }}"
        class="aspect-[5/3] w-full max-w-3xl rounded-lg object-cover"
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
                
                $buffer .= $indent . '    <div class="mt-4 flex justify-center">
';
                $buffer .= $indent . '      <img
';
                $buffer .= $indent . '        src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '        alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '        class="aspect-[5/3] w-full max-w-3xl rounded-lg object-cover"
';
                $buffer .= $indent . '      />
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d65804d8f5292bfdf63e3a8f17693d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-red-600';
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
                
                $buffer .= 'text-red-600';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD83a5990f352660752cc876d3a47f1df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<article class="relative mb-6 rounded-lg bg-gray-800 px-4 py-4 pb-0 shadow-md">
  <div class="mb-2 flex items-center justify-between">
    <div class="flex w-full items-center">
      {{#is_owner}}
      <span class="mr-2"> {{> partials/sessionAvatar}} </span>
      {{/is_owner}} {{^is_owner}}
      <span class="mr-2"> {{> partials/postsAvatar}} </span>
      {{/is_owner}}
      <span class="flex-grow pt-0 text-lg font-semibold text-white">
        {{ username }}
      </span>
      <span class="pr-10 pt-0 text-sm text-gray-300">{{created_at }}</span>
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

  <div class="px-6 md:px-16 mb-0">
    <p class="overflow-wrap break-word z-10 break-words text-gray-100">
      {{ post_text }}
    </p>

    {{#img}}
    <div class="mt-4 flex justify-center">
      <img
        src="{{ img }}"
        alt="{{ title }}"
        class="aspect-[5/3] w-full max-w-3xl rounded-lg object-cover"
      />
    </div>
    {{/img}}
  </div>

  <div class="flex justify-center">
    <form
      id="like-form-{{id_post}}"
      action="/{{id_post}}/like"
      method="POST"
      class="flex items-cente h-2"
    >
      <input type="hidden" name="id_post" value="{{id_post}}" />
      <input type="hidden" name="user_id" value="{{session_user.user_id}}" />
      <button
        id="like-button-{{id_post}}"
        class="mr-2 rounded-lg px-4 py-2 hover:text-red-500 {{#liked}}text-red-600{{/liked}}{{^liked}}text-white{{/liked}}"
        type="button"
        onclick="likePost(\'{{id_post}}\')"
      >
        <i class="fas fa-toilet"></i>
        <span id="like-count-{{id_post}}">{{likes}}</span>
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
                
                $buffer .= $indent . '<article class="relative mb-6 rounded-lg bg-gray-800 px-4 py-4 pb-0 shadow-md">
';
                $buffer .= $indent . '  <div class="mb-2 flex items-center justify-between">
';
                $buffer .= $indent . '    <div class="flex w-full items-center">
';
                $value = $context->find('is_owner');
                $buffer .= $this->sectionAc07a29d89c1d1d87011a2d56b1cc943($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('is_owner');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    $buffer .= $indent . '      <span class="mr-2"> ';
                    if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
                        $buffer .= $partial->renderInternal($context);
                    }
                    $buffer .= ' </span>
';
                }
                $buffer .= $indent . '      <span class="flex-grow pt-0 text-lg font-semibold text-white">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '      </span>
';
                $buffer .= $indent . '      <span class="pr-10 pt-0 text-sm text-gray-300">';
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
                $buffer .= $indent . '  <div class="px-6 md:px-16 mb-0">
';
                $buffer .= $indent . '    <p class="overflow-wrap break-word z-10 break-words text-gray-100">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('post_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '    </p>
';
                $buffer .= $indent . '
';
                $value = $context->find('img');
                $buffer .= $this->section68d8ed37bbd4a2d3d94b3bb05211a434($context, $indent, $value);
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="flex justify-center">
';
                $buffer .= $indent . '    <form
';
                $buffer .= $indent . '      id="like-form-';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '      action="/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/like"
';
                $buffer .= $indent . '      method="POST"
';
                $buffer .= $indent . '      class="flex items-cente h-2"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '      <input type="hidden" name="id_post" value="';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '      <input type="hidden" name="user_id" value="';
                $value = $this->resolveValue($context->findDot('session_user.user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '      <button
';
                $buffer .= $indent . '        id="like-button-';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '        class="mr-2 rounded-lg px-4 py-2 hover:text-red-500 ';
                $value = $context->find('liked');
                $buffer .= $this->section7d65804d8f5292bfdf63e3a8f17693d2($context, $indent, $value);
                $value = $context->find('liked');
                if (empty($value)) {
                    
                    $buffer .= 'text-white';
                }
                $buffer .= '"
';
                $buffer .= $indent . '        type="button"
';
                $buffer .= $indent . '        onclick="likePost(\'';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '\')"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        <i class="fas fa-toilet"></i>
';
                $buffer .= $indent . '        <span id="like-count-';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('likes'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span>
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
