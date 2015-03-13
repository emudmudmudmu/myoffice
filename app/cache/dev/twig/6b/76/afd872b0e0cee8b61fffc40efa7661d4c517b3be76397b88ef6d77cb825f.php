<?php

/* FOSUserBundle:Attendance:index.html.twig */
class __TwigTemplate_6b76afd872b0e0cee8b61fffc40efa7661d4c517b3be76397b88ef6d77cb825f extends Twig_Template
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
        echo "勤怠管理";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"contents\">
            <div class=\"attandance_top\">
                <div class=\"attendance_nav_left\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("attendance_new");
        echo "\" class=\"btn btn-primary\" role=\"button\">新規作成</a>
                </div>
                <div class=\"attendance_nav_right\">
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attendance_pager", array("date" => (isset($context["prevDate"]) ? $context["prevDate"] : $this->getContext($context, "prevDate")))), "html", null, true);
        echo "\">&lt;&lt;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["prevDate"]) ? $context["prevDate"] : $this->getContext($context, "prevDate")), "Y/m"), "html", null, true);
        echo "</a>
                    &nbsp;&nbsp;
                    <span class=\"attendance_currentDate\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["currentDate"]) ? $context["currentDate"] : $this->getContext($context, "currentDate")), "Y/m"), "html", null, true);
        echo "</span>
                    &nbsp;&nbsp;
                    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attendance_pager", array("date" => (isset($context["nextDate"]) ? $context["nextDate"] : $this->getContext($context, "nextDate")))), "html", null, true);
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
                        <th>日付</th>
                        <th>出勤</th>
                        <th>退勤</th>
                        <th>メモ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "                    <tr>
                        <td class=\"attendance_list_date\">
                            ";
            // line 39
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date")) {
                // line 40
                echo "                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y/m/d"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "w"), array(), "array"), "html", null, true);
                echo ")
                            ";
            }
            // line 42
            echo "                        </td>
                        <td class=\"attendance_list_time\">
                            ";
            // line 44
            if ((!twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attended")))) {
                // line 45
                echo "                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attended"), "H:i"), "html", null, true);
                echo "
                            ";
            }
            // line 47
            echo "                        </td>
                        <td class=\"attendance_list_time\">
                            ";
            // line 49
            if ((!twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "returned")))) {
                // line 50
                echo "                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "returned"), "H:i"), "html", null, true);
                echo "
                            ";
            }
            // line 52
            echo "                        </td>
                        <td class=\"attendance_list_note\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note"), "html", null, true);
            echo "</td>
                        <td class=\"attendance_list_button\">
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attendance_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info\" role=\"button\">編集</a>
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attendance_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">削除</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Attendance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 60,  148 => 56,  144 => 55,  139 => 53,  136 => 52,  130 => 50,  128 => 49,  124 => 47,  118 => 45,  116 => 44,  112 => 42,  104 => 40,  102 => 39,  98 => 37,  94 => 36,  81 => 25,  75 => 22,  72 => 21,  70 => 20,  62 => 17,  57 => 15,  50 => 13,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
