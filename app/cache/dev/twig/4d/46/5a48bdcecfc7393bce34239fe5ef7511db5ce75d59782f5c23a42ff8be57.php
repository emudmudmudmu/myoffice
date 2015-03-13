<?php

/* QuartetKakarotBundle::myofficeBase.html.twig */
class __TwigTemplate_4d465a48bdcecfc7393bce34239fe5ef7511db5ce75d59782f5c23a42ff8be57 extends Twig_Template
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
        echo "MyOffice|カルテットコミュニケーションズ";
    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->env->loadTemplate("QuartetKakarotBundle::myofficeBase.html.twig", "704615936")->display(array_merge($context, array("fixedTop" => false, "inverse" => true, "id" => "navbar-example")));
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "    <p class=\"text-center\">Copyright　&copy; <a href=\"http://quartet-communications.com/\" target=\"_blank\"> Quartet Communications</a>, co., ltd., All rights reserved.</p>
";
    }

    // line 47
    public function block_foot_script_assetic($context, array $blocks = array())
    {
    }

    // line 49
    public function block_foot_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "QuartetKakarotBundle::myofficeBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 49,  108 => 47,  100 => 43,  95 => 19,  92 => 18,  82 => 12,  62 => 10,  57 => 6,  54 => 5,  47 => 14,  42 => 13,  40 => 5,  37 => 4,  34 => 3,  119 => 64,  112 => 60,  105 => 55,  103 => 44,  97 => 51,  86 => 13,  71 => 31,  60 => 23,  49 => 15,  38 => 6,  35 => 5,  29 => 3,);
    }
}


/* QuartetKakarotBundle::myofficeBase.html.twig */
class __TwigTemplate_4d465a48bdcecfc7393bce34239fe5ef7511db5ce75d59782f5c23a42ff8be57_704615936 extends Twig_Template
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
                ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                    <li class=\"active\"><a herr=\"#\">ログイン名：";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "name"), "html", null, true);
            echo "</a></li>
                    ";
            // line 28
            $context["noticeMessage"] = "通知はありません";
            // line 29
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "notifications"));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 30
                echo "                        ";
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "isread") == 0)) {
                    // line 31
                    echo "                            ";
                    $context["noticeMessage"] = "通知があります";
                    // line 32
                    echo "                        ";
                }
                // line 33
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["noticeMessage"]) ? $context["noticeMessage"] : $this->getContext($context, "noticeMessage")), "html", null, true);
            echo "</a></li>
                ";
        } else {
            // line 36
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">ログイン</a></li>
                ";
        }
        // line 38
        echo "            </ul>
        ";
    }

    public function getTemplateName()
    {
        return "QuartetKakarotBundle::myofficeBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 38,  219 => 36,  211 => 34,  205 => 33,  202 => 32,  199 => 31,  196 => 30,  191 => 29,  189 => 28,  184 => 27,  182 => 26,  176 => 25,  173 => 24,  170 => 23,  163 => 21,  160 => 20,  113 => 49,  108 => 47,  100 => 43,  95 => 19,  92 => 18,  82 => 12,  62 => 10,  57 => 6,  54 => 5,  47 => 14,  42 => 13,  40 => 5,  37 => 4,  34 => 3,  119 => 64,  112 => 60,  105 => 55,  103 => 44,  97 => 51,  86 => 13,  71 => 31,  60 => 23,  49 => 15,  38 => 6,  35 => 5,  29 => 3,);
    }
}
