<?php

/* FOSUserBundle:User:index.html.twig */
class __TwigTemplate_55f3636530773a12a7a1a69b23f58f0e22a882eac8d73a5e860d2d5854d83c0f extends Twig_Template
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

    // line 3
    public function block_headline($context, array $blocks = array())
    {
        echo "ユーザー情報　一覧";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"contents\">

            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>氏名</th>
                        <th>ログイン名</th>
                        <th>メールアドレス</th>
                        <th>部署</th>
                        <th>役職</th>
                        <th>権限</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                    <tr>
                        <td class=\"user_list_name_td\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
                        <td class=\"user_list_username_td\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</td>
                        <td class=\"user_list_email_td\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                        <td class=\"user_list_division_td\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "division"), "html", null, true);
            echo "</td>
                        <td class=\"user_list_position_td\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), "html", null, true);
            echo "</td>
                        <td class=\"user_list_role_td\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "role"), "html", null, true);
            echo "</td>
                        <td class=\"user_list_button_td\">
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info\" role=\"button\">編集</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
            </table>

            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\" role=\"button\">新規ユーザー作成</a>
            <br>
            <br>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("management");
        echo "\" class=\"btn btn-warning\" role=\"button\">管理画面に戻る</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  103 => 38,  98 => 35,  88 => 31,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  60 => 23,  56 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
