<?php

class __Mustache_c29cc45c65c194527e1a141b7b847df0 extends Mustache_Template
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
        $buffer .= $indent . '  <body class="bg-gray-100 flex justify-center">
';
        $buffer .= $indent . '    <div class="w-full max-w-2xl px-4 py-8">
';
        $buffer .= $indent . '      <h1 class="text-3xl font-bold mb-6 text-center">Posts</h1>
';
        $value = $context->find('posts');
        $buffer .= $this->sectionB8b5c634d01c7c1f995958c7b7a04b44($context, $indent, $value);
        $value = $context->find('posts');
        if (empty($value)) {
            
            $buffer .= $indent . '        <p class="text-gray-600 text-center">No posts found.</p>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }

    private function section9ea8654781702c68b60e19f9a619bc63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="flex justify-center">
              <img src="{{img}}" alt="{{title}}" class="w-64 h-auto object-cover rounded">
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
                
                $buffer .= $indent . '            <div class="flex justify-center">
';
                $buffer .= $indent . '              <img src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" class="w-64 h-auto object-cover rounded">
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8b5c634d01c7c1f995958c7b7a04b44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <article class="bg-white shadow-md rounded-lg p-6 mb-6">
          <h2 class="text-xl font-semibold mb-2">{{title}}</h2>
          <p class="text-gray-600 mb-2">{{description}}</p>
          <p class="text-sm text-gray-500">By: {{username}}</p>
          <p class="text-sm text-gray-500">Tag: {{tag}}</p>
          <p class="text-sm text-gray-500">Likes: {{likes}}</p>
          <p class="text-sm text-gray-500 mb-4">Created at: {{created_at}}</p>
          {{#img}}
            <div class="flex justify-center">
              <img src="{{img}}" alt="{{title}}" class="w-64 h-auto object-cover rounded">
            </div>
          {{/img}}
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
                
                $buffer .= $indent . '        <article class="bg-white shadow-md rounded-lg p-6 mb-6">
';
                $buffer .= $indent . '          <h2 class="text-xl font-semibold mb-2">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</h2>
';
                $buffer .= $indent . '          <p class="text-gray-600 mb-2">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p class="text-sm text-gray-500">By: ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p class="text-sm text-gray-500">Tag: ';
                $value = $this->resolveValue($context->find('tag'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p class="text-sm text-gray-500">Likes: ';
                $value = $this->resolveValue($context->find('likes'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '          <p class="text-sm text-gray-500 mb-4">Created at: ';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $value = $context->find('img');
                $buffer .= $this->section9ea8654781702c68b60e19f9a619bc63($context, $indent, $value);
                $buffer .= $indent . '        </article>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
