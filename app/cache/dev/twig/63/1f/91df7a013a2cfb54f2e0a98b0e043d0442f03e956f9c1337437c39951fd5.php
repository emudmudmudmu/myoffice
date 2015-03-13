<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_631f91df7a013a2cfb54f2e0a98b0e043d0442f03e956f9c1337437c39951fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  68 => 14,  41 => 9,  201 => 92,  187 => 84,  166 => 71,  156 => 66,  151 => 63,  138 => 57,  136 => 56,  133 => 55,  91 => 31,  39 => 6,  88 => 6,  78 => 40,  36 => 7,  33 => 6,  30 => 3,  83 => 18,  80 => 19,  51 => 15,  49 => 19,  46 => 7,  32 => 12,  24 => 4,  235 => 46,  220 => 43,  208 => 39,  158 => 67,  149 => 25,  126 => 20,  123 => 47,  115 => 43,  104 => 15,  87 => 20,  75 => 17,  63 => 7,  60 => 6,  56 => 9,  43 => 8,  27 => 4,  22 => 2,  19 => 1,  565 => 147,  561 => 136,  463 => 134,  458 => 117,  455 => 116,  444 => 137,  441 => 116,  439 => 112,  436 => 111,  432 => 109,  429 => 108,  423 => 105,  418 => 103,  415 => 102,  410 => 100,  407 => 99,  402 => 97,  399 => 96,  393 => 95,  388 => 89,  385 => 88,  380 => 84,  377 => 83,  372 => 91,  370 => 88,  366 => 86,  364 => 83,  361 => 82,  358 => 81,  353 => 93,  351 => 81,  348 => 80,  345 => 79,  341 => 77,  334 => 73,  330 => 71,  327 => 70,  324 => 69,  312 => 65,  309 => 64,  306 => 63,  300 => 62,  296 => 60,  293 => 59,  280 => 58,  276 => 106,  273 => 105,  270 => 102,  267 => 99,  264 => 96,  261 => 95,  259 => 79,  256 => 78,  254 => 69,  251 => 68,  248 => 63,  246 => 62,  243 => 61,  240 => 59,  237 => 58,  234 => 57,  229 => 45,  226 => 53,  222 => 111,  217 => 42,  214 => 41,  212 => 57,  209 => 56,  206 => 53,  203 => 38,  198 => 37,  193 => 35,  190 => 34,  186 => 41,  183 => 82,  177 => 38,  171 => 73,  168 => 72,  164 => 30,  142 => 59,  137 => 14,  135 => 13,  127 => 42,  125 => 40,  121 => 46,  117 => 44,  114 => 37,  112 => 42,  107 => 25,  105 => 40,  101 => 24,  93 => 9,  90 => 18,  84 => 149,  77 => 16,  72 => 16,  69 => 25,  67 => 45,  64 => 12,  59 => 5,  52 => 2,  50 => 8,  225 => 38,  219 => 110,  211 => 40,  205 => 33,  202 => 32,  199 => 91,  196 => 90,  191 => 29,  189 => 28,  184 => 27,  182 => 26,  176 => 33,  173 => 74,  170 => 23,  163 => 70,  160 => 20,  113 => 49,  103 => 44,  100 => 43,  95 => 19,  92 => 21,  86 => 28,  82 => 147,  62 => 23,  57 => 16,  47 => 14,  42 => 14,  40 => 8,  37 => 21,  34 => 16,  162 => 20,  152 => 26,  148 => 56,  143 => 23,  140 => 22,  134 => 51,  132 => 12,  128 => 48,  122 => 46,  120 => 18,  116 => 43,  108 => 47,  106 => 40,  102 => 38,  98 => 40,  85 => 19,  79 => 18,  76 => 22,  74 => 51,  66 => 15,  61 => 16,  54 => 21,  48 => 11,  44 => 10,  38 => 13,  35 => 7,  29 => 4,);
    }
}
