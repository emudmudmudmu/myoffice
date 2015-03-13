<?php

/* @MopaBootstrap/Navbar/navbar.html.twig */
class __TwigTemplate_64b67b21f3bc6c9accad09664db58e0939198adf07880c31f51aa943a5aed558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'toggle' => array($this, 'block_toggle'),
            'brand' => array($this, 'block_brand'),
            'menu_container' => array($this, 'block_menu_container'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div role=\"navigation\" class=\"navbar";
        echo ((((array_key_exists("inverse", $context)) ? (_twig_default_filter((isset($context["inverse"]) ? $context["inverse"] : $this->getContext($context, "inverse")), false)) : (false))) ? (" navbar-inverse") : (" navbar-default"));
        echo ((((array_key_exists("fixedTop", $context)) ? (_twig_default_filter((isset($context["fixedTop"]) ? $context["fixedTop"] : $this->getContext($context, "fixedTop")), false)) : (false))) ? (" navbar-fixed-top") : (""));
        echo ((((array_key_exists("staticTop", $context)) ? (_twig_default_filter((isset($context["staticTop"]) ? $context["staticTop"] : $this->getContext($context, "staticTop")), false)) : (false))) ? (" navbar-static-top") : (""));
        echo "\">
    <div class=\"container\">
        ";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('menu_container', $context, $blocks);
        // line 21
        echo "    </div>
</div>
";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"navbar-header\">
            ";
        // line 5
        $this->displayBlock('toggle', $context, $blocks);
        // line 13
        echo "            ";
        $this->displayBlock('brand', $context, $blocks);
        // line 14
        echo "        </div>
        ";
    }

    // line 5
    public function block_toggle($context, array $blocks = array())
    {
        // line 6
        echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\" >
            <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
    }

    // line 13
    public function block_brand($context, array $blocks = array())
    {
    }

    // line 16
    public function block_menu_container($context, array $blocks = array())
    {
        // line 17
        echo "        <div class=\"collapse navbar-collapse navbar-responsive-collapse\">
            ";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "        </div>
        ";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@MopaBootstrap/Navbar/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  80 => 17,  51 => 13,  49 => 5,  46 => 4,  32 => 3,  24 => 1,  235 => 46,  220 => 43,  208 => 39,  158 => 28,  149 => 25,  126 => 20,  123 => 19,  115 => 16,  104 => 15,  87 => 14,  75 => 11,  63 => 7,  60 => 6,  56 => 4,  43 => 3,  27 => 1,  22 => 32,  19 => 13,  565 => 147,  561 => 136,  463 => 134,  458 => 117,  455 => 116,  444 => 137,  441 => 116,  439 => 112,  436 => 111,  432 => 109,  429 => 108,  423 => 105,  418 => 103,  415 => 102,  410 => 100,  407 => 99,  402 => 97,  399 => 96,  393 => 95,  388 => 89,  385 => 88,  380 => 84,  377 => 83,  372 => 91,  370 => 88,  366 => 86,  364 => 83,  361 => 82,  358 => 81,  353 => 93,  351 => 81,  348 => 80,  345 => 79,  341 => 77,  334 => 73,  330 => 71,  327 => 70,  324 => 69,  312 => 65,  309 => 64,  306 => 63,  300 => 62,  296 => 60,  293 => 59,  280 => 58,  276 => 106,  273 => 105,  270 => 102,  267 => 99,  264 => 96,  261 => 95,  259 => 79,  256 => 78,  254 => 69,  251 => 68,  248 => 63,  246 => 62,  243 => 61,  240 => 59,  237 => 58,  234 => 57,  229 => 45,  226 => 53,  222 => 111,  217 => 42,  214 => 41,  212 => 57,  209 => 56,  206 => 53,  203 => 38,  198 => 37,  193 => 35,  190 => 34,  186 => 41,  183 => 40,  177 => 38,  171 => 29,  168 => 28,  164 => 30,  142 => 18,  137 => 14,  135 => 13,  127 => 42,  125 => 40,  121 => 39,  117 => 17,  114 => 37,  112 => 28,  107 => 25,  105 => 12,  101 => 10,  93 => 6,  90 => 18,  84 => 149,  77 => 16,  72 => 13,  69 => 9,  67 => 45,  64 => 44,  59 => 5,  52 => 2,  50 => 1,  225 => 38,  219 => 110,  211 => 40,  205 => 33,  202 => 32,  199 => 31,  196 => 36,  191 => 29,  189 => 28,  184 => 27,  182 => 26,  176 => 33,  173 => 36,  170 => 23,  163 => 21,  160 => 20,  113 => 49,  103 => 44,  100 => 43,  95 => 19,  92 => 18,  86 => 13,  82 => 147,  62 => 6,  57 => 5,  47 => 14,  42 => 13,  40 => 5,  37 => 21,  34 => 16,  162 => 20,  152 => 26,  148 => 56,  143 => 23,  140 => 22,  134 => 51,  132 => 12,  128 => 48,  122 => 46,  120 => 18,  116 => 43,  108 => 47,  106 => 40,  102 => 38,  98 => 9,  85 => 19,  79 => 146,  76 => 22,  74 => 51,  66 => 18,  61 => 16,  54 => 14,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
