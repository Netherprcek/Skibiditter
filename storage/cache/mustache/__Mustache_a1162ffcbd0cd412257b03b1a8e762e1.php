<?php

class __Mustache_a1162ffcbd0cd412257b03b1a8e762e1 extends Mustache_Template
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
        $buffer .= $indent . '    <div class=" max-w-2xl w-full">
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
        $buffer .= $this->sectionFff7ccb6484ddd075bdc19cd95528bd0($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('session_user');
        $buffer .= $this->sectionF1c66bf99eed27e7f08c0ce5d276f6f0($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('session_user');
        if (empty($value)) {
            
            $buffer .= $indent . '      <div class="rounded-lg p-6 text-center shadow-md">
';
            $buffer .= $indent . '        <p class="text-white">
';
            $buffer .= $indent . '          <a href="/login" class="rounded-md p-2 text-blue-500">Login</a> to
';
            $buffer .= $indent . '          comment
';
            $buffer .= $indent . '        </p>
';
            $buffer .= $indent . '      </div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="rounded-lg p-6 shadow-md">
';
        $value = $context->find('comments');
        $buffer .= $this->section06e1d33413cc26fd0ceaf31e558129b2($context, $indent, $value);
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
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/buttons.js"></script>';

        return $buffer;
    }

    private function section906ce350953f7d040d4bdd6550810928(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="mt-4 flex w-full justify-center">
          <img
            src="{{ img }}"
            alt="{{ title }}"
            class="rounded-lg object-cover"
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
                $buffer .= $indent . '            class="rounded-lg object-cover"
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

    private function sectionFff7ccb6484ddd075bdc19cd95528bd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div
        class="mb-6  border border-blue-600  p-6 shadow-md"
      >
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
            <a
              href="/profile/{{ username }}"
              class="flex-grow pt-0 text-lg font-semibold text-white"
            >
              {{ username }}
            </a>
            <span class="pr-10 pt-0 text-sm text-gray-300">
              {{created_at }}
            </span>
          </div>
        </div>

        <div class="flex flex-col">
          <p
            class="overflow-wrap break-word mb-2 break-words pl-8 pr-14 text-gray-200"
          >
            {{{ post_text }}}
          </p>
        </div>
        {{#img}}
        <div class="mt-4 flex w-full justify-center">
          <img
            src="{{ img }}"
            alt="{{ title }}"
            class="rounded-lg object-cover"
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
                
                $buffer .= $indent . '      <div
';
                $buffer .= $indent . '        class="mb-6  border border-blue-600  p-6 shadow-md"
';
                $buffer .= $indent . '      >
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
                $buffer .= $indent . '            <a
';
                $buffer .= $indent . '              href="/profile/';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '              class="flex-grow pt-0 text-lg font-semibold text-white"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <span class="pr-10 pt-0 text-sm text-gray-300">
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '            </span>
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
                $buffer .= $indent . '            class="overflow-wrap break-word mb-2 break-words pl-8 pr-14 text-gray-200"
';
                $buffer .= $indent . '          >
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('post_text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '          </p>
';
                $buffer .= $indent . '        </div>
';
                $value = $context->find('img');
                $buffer .= $this->section906ce350953f7d040d4bdd6550810928($context, $indent, $value);
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

    private function section06e1d33413cc26fd0ceaf31e558129b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class=" max-w-2xl w-full border-2 mt-2 border-gray-800">
          <div class="flex w-full items-center">
            <span class="mr-2">{{> partials/postsAvatar }}</span>
            <a
              href="/profile/{{ username }}"
              class="flex-grow pt-0 text-lg font-semibold text-white"
            >
              {{ username }}
            </a>
            <span class="ml-auto pr-10 pt-0 text-sm text-gray-300"
              >{{created_at }}</span
            >
          </div>
          <div class="px-14">
            <span class="overflow-wrap z-10 break-words"
              >{{comment_text}}</span
            >
          </div>
          <div class="mt-2 flex justify-center">
            <form
              id="like-form-{{id_comment}}"
              action="/{{id_comment}}/handleLike"
              method="POST"
              class="mb-0 flex items-center pb-0"
            >
              <input type="hidden" name="id_comment" value="{{id_comment}}" />
              <input
                type="hidden"
                name="user_id"
                value="{{session_user.user_id}}"
              />
              <button
                id="like-button-{{id_comment}}"
                class="mr-2 rounded-lg px-4 py-2 hover:text-red-500 {{#liked}}text-red-600{{/liked}}{{^liked}}text-white{{/liked}}"
                type="button"
                onclick="handleLike(\'{{id_comment}}\')"
              >
                <i class="fas fa-toilet"></i>
                <span id="like-count-{{id_comment}}">{{likes}}</span>
              </button>
            </form>
            <a href="http://localhost:8000/{{id_comment}}/replies">
              <button
                class="mr-2 rounded-lg px-4 py-2 text-white hover:text-blue-600"
              >
                <i class="fas fa-comment"></i> {{reply_count}}
              </button>
            </a>
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
                
                $buffer .= $indent . '        <div class=" max-w-2xl w-full border-2 mt-2 border-gray-800">
';
                $buffer .= $indent . '          <div class="flex w-full items-center">
';
                $buffer .= $indent . '            <span class="mr-2">';
                if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</span>
';
                $buffer .= $indent . '            <a
';
                $buffer .= $indent . '              href="/profile/';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '              class="flex-grow pt-0 text-lg font-semibold text-white"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '            </a>
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
                $buffer .= $indent . '          <div class="px-14">
';
                $buffer .= $indent . '            <span class="overflow-wrap z-10 break-words"
';
                $buffer .= $indent . '              >';
                $value = $this->resolveValue($context->find('comment_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '          <div class="mt-2 flex justify-center">
';
                $buffer .= $indent . '            <form
';
                $buffer .= $indent . '              id="like-form-';
                $value = $this->resolveValue($context->find('id_comment'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '              action="/';
                $value = $this->resolveValue($context->find('id_comment'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/handleLike"
';
                $buffer .= $indent . '              method="POST"
';
                $buffer .= $indent . '              class="mb-0 flex items-center pb-0"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '              <input type="hidden" name="id_comment" value="';
                $value = $this->resolveValue($context->find('id_comment'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" />
';
                $buffer .= $indent . '              <input
';
                $buffer .= $indent . '                type="hidden"
';
                $buffer .= $indent . '                name="user_id"
';
                $buffer .= $indent . '                value="';
                $value = $this->resolveValue($context->findDot('session_user.user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '              />
';
                $buffer .= $indent . '              <button
';
                $buffer .= $indent . '                id="like-button-';
                $value = $this->resolveValue($context->find('id_comment'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '                class="mr-2 rounded-lg px-4 py-2 hover:text-red-500 ';
                $value = $context->find('liked');
                $buffer .= $this->section7d65804d8f5292bfdf63e3a8f17693d2($context, $indent, $value);
                $value = $context->find('liked');
                if (empty($value)) {
                    
                    $buffer .= 'text-white';
                }
                $buffer .= '"
';
                $buffer .= $indent . '                type="button"
';
                $buffer .= $indent . '                onclick="handleLike(\'';
                $value = $this->resolveValue($context->find('id_comment'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '\')"
';
                $buffer .= $indent . '              >
';
                $buffer .= $indent . '                <i class="fas fa-toilet"></i>
';
                $buffer .= $indent . '                <span id="like-count-';
                $value = $this->resolveValue($context->find('id_comment'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('likes'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span>
';
                $buffer .= $indent . '              </button>
';
                $buffer .= $indent . '            </form>
';
                $buffer .= $indent . '            <a href="http://localhost:8000/';
                $value = $this->resolveValue($context->find('id_comment'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/replies">
';
                $buffer .= $indent . '              <button
';
                $buffer .= $indent . '                class="mr-2 rounded-lg px-4 py-2 text-white hover:text-blue-600"
';
                $buffer .= $indent . '              >
';
                $buffer .= $indent . '                <i class="fas fa-comment"></i> ';
                $value = $this->resolveValue($context->find('reply_count'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '              </button>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '          </div>
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
