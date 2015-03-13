<?php

/* QuartetKakarotBundle::base.html.twig */
class __TwigTemplate_1f796fafbb0b31f640b5a89092afebdd2fc2222c5f854cd6716a8996426df569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MopaBootstrapBundle::base.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'footer' => array($this, 'block_footer'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
            'foot_script' => array($this, 'block_foot_script'),
            'requirejs' => array($this, 'block_requirejs'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<head>
    ";
        // line 5
        $this->displayBlock('head_style', $context, $blocks);
        // line 13
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/quartetkakarot/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
";
    }

    // line 5
    public function block_head_style($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "99536f5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99536f5_0") : $this->env->getExtension('assets')->getAssetUrl("css/99536f5_mopabootstrapbundle_1.css");
            // line 10
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "99536f5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99536f5_1") : $this->env->getExtension('assets')->getAssetUrl("css/99536f5_main_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "99536f5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99536f5") : $this->env->getExtension('assets')->getAssetUrl("css/99536f5.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    ";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "カルテットコミュニケーションズ社内ポータルサイト";
    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->env->loadTemplate("QuartetKakarotBundle::base.html.twig", "916733969")->display(array_merge($context, array("fixedTop" => false, "inverse" => true, "id" => "navbar-example")));
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "    <p class=\"text-center\">Copyright　&copy; <a href=\"http://quartet-communications.com/\" target=\"_blank\"> Quartet Communications</a>, co., ltd., All rights reserved.</p>
";
    }

    // line 38
    public function block_foot_script_assetic($context, array $blocks = array())
    {
    }

    // line 40
    public function block_foot_script($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayBlock('requirejs', $context, $blocks);
        // line 43
        echo "    ";
        $this->displayBlock('scripts', $context, $blocks);
    }

    // line 41
    public function block_requirejs($context, array $blocks = array())
    {
        // line 42
        echo "    ";
    }

    // line 43
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "QuartetKakarotBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  129 => 42,  121 => 43,  118 => 41,  115 => 40,  105 => 35,  102 => 34,  97 => 19,  94 => 18,  84 => 12,  64 => 10,  59 => 6,  56 => 5,  49 => 14,  44 => 13,  42 => 5,  39 => 4,  36 => 3,  318 => 105,  311 => 103,  292 => 101,  288 => 99,  284 => 97,  280 => 95,  276 => 93,  272 => 91,  269 => 90,  252 => 89,  249 => 88,  245 => 87,  242 => 86,  225 => 84,  221 => 82,  217 => 80,  213 => 78,  210 => 77,  193 => 76,  184 => 69,  177 => 67,  167 => 64,  163 => 62,  159 => 60,  156 => 59,  152 => 58,  147 => 56,  143 => 54,  139 => 53,  135 => 51,  126 => 41,  122 => 48,  110 => 38,  100 => 35,  96 => 33,  92 => 31,  88 => 13,  85 => 28,  81 => 27,  77 => 25,  65 => 22,  61 => 20,  57 => 18,  53 => 16,  50 => 15,  46 => 14,  38 => 8,  35 => 7,  29 => 5,);
    }
}


/* QuartetKakarotBundle::base.html.twig */
class __TwigTemplate_1f796fafbb0b31f640b5a89092afebdd2fc2222c5f854cd6716a8996426df569_916733969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@MopaBootstrap/Navbar/navbar.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MopaBootstrap/Navbar/navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("quartet_kakarot_main_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/quartetkakarot/images/kakarot.png"), "html", null, true);
        echo "\" width=\"25\" hieght=\"25\">Kakarot</a></li>
                <li><a href=\"http://kakarot/qcwiki/\" target=\"_blank\">QC Wiki</a></li>
                <li><a href=\"http://quims2.lisket.jp/\" target=\"_blank\">QUIMS2</a></li>
                <li><a href=\"http://private.quartet-communications.com/inquiry/\" target=\"_blank\">営業用問い合わせ管理ツール</a></li>
                <li><a href=\"http://kakarot/kaigi/resroom/resroom.cgi/\" target=\"_blank\">会議室予約</a></li>
                <li><a href=\"http://kakarot/zoho2yayoi/\" target=\"_blank\">ZohoのInvoice.csvを変換</a></li>
                <li><a href=\"http://quartet-communications.com/\" target=\"_blank\">オフィシャルサイト</a></li>
            </ul>
        ";
    }

    public function getTemplateName()
    {
        return "QuartetKakarotBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 22,  182 => 21,  179 => 20,  133 => 43,  129 => 42,  121 => 43,  118 => 41,  115 => 40,  105 => 35,  102 => 34,  97 => 19,  94 => 18,  84 => 12,  64 => 10,  59 => 6,  56 => 5,  49 => 14,  44 => 13,  42 => 5,  39 => 4,  36 => 3,  318 => 105,  311 => 103,  292 => 101,  288 => 99,  284 => 97,  280 => 95,  276 => 93,  272 => 91,  269 => 90,  252 => 89,  249 => 88,  245 => 87,  242 => 86,  225 => 84,  221 => 82,  217 => 80,  213 => 78,  210 => 77,  193 => 76,  184 => 69,  177 => 67,  167 => 64,  163 => 62,  159 => 60,  156 => 59,  152 => 58,  147 => 56,  143 => 54,  139 => 53,  135 => 51,  126 => 41,  122 => 48,  110 => 38,  100 => 35,  96 => 33,  92 => 31,  88 => 13,  85 => 28,  81 => 27,  77 => 25,  65 => 22,  61 => 20,  57 => 18,  53 => 16,  50 => 15,  46 => 14,  38 => 8,  35 => 7,  29 => 5,);
    }
}
