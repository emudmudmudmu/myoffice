<?php

/* MopaBootstrapBundle::base.html.twig */
class __TwigTemplate_3a21536a08770ee0ee90a24c1b066441dbaf1a502c411748c85415ed2e84ee4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'title' => array($this, 'block_title'),
            'head_bottom' => array($this, 'block_head_bottom'),
            'body_tag' => array($this, 'block_body_tag'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'container_div_start' => array($this, 'block_container_div_start'),
            'container_class' => array($this, 'block_container_class'),
            'header' => array($this, 'block_header'),
            'content_div_start' => array($this, 'block_content_div_start'),
            'page_header' => array($this, 'block_page_header'),
            'headline' => array($this, 'block_headline'),
            'flashes' => array($this, 'block_flashes'),
            'content_row' => array($this, 'block_content_row'),
            'content' => array($this, 'block_content'),
            'content_content' => array($this, 'block_content_content'),
            'content_sidebar' => array($this, 'block_content_sidebar'),
            'content_div_end' => array($this, 'block_content_div_end'),
            'footer_tag_start' => array($this, 'block_footer_tag_start'),
            'footer' => array($this, 'block_footer'),
            'footer_tag_end' => array($this, 'block_footer_tag_end'),
            'container_div_end' => array($this, 'block_container_div_end'),
            'body_end_before_js' => array($this, 'block_body_end_before_js'),
            'foot_script' => array($this, 'block_foot_script'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_8360c4888c5ae5acc255bdab697704c01e5c5051f3bcb0852fca8229f90ecb99"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        // line 2
        echo "
<!DOCTYPE html>

";
        // line 5
        $this->displayBlock('html_tag', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('body_tag', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('body_start', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('body_end', $context, $blocks);
        // line 149
        echo "</body>
</html>
";
    }

    // line 5
    public function block_html_tag($context, array $blocks = array())
    {
        // line 6
        echo "<html>
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 12
        $this->displayBlock('head_style', $context, $blocks);
        // line 25
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 28
        $this->displayBlock('head_script', $context, $blocks);
        // line 37
        echo "
    <title>";
        // line 38
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 40
        $this->displayBlock('head_bottom', $context, $blocks);
        // line 42
        echo "</head>
";
    }

    // line 12
    public function block_head_style($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "08beb90_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_08beb90_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/08beb90_mopabootstrapbundle_1.css");
            // line 18
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "08beb90_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_08beb90_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/08beb90_eyecon-datepicker_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "08beb90"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_08beb90") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/08beb90.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    ";
        // line 24
        echo "    ";
    }

    // line 28
    public function block_head_script($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        // line 36
        echo "    ";
    }

    // line 38
    public function block_title($context, array $blocks = array())
    {
        echo "Mopa Bootstrap Bundle";
    }

    // line 40
    public function block_head_bottom($context, array $blocks = array())
    {
        // line 41
        echo "    ";
    }

    // line 45
    public function block_body_tag($context, array $blocks = array())
    {
        // line 46
        echo "<body data-spy=\"scroll\">
";
    }

    // line 49
    public function block_body_start($context, array $blocks = array())
    {
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 56
        echo "
    ";
        // line 57
        $this->displayBlock('container', $context, $blocks);
        // line 107
        echo "
    ";
        // line 108
        $this->displayBlock('body_end_before_js', $context, $blocks);
        // line 110
        echo "
    ";
        // line 111
        $this->displayBlock('foot_script', $context, $blocks);
    }

    // line 53
    public function block_navbar($context, array $blocks = array())
    {
        // line 54
        echo "    <!-- No navbar included here to reduce dependencies, see https://github.com/phiamo/MopaBootstrapSandboxBundle/blob/master/Resources/views/base.html.twig for howto include it -->
    ";
    }

    // line 57
    public function block_container($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $this->displayBlock('container_div_start', $context, $blocks);
        // line 59
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('content_div_start', $context, $blocks);
        // line 63
        echo "            ";
        $this->displayBlock('page_header', $context, $blocks);
        // line 68
        echo "
            ";
        // line 69
        $this->displayBlock('flashes', $context, $blocks);
        // line 78
        echo "
            ";
        // line 79
        $this->displayBlock('content_row', $context, $blocks);
        // line 95
        echo "        ";
        $this->displayBlock('content_div_end', $context, $blocks);
        // line 96
        echo "        ";
        $this->displayBlock('footer_tag_start', $context, $blocks);
        // line 99
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 102
        echo "        ";
        $this->displayBlock('footer_tag_end', $context, $blocks);
        // line 105
        echo "    ";
        $this->displayBlock('container_div_end', $context, $blocks);
        // line 106
        echo "    ";
    }

    // line 58
    public function block_container_div_start($context, array $blocks = array())
    {
        echo "<div class=\"";
        $this->displayBlock('container_class', $context, $blocks);
        echo "\">";
    }

    public function block_container_class($context, array $blocks = array())
    {
        echo "container";
    }

    // line 59
    public function block_header($context, array $blocks = array())
    {
        // line 60
        echo "        ";
    }

    // line 62
    public function block_content_div_start($context, array $blocks = array())
    {
        echo "<div class=\"content\">";
    }

    // line 63
    public function block_page_header($context, array $blocks = array())
    {
        // line 64
        echo "            <div class=\"page-header\">
                  <h1>";
        // line 65
        $this->displayBlock('headline', $context, $blocks);
        echo "</h1>
            </div>
            ";
    }

    public function block_headline($context, array $blocks = array())
    {
        echo "Mopa Bootstrap Bundle";
    }

    // line 69
    public function block_flashes($context, array $blocks = array())
    {
        // line 70
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "peekAll")) > 0)) {
            // line 71
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                ";
            // line 73
            echo $context["__internal_8360c4888c5ae5acc255bdab697704c01e5c5051f3bcb0852fca8229f90ecb99"]->getsession_flash();
            echo "
                </div>
            </div>
            ";
        }
        // line 77
        echo "            ";
    }

    // line 79
    public function block_content_row($context, array $blocks = array())
    {
        // line 80
        echo "            <div class=\"row\">
                ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "            </div>
            ";
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        // line 82
        echo "                <div class=\"col-sm-9\">
                    ";
        // line 83
        $this->displayBlock('content_content', $context, $blocks);
        // line 86
        echo "                </div>
                <div class=\"col-sm-3\">
                    ";
        // line 88
        $this->displayBlock('content_sidebar', $context, $blocks);
        // line 91
        echo "                </div>
                ";
    }

    // line 83
    public function block_content_content($context, array $blocks = array())
    {
        // line 84
        echo "                    <strong>Hier könnte Ihre Werbung stehen ... </strong>
                    ";
    }

    // line 88
    public function block_content_sidebar($context, array $blocks = array())
    {
        // line 89
        echo "                    <h2>Sidebar</h2>
                    ";
    }

    // line 95
    public function block_content_div_end($context, array $blocks = array())
    {
        echo "</div>";
    }

    // line 96
    public function block_footer_tag_start($context, array $blocks = array())
    {
        // line 97
        echo "        <footer>
        ";
    }

    // line 99
    public function block_footer($context, array $blocks = array())
    {
        // line 100
        echo "            <p>&copy; <a href=\"http://www.mohrenweiserpartner.de\" target=\"_blank\">Mohrenweiser & Partner</a> 2011-2013</p>
            ";
    }

    // line 102
    public function block_footer_tag_end($context, array $blocks = array())
    {
        // line 103
        echo "        </footer>
        ";
    }

    // line 105
    public function block_container_div_end($context, array $blocks = array())
    {
        echo "</div><!-- /container -->";
    }

    // line 108
    public function block_body_end_before_js($context, array $blocks = array())
    {
        // line 109
        echo "    ";
    }

    // line 111
    public function block_foot_script($context, array $blocks = array())
    {
        // line 112
        echo "    ";
        // line 116
        echo "    ";
        $this->displayBlock('foot_script_assetic', $context, $blocks);
        // line 137
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip();
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
";
    }

    // line 116
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        // line 117
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "647abb0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_tooltip_1.js");
            // line 134
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_affix_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_alert_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_button_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_carousel_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_collapse_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_dropdown_7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_modal_8.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_popover_9.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_scrollspy_10.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_tab_11.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_transition_12.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_mopabootstrap-collection_13.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_mopabootstrap-subnav_14.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "647abb0_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0_eyecon-bootstrap-datepicker_15.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "647abb0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_647abb0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/647abb0.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 136
        echo "    ";
    }

    // line 147
    public function block_body_end($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 147,  561 => 136,  463 => 134,  458 => 117,  455 => 116,  444 => 137,  441 => 116,  439 => 112,  436 => 111,  432 => 109,  429 => 108,  423 => 105,  418 => 103,  415 => 102,  410 => 100,  407 => 99,  402 => 97,  399 => 96,  393 => 95,  388 => 89,  385 => 88,  380 => 84,  377 => 83,  372 => 91,  370 => 88,  366 => 86,  364 => 83,  361 => 82,  358 => 81,  353 => 93,  351 => 81,  348 => 80,  345 => 79,  341 => 77,  334 => 73,  330 => 71,  327 => 70,  324 => 69,  312 => 65,  309 => 64,  306 => 63,  300 => 62,  296 => 60,  293 => 59,  280 => 58,  276 => 106,  273 => 105,  270 => 102,  267 => 99,  264 => 96,  261 => 95,  259 => 79,  256 => 78,  254 => 69,  251 => 68,  248 => 63,  246 => 62,  243 => 61,  240 => 59,  237 => 58,  234 => 57,  229 => 54,  226 => 53,  222 => 111,  217 => 108,  214 => 107,  212 => 57,  209 => 56,  206 => 53,  203 => 52,  198 => 49,  193 => 46,  190 => 45,  186 => 41,  183 => 40,  177 => 38,  171 => 29,  168 => 28,  164 => 24,  142 => 18,  137 => 14,  135 => 13,  127 => 42,  125 => 40,  121 => 39,  117 => 38,  114 => 37,  112 => 28,  107 => 25,  105 => 12,  101 => 10,  93 => 6,  90 => 5,  84 => 149,  77 => 52,  72 => 49,  69 => 48,  67 => 45,  64 => 44,  59 => 8,  52 => 2,  50 => 1,  225 => 38,  219 => 110,  211 => 34,  205 => 33,  202 => 32,  199 => 31,  196 => 30,  191 => 29,  189 => 28,  184 => 27,  182 => 26,  176 => 25,  173 => 36,  170 => 23,  163 => 21,  160 => 20,  113 => 49,  103 => 44,  100 => 43,  95 => 19,  92 => 18,  86 => 13,  82 => 147,  62 => 9,  57 => 5,  47 => 14,  42 => 13,  40 => 5,  37 => 4,  34 => 3,  162 => 20,  152 => 57,  148 => 56,  143 => 54,  140 => 53,  134 => 51,  132 => 12,  128 => 48,  122 => 46,  120 => 45,  116 => 43,  108 => 47,  106 => 40,  102 => 38,  98 => 9,  85 => 26,  79 => 146,  76 => 22,  74 => 51,  66 => 18,  61 => 16,  54 => 5,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
