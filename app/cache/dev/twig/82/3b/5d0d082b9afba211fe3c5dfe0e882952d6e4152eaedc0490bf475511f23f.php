<?php

/* FOSUserBundle:MyOffice:index.html.twig */
class __TwigTemplate_823b5d0d082b9afba211fe3c5dfe0e882952d6e4152eaedc0490bf475511f23f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("QuartetKakarotBundle::myofficeBase.html.twig");

        $this->blocks = array(
            'headline' => array($this, 'block_headline'),
            'content_row' => array($this, 'block_content_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuartetKakarotBundle::myofficeBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headline($context, array $blocks = array())
    {
        echo "MyOffice";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"contents\">
            <table class=\"table table-striped\">
                <tbody>
                    <tr>
                        <td class=\"myoffice_list_title\">
                            勤怠管理
                        </td>
                        <td class=\"myoffice_list_button\">
                            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("attendance");
        echo "\" class=\"btn btn-info\" role=\"button\">編集</a>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"myoffice_list_title\">
                            経費管理
                        </td>
                        <td class=\"myoffice_list_button\">
                            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("expense");
        echo "\" class=\"btn btn-info\" role=\"button\">編集</a>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"myoffice_list_title\">
                            有休申請
                        </td>
                        <td class=\"myoffice_list_button\">
                            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("paidholiday");
        echo "\" class=\"btn btn-info\" role=\"button\">申請</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class=\"table table-striped\">
                <tbody>
                    <tr>
                        <td class=\"myoffice_list_title\">
                            経費精算
                        </td>
                        <td class=\"myoffice_list_button\">
                            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("expense_processing");
        echo "\" class=\"btn btn-warning\" role=\"button\">精算</a>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"myoffice_list_title\">
                            有休承認
                        </td>
                        <td class=\"myoffice_list_button\">
                            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("paidholiday_approval");
        echo "\" class=\"btn btn-warning\" role=\"button\">承認</a>
                        </td>
                    </tr>
                    ";
        // line 54
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "role"), "id") == 2)) {
            // line 55
            echo "                        <tr>
                            <td class=\"myoffice_list_title\">
                                管理画面
                            </td>
                            <td class=\"myoffice_list_button\">
                                <a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("management");
            echo "\" class=\"btn btn-warning\" role=\"button\">表示</a>
                            </td>
                        </tr>
                    ";
        }
        // line 64
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:MyOffice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 64,  112 => 60,  105 => 55,  103 => 54,  97 => 51,  86 => 43,  71 => 31,  60 => 23,  49 => 15,  38 => 6,  35 => 5,  29 => 3,);
    }
}
