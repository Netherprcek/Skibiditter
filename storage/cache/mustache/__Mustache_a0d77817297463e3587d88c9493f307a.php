<?php

class __Mustache_a0d77817297463e3587d88c9493f307a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<title>';
        $value = $this->resolveValue($context->findDot('post.id_post'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= ' - Comments</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="flex w-full pt-16">
';
        if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div id="center_column" class="flex w-1/3 justify-center">
';
        $buffer .= $indent . '    <div style="width: 100%; max-width: 42rem; padding: 2rem">
';
        $buffer .= $indent . '      <h1 class="mb-6 text-center text-3xl font-bold text-white">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('pageTitle'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '      </h1>
';
        $value = $context->find('post');
        $buffer .= $this->sectionA7263facd70a1c83745c099a08e3321f($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('session_user');
        $buffer .= $this->sectionF1c66bf99eed27e7f08c0ce5d276f6f0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="rounded-lg bg-gray-800 p-6 shadow-md">
';
        $value = $context->find('comments');
        $buffer .= $this->section7c39beac6129f78e045459dcffa441e6($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('comments');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '        <p class="text-white">No comments yet, be the first one!</p>
';
        }
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionF5eb683d92b37ab703c27976f888d58c(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '        <div class="mt-4 flex w-full justify-center">
';
                $buffer .= $indent . '          <img
';
                $buffer .= $indent . '            src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '            alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '            class="aspect-[5/3] w-4/5 rounded-lg object-cover"
';
                $buffer .= $indent . '          />
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7263facd70a1c83745c099a08e3321f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
        <div class="mb-4 flex items-center">
          <a
            href="javascript:history.back()"
            class="mr-2 text-gray-400 hover:text-gray-300"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 19l-7-7 7-7"
              />
            </svg>
          </a>
          <div class="flex w-full items-center">
            <span class="mr-2"> {{> partials/postsAvatar}} </span>
            <a href="/profile/{{ username }}" class="flex-grow pt-0 text-lg font-semibold text-white">
              {{ username }}
            </a>
            </span>
            <span class="pr-10 pt-0 text-sm text-gray-300"
              >{{created_at }}</span
            >
          </div>
        </div>

        <div class="flex flex-col">
          <p
            class="overflow-wrap break-word mb-2 break-words px-14 text-gray-200"
          >
            {{ post_text }}
          </p>
        </div>
        {{#img}}
        <div class="mt-4 flex w-full justify-center">
          <img
            src="{{ img }}"
            alt="{{ title }}"
            class="aspect-[5/3] w-4/5 rounded-lg object-cover"
          />
        </div>
        {{/img}}
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
                
                $buffer .= $indent . '      <div class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
                $buffer .= $indent . '        <div class="mb-4 flex items-center">
';
                $buffer .= $indent . '          <a
';
                $buffer .= $indent . '            href="javascript:history.back()"
';
                $buffer .= $indent . '            class="mr-2 text-gray-400 hover:text-gray-300"
';
                $buffer .= $indent . '          >
';
                $buffer .= $indent . '            <svg
';
                $buffer .= $indent . '              xmlns="http://www.w3.org/2000/svg"
';
                $buffer .= $indent . '              class="h-6 w-6"
';
                $buffer .= $indent . '              fill="none"
';
                $buffer .= $indent . '              viewBox="0 0 24 24"
';
                $buffer .= $indent . '              stroke="currentColor"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '              <path
';
                $buffer .= $indent . '                stroke-linecap="round"
';
                $buffer .= $indent . '                stroke-linejoin="round"
';
                $buffer .= $indent . '                stroke-width="2"
';
                $buffer .= $indent . '                d="M15 19l-7-7 7-7"
';
                $buffer .= $indent . '              />
';
                $buffer .= $indent . '            </svg>
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '          <div class="flex w-full items-center">
';
                $buffer .= $indent . '            <span class="mr-2"> ';
                if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' </span>
';
                $buffer .= $indent . '            <a href="/profile/';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" class="flex-grow pt-0 text-lg font-semibold text-white">
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '            <span class="pr-10 pt-0 text-sm text-gray-300"
';
                $buffer .= $indent . '              >';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="flex flex-col">
';
                $buffer .= $indent . '          <p
';
                $buffer .= $indent . '            class="overflow-wrap break-word mb-2 break-words px-14 text-gray-200"
';
                $buffer .= $indent . '          >
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('post_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '          </p>
';
                $buffer .= $indent . '        </div>
';
                $value = $context->find('img');
                $buffer .= $this->sectionF5eb683d92b37ab703c27976f888d58c($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1c66bf99eed27e7f08c0ce5d276f6f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> partials/commentForm}} ';
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
                if ($partial = $this->mustache->loadPartial('partials/commentForm')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c39beac6129f78e045459dcffa441e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="mb-4 border-b border-gray-700 pb-4">
          <div class="flex w-full items-center">
            <span class="mr-2">{{> partials/postsAvatar }}</span>
            <span class="text-lg font-semibold text-white">{{ username }}</span>
            <span class="ml-auto pr-10 pt-0 text-sm text-gray-300"
              >{{created_at }}</span
            >
          </div>
          <p>{{comment_text}}</p>
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
                
                $buffer .= $indent . '        <div class="mb-4 border-b border-gray-700 pb-4">
';
                $buffer .= $indent . '          <div class="flex w-full items-center">
';
                $buffer .= $indent . '            <span class="mr-2">';
                if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</span>
';
                $buffer .= $indent . '            <span class="text-lg font-semibold text-white">';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span>
';
                $buffer .= $indent . '            <span class="ml-auto pr-10 pt-0 text-sm text-gray-300"
';
                $buffer .= $indent . '              >';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '          <p>';
                $value = $this->resolveValue($context->find('comment_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
