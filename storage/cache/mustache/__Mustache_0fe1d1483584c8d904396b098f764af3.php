<?php

class __Mustache_0fe1d1483584c8d904396b098f764af3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<html lang="en">
';
        $buffer .= $indent . '  <head>
';
        $buffer .= $indent . '    <meta charset="UTF-8" />
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
';
        $buffer .= $indent . '    <link rel="stylesheet" href="/css/output.css" />
';
        $buffer .= $indent . '    <title>Home Page</title>
';
        $buffer .= $indent . '  </head>
';
        $buffer .= $indent . '  <body class="bg-gray-900 text-white">
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '      class="top-0 fixed left-0 right-0 flex justify-between items-center p-4 bg-gray-800 z-10"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '      <div class="w-1/3"></div>
';
        $buffer .= $indent . '      <p class="text-2xl font-bold text-center text-blue-500">SKIBIDITTER</p>
';
        $buffer .= $indent . '      <div class="w-1/3 flex justify-end">
';
        $buffer .= $indent . '        <img
';
        $buffer .= $indent . '          src="/path/to/avatar.jpg"
';
        $buffer .= $indent . '          alt="Profile Avatar"
';
        $buffer .= $indent . '          class="w-10 h-10 rounded-full object-cover"
';
        $buffer .= $indent . '        />
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Add a spacer to prevent content from being hidden behind the fixed navbar -->
';
        $buffer .= $indent . '    <div class="h-16"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div style="display: flex; justify-content: center; width: 100%">
';
        $buffer .= $indent . '      <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
        $buffer .= $indent . '        <h1 class="text-3xl font-bold mb-6 text-center text-white">Posts</h1>
';
        $value = $context->find('posts');
        $buffer .= $this->section0f4b06773fe2044ecaa1bc25101fa08a($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('posts');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '        <p class="text-gray-400 text-center">No posts found.</p>
';
        }
        $buffer .= $indent . '        <div class="bg-purple-700 p-4 m-4">
';
        $buffer .= $indent . '          Test div to check if changes are applied
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function sectionAc84cfd02d56abbd95f06b7b9e23eb1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="w-full flex justify-center mt-4">
            <img
              src="{{ img }}"
              alt="{{ title }}"
              class="w-4/5 aspect-[5/3] object-cover rounded-lg"
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
                
                $buffer .= $indent . '          <div class="w-full flex justify-center mt-4">
';
                $buffer .= $indent . '            <img
';
                $buffer .= $indent . '              src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '              alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '              class="w-4/5 aspect-[5/3] object-cover rounded-lg"
';
                $buffer .= $indent . '            />
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f4b06773fe2044ecaa1bc25101fa08a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <article class="bg-gray-800 shadow-md rounded-lg p-6 mb-6">
          <h2 class="text-xl font-semibold mb-2 text-center text-white">
            {{ title }}
          </h2>
          <p class="text-sm text-gray-300 text-center">{{ tag }}</p>
          <p class="text-gray-200 mb-2">{{ description }}</p>
          {{#img}}
          <div class="w-full flex justify-center mt-4">
            <img
              src="{{ img }}"
              alt="{{ title }}"
              class="w-4/5 aspect-[5/3] object-cover rounded-lg"
            />
          </div>
          {{/img}}
          <p class="text-sm text-gray-300">By: {{ username }}</p>
          <p class="text-sm text-gray-300">Likes: {{ likes }}</p>
          <p class="text-sm text-gray-300 mb-4">Created at: {{ created_at }}</p>
          <div class="flex justify-center">
            <button
              class="bg-blue-700 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-600"
            >
              Like
            </button>
            <button
              class="bg-blue-700 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-600"
            >
              Comment
            </button>
            <button
              class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-600"
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
                
                $buffer .= $indent . '        <article class="bg-gray-800 shadow-md rounded-lg p-6 mb-6">
';
                $buffer .= $indent . '          <h2 class="text-xl font-semibold mb-2 text-center text-white">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '          </h2>
';
                $buffer .= $indent . '          <p class="text-sm text-gray-300 text-center">';
                $value = $this->resolveValue($context->find('tag'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p class="text-gray-200 mb-2">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $value = $context->find('img');
                $buffer .= $this->sectionAc84cfd02d56abbd95f06b7b9e23eb1c($context, $indent, $value);
                $buffer .= $indent . '          <p class="text-sm text-gray-300">By: ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p class="text-sm text-gray-300">Likes: ';
                $value = $this->resolveValue($context->find('likes'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p class="text-sm text-gray-300 mb-4">Created at: ';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <div class="flex justify-center">
';
                $buffer .= $indent . '            <button
';
                $buffer .= $indent . '              class="bg-blue-700 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-600"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '              Like
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '            <button
';
                $buffer .= $indent . '              class="bg-blue-700 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-600"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '              Comment
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '            <button
';
                $buffer .= $indent . '              class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-600"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '              Edit
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </article>
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
