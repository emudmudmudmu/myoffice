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
        echo ((((array_key_exists("inverse", $context)) ? (_twig_default_filter((isset($context["inverse"]) ? $context["inverse"] : null), false)) : (false))) ? (" navbar-inverse") : (" navbar-default"));
        echo ((((array_key_exists("fixedTop", $context)) ? (_twig_default_filter((isset($context["fixedTop"]) ? $context["fixedTop"] : null), false)) : (false))) ? (" navbar-fixed-top") : (""));
        echo ((((array_key_exists("staticTop", $context)) ? (_twig_default_filter((isset($context["staticTop"]) ? $context["staticTop"] : null), false)) : (false))) ? (" navbar-static-top") : (""));
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
        return array (  83 => 18,  80 => 17,  51 => 13,  37 => 21,  34 => 16,  32 => 3,  24 => 1,  235 => 46,  220 => 43,  211 => 40,  208 => 39,  196 => 36,  176 => 33,  158 => 28,  149 => 25,  140 => 22,  123 => 19,  120 => 18,  104 => 15,  87 => 14,  75 => 11,  63 => 7,  60 => 6,  54 => 14,  43 => 3,  27 => 1,  22 => 32,  19 => 13,  565 => 147,  561 => 136,  463 => 134,  458 => 117,  455 => 116,  444 => 137,  441 => 116,  439 => 112,  436 => 111,  432 => 109,  429 => 108,  423 => 105,  418 => 103,  415 => 102,  410 => 100,  407 => 99,  402 => 97,  399 => 96,  393 => 95,  388 => 89,  385 => 88,  380 => 84,  377 => 83,  372 => 91,  370 => 88,  366 => 86,  364 => 83,  361 => 82,  358 => 81,  353 => 93,  351 => 81,  348 => 80,  345 => 79,  341 => 77,  334 => 73,  330 => 71,  327 => 70,  324 => 69,  312 => 65,  309 => 64,  306 => 63,  300 => 62,  296 => 60,  293 => 59,  273 => 105,  270 => 102,  267 => 99,  264 => 96,  261 => 95,  259 => 79,  256 => 78,  254 => 69,  251 => 68,  248 => 63,  246 => 62,  243 => 61,  240 => 59,  237 => 58,  234 => 57,  229 => 45,  226 => 53,  222 => 111,  219 => 110,  214 => 41,  212 => 57,  209 => 56,  206 => 53,  203 => 38,  198 => 37,  190 => 34,  186 => 41,  183 => 40,  173 => 36,  171 => 29,  168 => 28,  164 => 30,  162 => 20,  142 => 18,  137 => 14,  132 => 12,  127 => 42,  125 => 40,  117 => 17,  114 => 37,  112 => 28,  107 => 25,  101 => 10,  98 => 9,  93 => 6,  90 => 18,  82 => 147,  79 => 146,  74 => 51,  72 => 13,  69 => 9,  67 => 45,  62 => 6,  52 => 2,  185 => 22,  182 => 21,  179 => 20,  133 => 43,  129 => 42,  121 => 39,  118 => 41,  115 => 16,  105 => 12,  102 => 34,  97 => 19,  94 => 18,  84 => 149,  64 => 44,  59 => 5,  56 => 4,  49 => 5,  44 => 13,  42 => 5,  39 => 4,  36 => 3,  318 => 105,  311 => 103,  292 => 101,  288 => 99,  284 => 97,  280 => 58,  276 => 106,  272 => 91,  269 => 90,  252 => 89,  249 => 88,  245 => 87,  242 => 86,  225 => 84,  221 => 82,  217 => 42,  213 => 78,  210 => 77,  193 => 35,  184 => 69,  177 => 38,  167 => 64,  163 => 62,  159 => 60,  156 => 59,  152 => 26,  147 => 56,  143 => 23,  139 => 53,  135 => 13,  126 => 20,  122 => 48,  110 => 38,  100 => 35,  96 => 33,  92 => 31,  88 => 13,  85 => 19,  81 => 27,  77 => 16,  65 => 22,  61 => 20,  57 => 5,  53 => 16,  50 => 1,  46 => 4,  38 => 8,  35 => 7,  29 => 5,);
    }
}
