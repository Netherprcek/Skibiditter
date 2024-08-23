<?php

class __Mustache_9fddb1248547f4fc4711f06b0e5b1450 extends Mustache_Template
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
        $buffer .= $indent . '  <body class="bg-gray-100">
';
        $buffer .= $indent . '    <div class="container mx-auto px-4 py-8">
';
        $buffer .= $indent . '      <h1 class="text-3xl font-bold mb-6 text-center">Posts</h1>
';
        $buffer .= $indent . '      <div class="max-w-2xl mx-auto">
';
        $value = $context->find('posts');
        $buffer .= $this->sectionA448b1136cac099b664ea59113eaef46($context, $indent, $value);
        $value = $context->find('posts');
        if (empty($value)) {
            
            $buffer .= $indent . '          <p class="text-gray-600 text-center">No posts found.</p>
';
        }
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }

    private function section1b449276a4e0f4f64bd14d4d7b0d7f11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <img src="{{img}}" alt="{{title}}" class="w-64 h-auto object-cover rounded">
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
                
                $buffer .= $indent . '              <img src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" class="w-64 h-auto object-cover rounded">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA448b1136cac099b664ea59113eaef46(Mustache_Context $context, $indent, $value)
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
              <img src="{{img}}" alt="{{title}}" class="w-64 h-auto object-cover rounded">
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
                
                $buffer .= $indent . '          <article class="bg-white shadow-md rounded-lg p-6 mb-6">
';
                $buffer .= $indent . '            <h2 class="text-xl font-semibold mb-2">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</h2>
';
                $buffer .= $indent . '            <p class="text-gray-600 mb-2">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p class="text-sm text-gray-500">By: ';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p class="text-sm text-gray-500">Tag: ';
                $value = $this->resolveValue($context->find('tag'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p class="text-sm text-gray-500">Likes: ';
                $value = $this->resolveValue($context->find('likes'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p class="text-sm text-gray-500 mb-4">Created at: ';
                $value = $this->resolveValue($context->find('created_at'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</p>
';
                $value = $context->find('img');
                $buffer .= $this->section1b449276a4e0f4f64bd14d4d7b0d7f11($context, $indent, $value);
                $buffer .= $indent . '          </article>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
