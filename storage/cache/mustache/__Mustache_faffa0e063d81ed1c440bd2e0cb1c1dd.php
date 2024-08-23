<?php

class __Mustache_faffa0e063d81ed1c440bd2e0cb1c1dd extends Mustache_Template
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
        $buffer .= $indent . '<div class="flex w-full">
';
        if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div id="center_column" class="flex w-1/2 justify-center">
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
        $buffer .= $indent . '      <div class="mb-6 rounded-lg bg-gray-800 p-6 shadow-md">
';
        $buffer .= $indent . '        <div class="mb-4 flex items-center">
';
        $buffer .= $indent . '          <a href="/" class="mr-2 text-gray-400 hover:text-gray-300">
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
        $value = $context->find('post');
        $buffer .= $this->section970f0e2584891cab325825838949ce96($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $value = $context->find('comments');
        $buffer .= $this->section50f904ffa640623aa565c9165f9db8f6($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section970f0e2584891cab325825838949ce96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <span class="mr-2"> {{> partials/postsAvatar }} </span>
          <span class="pt-0 text-lg font-semibold text-white">
            {{ username }}
          </span>
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
                
                $buffer .= $indent . '          <span class="mr-2"> ';
                if ($partial = $this->mustache->loadPartial('partials/postsAvatar')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' </span>
';
                $buffer .= $indent . '          <span class="pt-0 text-lg font-semibold text-white">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '          </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50f904ffa640623aa565c9165f9db8f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="flex flex-col">
          <p>{{comment_text}}</p>
          <p>{{username}}</p>
          <p>{{created_at}}</p>
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
                
                $buffer .= $indent . '        <div class="flex flex-col">
';
                $buffer .= $indent . '          <p>';
                $value = $this->resolveValue($context->find('comment_text'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p>';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p>';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
