<?php

class __Mustache_ec80f93709034a78c06d98ef161e55bd extends Mustache_Template
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
        $buffer .= $indent . '  <body>
';
        $buffer .= $indent . '    <h1 class="text-3xl font-bold mb-6">Posts</h1>
';
        $buffer .= $indent . '    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
';
        $value = $context->find('posts');
        $buffer .= $this->section3861aa3ddd37ddb2eee2d23321a1c167($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('posts');
        if (empty($value)) {
            
            $buffer .= $indent . '      <p class="text-gray-600">No posts found.</p>
';
        }
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }

    private function sectionA1ecd468afb9e53645ced5270469149f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <img src="{{img}}" alt="{{title}}" class="w-120 h-48 object-cover rounded">
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
                
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" class="w-120 h-48 object-cover rounded">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3861aa3ddd37ddb2eee2d23321a1c167(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <article class="bg-white shadow-md rounded-lg p-6">
          <h2 class="text-xl font-semibold mb-2">{{title}}</h2>
          <p class="text-gray-600 mb-2">{{description}}</p>
          <p class="text-sm text-gray-500">By: {{username}}</p>
          <p class="text-sm text-gray-500">Tag: {{tag}}</p>
          <p class="text-sm text-gray-500">Likes: {{likes}}</p>
          <p class="text-sm text-gray-500 mb-4">Created at: {{created_at}}</p>
          {{#img}}
            <img src="{{img}}" alt="{{title}}" class="w-120 h-48 object-cover rounded">
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
                
                $buffer .= $indent . '        <article class="bg-white shadow-md rounded-lg p-6">
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
                $buffer .= $this->sectionA1ecd468afb9e53645ced5270469149f($context, $indent, $value);
                $buffer .= $indent . '        </article>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
