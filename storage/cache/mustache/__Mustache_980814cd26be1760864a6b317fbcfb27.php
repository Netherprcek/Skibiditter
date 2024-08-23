<?php

class __Mustache_980814cd26be1760864a6b317fbcfb27 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<title>Home Page</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="flex w-full">
';
        $buffer .= $indent . '      <div id="left_column" class="flex w-1/4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div id="center_column" class="flex w-1/2 justify-center">
';
        $buffer .= $indent . '        <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
        $buffer .= $indent . '          <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
        $buffer .= $indent . '            Home Page 
';
        $buffer .= $indent . '          </h1>
';
        $buffer .= $indent . '          ';
        $buffer .= ' ';
        $value = $context->find('user');
        $buffer .= $this->sectionBc7b1cc1df8748fdd808dfed762d03f4($context, $indent, $value);
        $buffer .= ' ';
        $buffer .= ' ';
        $value = $context->find('posts');
        $buffer .= $this->section42404e0f5f58cb20cb25da2ea63ca59d($context, $indent, $value);
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

    private function sectionBc7b1cc1df8748fdd808dfed762d03f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/postForm}}
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
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('partials/postForm')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $buffer .= $indent . '          ';
                $context->pop();
            }
        }
    
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

    private function section42404e0f5f58cb20cb25da2ea63ca59d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <article class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
            <div class="mb-4 flex items-center">
              <span class="mr-2">{{> partials/profileAvatar}}</span>
              <span class="pt-0 text-lg font-semibold text-white"
                >{{ username }}</span
              >
            </div>

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
                
                $buffer .= '
';
                $buffer .= $indent . '          <article class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
                $buffer .= $indent . '            <div class="mb-4 flex items-center">
';
                $buffer .= $indent . '              <span class="mr-2">';
                if ($partial = $this->mustache->loadPartial('partials/profileAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</span>
';
                $buffer .= $indent . '              <span class="pt-0 text-lg font-semibold text-white"
';
                $buffer .= $indent . '                >';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span
';
                $buffer .= $indent . '              >
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
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
