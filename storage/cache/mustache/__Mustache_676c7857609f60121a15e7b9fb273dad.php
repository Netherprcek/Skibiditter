<?php

class __Mustache_676c7857609f60121a15e7b9fb273dad extends Mustache_Template
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
        if ($partial = $this->mustache->loadPartial('partials/dashboard')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Add a spacer to prevent content from being hidden behind the fixed navbar -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="h-16"></div>
';
        $buffer .= $indent . '    <div class="flex w-full">
';
        $buffer .= $indent . '      <div id="left_column" class="flex w-1/4"></div>
';
        $buffer .= $indent . '      <!-- 25% width -->
';
        $buffer .= $indent . '      <div id="center_column" class="flex w-1/2 justify-center">
';
        $buffer .= $indent . '        <!-- 50% width -->
';
        $buffer .= $indent . '        <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
        $buffer .= $indent . '          <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
        $buffer .= $indent . '            Home Page
';
        $buffer .= $indent . '          </h1>
';
        $buffer .= $indent . '          <div id="post_form" class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
        $buffer .= $indent . '            <form>
';
        $buffer .= $indent . '              <input type="text" placeholder="Title" />
';
        $buffer .= $indent . '              <input type="text" placeholder="Description" />
';
        $buffer .= $indent . '              <input type="text" placeholder="Image" />
';
        $buffer .= $indent . '            </form>
';
        $buffer .= $indent . '          </div>
';
        $value = $context->find('posts');
        $buffer .= $this->section1d20de3843d92c7617bacaec6cf38f4f($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('posts');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '          <p class="text-center text-gray-400">No posts found.</p>
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div id="right_column" class="flex w-1/4"></div>
';
        $buffer .= $indent . '      <!-- 25% width -->
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function sectionB9722e14bfc9fba6fecd6fd49bccbbcf(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '            <div class="mt-4 flex w-full justify-center">
';
                $buffer .= $indent . '              <img
';
                $buffer .= $indent . '                src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '                alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '                class="aspect-[5/3] w-4/5 rounded-lg object-cover"
';
                $buffer .= $indent . '              />
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d20de3843d92c7617bacaec6cf38f4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <article class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
            <h2 class="text-lg font-semibold text-gray-300">{{ username }}:</h2>
            <h2 class="mb-2 text-center text-xl font-semibold text-white">
              {{ title }}
            </h2>
            <p class="text-center text-sm text-gray-300">{{ tag }}</p>
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
            <p class="mb-4 text-sm text-gray-300">
              Created at: {{ created_at }}
            </p>
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
                
                $buffer .= $indent . '          <article class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
                $buffer .= $indent . '            <h2 class="text-lg font-semibold text-gray-300">';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= ':</h2>
';
                $buffer .= $indent . '            <h2 class="mb-2 text-center text-xl font-semibold text-white">
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '            </h2>
';
                $buffer .= $indent . '            <p class="text-center text-sm text-gray-300">';
                $value = $this->resolveValue($context->find('tag'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p class="mb-2 text-gray-200">';
                $value = $this->resolveValue($context->find('post_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $value = $context->find('img');
                $buffer .= $this->sectionB9722e14bfc9fba6fecd6fd49bccbbcf($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <p class="text-sm text-gray-300">Likes: ';
                $value = $this->resolveValue($context->find('likes'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p class="mb-4 text-sm text-gray-300">
';
                $buffer .= $indent . '              Created at: ';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '            </p>
';
                $buffer .= $indent . '            <div class="flex justify-center">
';
                $buffer .= $indent . '              <button
';
                $buffer .= $indent . '                class="mr-2 rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
';
                $buffer .= $indent . '              >
';
                $buffer .= $indent . '                Like
';
                $buffer .= $indent . '              </button>
';
                $buffer .= $indent . '              <button
';
                $buffer .= $indent . '                class="mr-2 rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
';
                $buffer .= $indent . '              >
';
                $buffer .= $indent . '                Comment
';
                $buffer .= $indent . '              </button>
';
                $buffer .= $indent . '              <button
';
                $buffer .= $indent . '                class="rounded-lg bg-blue-700 px-4 py-2 text-white hover:bg-blue-600"
';
                $buffer .= $indent . '              >
';
                $buffer .= $indent . '                Edit
';
                $buffer .= $indent . '              </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </article>
';
                $buffer .= $indent . '          ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
