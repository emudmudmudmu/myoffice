<?php

/* FOSUserBundle:PaidHoliday:index.html.twig */
class __TwigTemplate_4f033bb2ac542f213cafbf77ac9a7d3b42d9d9e7be66853a0588d6353a3311cb extends Twig_Template
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
        echo "有休申請";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"contents\">
            <div class=\"paidholiday_top\">
                <div class=\"paidholiday_nav_left\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("paidholiday_new");
        echo "\" class=\"btn btn-primary\" role=\"button\">新規作成</a>
                </div>
                <div class=\"paidholiday_nav_right\">
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paidholiday_pager", array("date" => (isset($context["prevDate"]) ? $context["prevDate"] : $this->getContext($context, "prevDate")))), "html", null, true);
        echo "\">&lt;&lt;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["prevDate"]) ? $context["prevDate"] : $this->getContext($context, "prevDate")), "Y/m"), "html", null, true);
        echo "</a>
                    &nbsp;&nbsp;
                    <span class=\"paidholiday_currentDate\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["currentDate"]) ? $context["currentDate"] : $this->getContext($context, "currentDate")), "Y/m"), "html", null, true);
        echo "</span>
                    &nbsp;&nbsp;
                    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paidholiday_pager", array("date" => (isset($context["nextDate"]) ? $context["nextDate"] : $this->getContext($context, "nextDate")))), "html", null, true);
        echo "\">&gt;&gt;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["nextDate"]) ? $context["nextDate"] : $this->getContext($context, "nextDate")), "Y/m"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th class=\"paidholiday_list_date\">開始日</th>
                        <th class=\"paidholiday_list_date\">終了日</th>
                        <th class=\"paidholiday_list_note\">理由</th>
                        <th class=\"paidholiday_list_button\"></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                    <tr>
                        <td class=\"paidholiday_list_date\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate"), "Y/m/d"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate"), "w"), array(), "array"), "html", null, true);
            echo ")
                        </td>
                        <td class=\"paidholiday_list_date\">
                            ";
            // line 36
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate") != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate"))) {
                // line 37
                echo "                               ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate"), "Y/m/d"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate"), "w"), array(), "array"), "html", null, true);
                echo ")
                            ";
            }
            // line 39
            echo "                        </td>
                        <td class=\"paidholiday_list_note\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note"), "html", null, true);
            echo "</td>
                        <td class=\"paidholiday_list_button\">
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paidholiday_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info\" role=\"button\">編集</a>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paidholiday_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">削除</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:PaidHoliday:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 47,  118 => 43,  114 => 42,  109 => 40,  106 => 39,  98 => 37,  96 => 36,  88 => 33,  84 => 31,  80 => 30,  62 => 17,  57 => 15,  50 => 13,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
