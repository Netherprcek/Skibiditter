<?php

class __Mustache_b79079459869fff70d6158514d0a2405 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<title>Explore</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div class="flex min-h-screen flex-col">
';
        if ($partial = $this->mustache->loadPartial('partials/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div class="flex flex-1 pt-16">
';
        if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div id="center_column" class="flex w-1/3 justify-center overflow-y-auto">
';
        $buffer .= $indent . '      <div class="border-x-2 border-gray-800 max-w-2xl  w-full">
';
        $buffer .= $indent . '        <h1 class="mb-6 text-center text-3xl mt-6 font-bold text-white">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->find('pageTitle'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '        </h1>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        ';
        $value = $context->find('session_user');
        $buffer .= $this->section3e55faa0af3260544da7f04c4df8bec9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div class="mx-8">';
        if ($partial = $this->mustache->loadPartial('partials/postList')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <h2 class="mb-6 text-center text-xl font-bold text-white">
';
        $buffer .= $indent . '          Page ';
        $value = $this->resolveValue($context->find('currentPage'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '        </h2>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Pagination Links -->
';
        $buffer .= $indent . '        <div class="mt-6 flex justify-center">
';
        $value = $context->find('previousPage');
        $buffer .= $this->sectionBce96ae5d29dfd0d8bbdbc61c58df530($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('nextPage');
        $buffer .= $this->section2f24d1147fd8106e15b0976cbf251b81($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
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

    private function section3e55faa0af3260544da7f04c4df8bec9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <div class="mx-4">{{> partials/postForm}}</div> ';
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
                
                $buffer .= ' <div class="mx-4">';
                if ($partial = $this->mustache->loadPartial('partials/postForm')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</div> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBce96ae5d29dfd0d8bbdbc61c58df530(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <a
            href="?page={{previousPage}}"
            class="btn btn-primary mr-2 rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700"
            >Previous</a
          >
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
                
                $buffer .= $indent . '          <a
';
                $buffer .= $indent . '            href="?page=';
                $value = $this->resolveValue($context->find('previousPage'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '            class="btn btn-primary mr-2 rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700"
';
                $buffer .= $indent . '            >Previous</a
';
                $buffer .= $indent . '          >
';
                $buffer .= $indent . '          ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f24d1147fd8106e15b0976cbf251b81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <a
            href="?page={{nextPage}}"
            class="btn btn-primary rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700"
            >Next</a
          >
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
                $buffer .= $indent . '          <a
';
                $buffer .= $indent . '            href="?page=';
                $value = $this->resolveValue($context->find('nextPage'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '"
';
                $buffer .= $indent . '            class="btn btn-primary rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700"
';
                $buffer .= $indent . '            >Next</a
';
                $buffer .= $indent . '          >
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
