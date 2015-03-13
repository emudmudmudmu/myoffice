<?php

/* FOSUserBundle:Expense:index.html.twig */
class __TwigTemplate_9097b9eefbfb06cc9df555d84b82a28010425948973b51dc7da04884d32ca360 extends Twig_Template
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
        echo "経費管理";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"contents\">
            <div class=\"expense_top\">
                <div class=\"expense_nav_left\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("expense_new");
        echo "\" class=\"btn btn-primary\" role=\"button\">新規作成</a>
                </div>
                <div class=\"expense_nav_right\">
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expense_pager", array("date" => (isset($context["prevDate"]) ? $context["prevDate"] : $this->getContext($context, "prevDate")))), "html", null, true);
        echo "\">&lt;&lt;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["prevDate"]) ? $context["prevDate"] : $this->getContext($context, "prevDate")), "Y/m"), "html", null, true);
        echo "</a>
                    &nbsp;&nbsp;
                    <span class=\"expense_currentDate\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["currentDate"]) ? $context["currentDate"] : $this->getContext($context, "currentDate")), "Y/m"), "html", null, true);
        echo "</span>
                    &nbsp;&nbsp;
                    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expense_pager", array("date" => (isset($context["nextDate"]) ? $context["nextDate"] : $this->getContext($context, "nextDate")))), "html", null, true);
        echo "\">&gt;&gt;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["nextDate"]) ? $context["nextDate"] : $this->getContext($context, "nextDate")), "Y/m"), "html", null, true);
        echo "</a>
                </div>
            </div>
            ";
        // line 20
        if ((!twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))))) {
            // line 21
            echo "                <div class=\"alert alert-danger\">
                    <p>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
                </div>
            ";
        }
        // line 25
        echo "            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>使用日</th>
                        <th>経費項目</th>
                        <th>支払先</th>
                        <th>金額</th>
                        <th>状態</th>
                        <th>備考</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "                    <tr>
                        <td class=\"expense_list_date\">
                            ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "w"), array(), "array"), "html", null, true);
            echo ")
                        </td>
                        <td class=\"expense_list_accountTitle\">
                            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "accountTitle"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_payee\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "payee"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_amount\">
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "amount"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_status\">
                            ";
            // line 53
            if (("open" == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"))) {
                // line 54
                echo "                                未精算
                            ";
            } elseif (("processing" == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"))) {
                // line 56
                echo "                                清算中
                            ";
            } elseif (("closed" == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"))) {
                // line 58
                echo "                                精算済
                            ";
            }
            // line 60
            echo "                        </td>
                        <td class=\"expense_list_note\">
                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_button\">
                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expense_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info\" role=\"button\">編集</a>
                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expense_copy", array("date" => (isset($context["currentDate"]) ? $context["currentDate"] : $this->getContext($context, "currentDate")), "id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-success\" role=\"button\">コピー</a>
                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expense_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">削除</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Expense:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 71,  162 => 67,  158 => 66,  154 => 65,  148 => 62,  144 => 60,  140 => 58,  136 => 56,  132 => 54,  130 => 53,  124 => 50,  118 => 47,  112 => 44,  104 => 41,  100 => 39,  96 => 38,  81 => 25,  75 => 22,  72 => 21,  70 => 20,  62 => 17,  57 => 15,  50 => 13,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
