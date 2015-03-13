<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ea36e76282d0599d975ac85ec2dad7a111e23d5cb6d168ff2620a56086143244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("QuartetKakarotBundle::base.html.twig");

        $this->blocks = array(
            'headline' => array($this, 'block_headline'),
            'content_row' => array($this, 'block_content_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuartetKakarotBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_headline($context, array $blocks = array())
    {
        echo "ログイン";
    }

    // line 7
    public function block_content_row($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 12
        echo "
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">ログイン名</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    <br>
    <label for=\"password\">パスワード</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <br>
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">ログイン状態を記憶する</label>
    <br>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"ログイン\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 14,  52 => 13,  49 => 12,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  29 => 5,);
    }
}
