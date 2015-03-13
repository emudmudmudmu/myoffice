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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99536f5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/99536f5_mopabootstrapbundle_1.css");
            // line 10
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "99536f5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99536f5_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/99536f5_main_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "99536f5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99536f5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/99536f5.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        $this->env->loadTemplate("QuartetKakarotBundle::base.html.twig", "1102119719")->display(array_merge($context, array("fixedTop" => false, "inverse" => true, "id" => "navbar-example")));
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
        echo "    <p class=\"text-center\">Copyright　&copy; <a href=\"http://quartet-communications.com/\" target=\"_blank\"> Quartet Communications</a>, co., ltd., All rights reserved.</p>
";
    }

    // line 41
    public function block_foot_script_assetic($context, array $blocks = array())
    {
    }

    // line 43
    public function block_foot_script($context, array $blocks = array())
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
        return array (  113 => 43,  108 => 41,  103 => 38,  100 => 37,  95 => 19,  86 => 13,  82 => 12,  62 => 10,  57 => 6,  54 => 5,  47 => 14,  42 => 13,  40 => 5,  37 => 4,  34 => 3,  99 => 47,  92 => 18,  79 => 33,  72 => 29,  65 => 25,  52 => 15,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}


/* QuartetKakarotBundle::base.html.twig */
class __TwigTemplate_1f796fafbb0b31f640b5a89092afebdd2fc2222c5f854cd6716a8996426df569_1102119719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@MopaBootstrap/Navbar/navbar.html.twig");

        $this->blocks = array(
            'brand' => array($this, 'block_brand'),
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
    public function block_brand($context, array $blocks = array())
    {
        // line 21
        echo "            <a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('routing')->getPath("myoffice");
        echo "\" tabindex=\"-1\">MyOffice</a>
        ";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 25
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
        return array (  176 => 25,  173 => 24,  170 => 23,  163 => 21,  160 => 20,  113 => 43,  108 => 41,  103 => 38,  100 => 37,  95 => 19,  86 => 13,  82 => 12,  62 => 10,  57 => 6,  54 => 5,  47 => 14,  42 => 13,  40 => 5,  37 => 4,  34 => 3,  99 => 47,  92 => 18,  79 => 33,  72 => 29,  65 => 25,  52 => 15,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
