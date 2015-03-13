<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_59e9ac88adf76539ccb5d1d22e1dd1b41cf9bc0b04c2c0403c26567983177588 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  26 => 3,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  68 => 14,  41 => 9,  201 => 92,  187 => 84,  166 => 71,  156 => 66,  151 => 63,  138 => 57,  136 => 56,  133 => 55,  91 => 35,  39 => 6,  88 => 6,  78 => 40,  36 => 7,  33 => 6,  30 => 5,  83 => 30,  80 => 19,  51 => 15,  49 => 19,  46 => 14,  32 => 6,  24 => 2,  235 => 46,  220 => 43,  208 => 39,  158 => 67,  149 => 25,  126 => 20,  123 => 47,  115 => 43,  104 => 15,  87 => 20,  75 => 28,  63 => 7,  60 => 6,  56 => 9,  43 => 8,  27 => 4,  22 => 2,  19 => 1,  565 => 147,  561 => 136,  463 => 134,  458 => 117,  455 => 116,  444 => 137,  441 => 116,  439 => 112,  436 => 111,  432 => 109,  429 => 108,  423 => 105,  418 => 103,  415 => 102,  410 => 100,  407 => 99,  402 => 97,  399 => 96,  393 => 95,  388 => 89,  385 => 88,  380 => 84,  377 => 83,  372 => 91,  370 => 88,  366 => 86,  364 => 83,  361 => 82,  358 => 81,  353 => 93,  351 => 81,  348 => 80,  345 => 79,  341 => 77,  334 => 73,  330 => 71,  327 => 70,  324 => 69,  312 => 65,  309 => 64,  306 => 63,  300 => 62,  296 => 60,  293 => 59,  280 => 58,  276 => 106,  273 => 105,  270 => 102,  267 => 99,  264 => 96,  261 => 95,  259 => 79,  256 => 78,  254 => 69,  251 => 68,  248 => 63,  246 => 62,  243 => 61,  240 => 59,  237 => 58,  234 => 57,  229 => 45,  226 => 53,  222 => 111,  217 => 42,  214 => 41,  212 => 57,  209 => 56,  206 => 53,  203 => 38,  198 => 37,  193 => 35,  190 => 34,  186 => 41,  183 => 82,  177 => 38,  171 => 73,  168 => 72,  164 => 30,  142 => 59,  137 => 14,  135 => 13,  127 => 42,  125 => 40,  121 => 46,  117 => 44,  114 => 37,  112 => 42,  107 => 25,  105 => 40,  101 => 24,  93 => 9,  90 => 18,  84 => 149,  77 => 16,  72 => 16,  69 => 25,  67 => 45,  64 => 12,  59 => 5,  52 => 2,  50 => 15,  225 => 38,  219 => 110,  211 => 40,  205 => 33,  202 => 32,  199 => 91,  196 => 90,  191 => 29,  189 => 28,  184 => 27,  182 => 26,  176 => 33,  173 => 74,  170 => 23,  163 => 70,  160 => 20,  113 => 49,  103 => 44,  100 => 43,  95 => 19,  92 => 21,  86 => 28,  82 => 147,  62 => 24,  57 => 16,  47 => 14,  42 => 12,  40 => 8,  37 => 21,  34 => 16,  162 => 20,  152 => 26,  148 => 56,  143 => 23,  140 => 22,  134 => 51,  132 => 12,  128 => 48,  122 => 46,  120 => 18,  116 => 43,  108 => 47,  106 => 40,  102 => 38,  98 => 40,  85 => 19,  79 => 29,  76 => 22,  74 => 51,  66 => 25,  61 => 16,  54 => 21,  48 => 11,  44 => 10,  38 => 13,  35 => 7,  29 => 4,);
    }
}
