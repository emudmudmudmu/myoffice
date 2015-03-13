<?php

/* FOSUserBundle:Management:index.html.twig */
class __TwigTemplate_0e2a4982648dccc17c3ee02a5648445259d8ca2ac5f63cf4d7baf3ed7517ae50 extends Twig_Template
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
        echo "管理画面";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <h3>共通設定</h3>
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <td class=\"management_label_td\">ユーザー情報</td>
                <td class=\"management_button_td\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" class=\"btn btn-info\" role=\"button\">変更</a></td>
            </tr>
            <tr>
                <td class=\"management_label_td\">権限設定</td>
                <td class=\"management_button_td\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("role");
        echo "\" class=\"btn btn-warning\" role=\"button\">表示</a></td>
            </tr>
        </tbody>
    </table>

    <h3>MyOffice</h3>
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <td class=\"management_label_td\">役職一覧</td>
                <td class=\"management_button_td\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("position");
        echo "\" class=\"btn btn-info\" role=\"button\">変更</a></td>
            </tr>
            <tr>
                <td class=\"management_label_td\">部署一覧</td>
                <td class=\"management_button_td\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("division");
        echo "\" class=\"btn btn-info\" role=\"button\">変更</a></td>
            </tr>
            <tr>
                <td class=\"management_label_td\">経費項目一覧</td>
                <td class=\"management_button_td\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("accounttitle");
        echo "\" class=\"btn btn-info\" role=\"button\">変更</a></td>
            </tr>
        </tbody>
    </table>

    <h3>社内ポータルサイト</h3>
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <td class=\"management_label_td\">いいね！更新頻度</td>
                <td class=\"management_button_td\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("globalsetting");
        echo "\" class=\"btn btn-info\" role=\"button\">変更</a></td>
            </tr>
            <tr>
                <td class=\"management_label_td\">曜日テーブル設定</td>
                <td class=\"management_button_td\"><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("day");
        echo "\" class=\"btn btn-warning\" role=\"button\">表示</a></td>
            </tr>
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Management:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  92 => 43,  79 => 33,  72 => 29,  65 => 25,  52 => 15,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
