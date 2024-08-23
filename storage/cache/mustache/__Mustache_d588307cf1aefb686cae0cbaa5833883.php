<?php

class __Mustache_d588307cf1aefb686cae0cbaa5833883 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('post');
        $buffer .= $this->sectionE86ba8a80a332e7990abb7cebef5df16($context, $indent, $value);
        $buffer .= $indent . ' ';
        $value = $context->find('post');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '<p class="text-center text-gray-400">No posts found.</p>
';
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

    private function section0c9c383bd77b39d507bf6c0b2f2466e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="http://localhost:8000/{{id_post}}/edit">
      <button
        class="rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
      >
        Edit
      </button>
    </a>
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
                
                $buffer .= $indent . '    <a href="http://localhost:8000/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/edit">
';
                $buffer .= $indent . '      <button
';
                $buffer .= $indent . '        class="rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        Edit
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE86ba8a80a332e7990abb7cebef5df16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<article class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
  <div class="mb-4 flex items-center">
    <span class="mr-2"> {{> partials/postsAvatar}} </span>
    <span class="pt-0 text-lg font-semibold text-white"> {{ username }} </span>
  </div>

  <h2 class="mb-2 text-center text-xl font-semibold text-white">{{ title }}</h2>
  <p class="mb-2 text-gray-200">{{ post_text }}</p>
  {{#img}}
  <div class="mt-4 flex w-full justify-center">
    <img
      src="{{ img }}"
      alt="{{ title }}"
      class="aspect-[5/3] w-4/5 rounded-lg object-cover"
    />
  </div>
  {{/img}}

  <p class="text-sm text-gray-300">Likes: {{ likes }}</p>
  <p class="mb-4 text-sm text-gray-300">Created at: {{ created_at }}</p>
  <div class="flex justify-center">
    <button
      class="mr-2 rounded-lg border border-red-500 px-4 py-2 text-blue-700 hover:bg-blue-600 hover:text-white"
      style="border-radius: 50%; position: relative; overflow: hidden"
    >
      <i class="fas fa-toilet"></i>
      <div
        style="
          position: absolute;
          top: -10px;
          left: -10px;
          width: 100%;
          height: 100%;
          background: transparent;
          border: 2px solid red;
          border-radius: 50%;
          clip-path: polygon(
            50% 0%,
            100% 38%,
            82% 100%,
            50% 75%,
            18% 100%,
            0% 38%
          );
        "
      ></div>
    </button>
    <a href="http://localhost:8000/{{id_post}}/comments">
      <button
        class="mr-2 rounded-lg px-4 py-2 text-blue-700 hover:bg-blue-600 hover:text-white"
      >
        <i class="fas fa-comment"></i> {{comment_count}}
      </button>
    </a>
    {{#is_owner}}
    <a href="http://localhost:8000/{{id_post}}/edit">
      <button
        class="rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
      >
        Edit
      </button>
    </a>
    {{/is_owner}}
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
                
                $buffer .= $indent . '<article class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
                $buffer .= $indent . '  <div class="mb-4 flex items-center">
';
                $buffer .= $indent . '    <span class="mr-2"> ';
                if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' </span>
';
                $buffer .= $indent . '    <span class="pt-0 text-lg font-semibold text-white"> ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= ' </span>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <h2 class="mb-2 text-center text-xl font-semibold text-white">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</h2>
';
                $buffer .= $indent . '  <p class="mb-2 text-gray-200">';
                $value = $this->resolveValue($context->find('post_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $value = $context->find('img');
                $buffer .= $this->sectionBaca6edcac90e4dfe4976efdb705b1a4($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <p class="text-sm text-gray-300">Likes: ';
                $value = $this->resolveValue($context->find('likes'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '  <p class="mb-4 text-sm text-gray-300">Created at: ';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '  <div class="flex justify-center">
';
                $buffer .= $indent . '    <button
';
                $buffer .= $indent . '      class="mr-2 rounded-lg border border-red-500 px-4 py-2 text-blue-700 hover:bg-blue-600 hover:text-white"
';
                $buffer .= $indent . '      style="border-radius: 50%; position: relative; overflow: hidden"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '      <i class="fas fa-toilet"></i>
';
                $buffer .= $indent . '      <div
';
                $buffer .= $indent . '        style="
';
                $buffer .= $indent . '          position: absolute;
';
                $buffer .= $indent . '          top: -10px;
';
                $buffer .= $indent . '          left: -10px;
';
                $buffer .= $indent . '          width: 100%;
';
                $buffer .= $indent . '          height: 100%;
';
                $buffer .= $indent . '          background: transparent;
';
                $buffer .= $indent . '          border: 2px solid red;
';
                $buffer .= $indent . '          border-radius: 50%;
';
                $buffer .= $indent . '          clip-path: polygon(
';
                $buffer .= $indent . '            50% 0%,
';
                $buffer .= $indent . '            100% 38%,
';
                $buffer .= $indent . '            82% 100%,
';
                $buffer .= $indent . '            50% 75%,
';
                $buffer .= $indent . '            18% 100%,
';
                $buffer .= $indent . '            0% 38%
';
                $buffer .= $indent . '          );
';
                $buffer .= $indent . '        "
';
                $buffer .= $indent . '      ></div>
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '    <a href="http://localhost:8000/';
                $value = $this->resolveValue($context->find('id_post'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/comments">
';
                $buffer .= $indent . '      <button
';
                $buffer .= $indent . '        class="mr-2 rounded-lg px-4 py-2 text-blue-700 hover:bg-blue-600 hover:text-white"
';
                $buffer .= $indent . '      >
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
                $value = $context->find('is_owner');
                $buffer .= $this->section0c9c383bd77b39d507bf6c0b2f2466e0($context, $indent, $value);
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
