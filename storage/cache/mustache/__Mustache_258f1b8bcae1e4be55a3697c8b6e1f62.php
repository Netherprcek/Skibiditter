<?php

class __Mustache_258f1b8bcae1e4be55a3697c8b6e1f62 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('posts');
        $buffer .= $this->section91d5d624c205692ab747f5704795a762($context, $indent, $value);
        $buffer .= $indent . ' ';
        $value = $context->find('posts');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '<p class="text-center text-gray-400">No posts found.</p>
';
        }

        return $buffer;
    }

    private function section58c4cd0a6abaac345ecb3130c1acb4d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="mt-4 flex w-full justify-center">
    <img
      src="{{ img }}"
      alt="{{ post_text }}"
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
                $value = $this->resolveValue($context->find('post_text'), $context);
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

    private function section91d5d624c205692ab747f5704795a762(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<article class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
  <div class="mb-4 flex items-center">
    <span class="mr-2">
      <img src="{{ avatar }}" alt="{{ username }}" class="rounded-full w-10 h-10" />
    </span>
    <span class="pt-0 text-lg font-semibold text-white"> {{ username }} </span>
  </div>

  <p class="mb-2 text-gray-200">{{ post_text }}</p>
  {{#img}}
  <div class="mt-4 flex w-full justify-center">
    <img
      src="{{ img }}"
      alt="{{ post_text }}"
      class="aspect-[5/3] w-4/5 rounded-lg object-cover"
    />
  </div>
  {{/img}}

  <p class="text-sm text-gray-300">Likes: {{ likes }}</p>
  <p class="mb-4 text-sm text-gray-300">Created at: {{ created_at }}</p>
  <div class="flex justify-center">
    <button
      class="mr-2 rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
    >
      Like
    </button>
    <button
      class="mr-2 rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
    >
      Comment
    </button>
    <button
      class="rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
    >
      Edit
    </button>
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
                $buffer .= $indent . '    <span class="mr-2">
';
                $buffer .= $indent . '      <img src="';
                $value = $this->resolveValue($context->find('avatar'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" class="rounded-full w-10 h-10" />
';
                $buffer .= $indent . '    </span>
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
                $buffer .= $indent . '  <p class="mb-2 text-gray-200">';
                $value = $this->resolveValue($context->find('post_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $value = $context->find('img');
                $buffer .= $this->section58c4cd0a6abaac345ecb3130c1acb4d8($context, $indent, $value);
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
                $buffer .= $indent . '      class="mr-2 rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '      Like
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '    <button
';
                $buffer .= $indent . '      class="mr-2 rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '      Comment
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '    <button
';
                $buffer .= $indent . '      class="rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '      Edit
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</article>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
