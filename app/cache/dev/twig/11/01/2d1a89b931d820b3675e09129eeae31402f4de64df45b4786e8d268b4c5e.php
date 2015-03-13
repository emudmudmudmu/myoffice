<?php

/* FOSUserBundle:Notification:index.html.twig */
class __TwigTemplate_11012d1a89b931d820b3675e09129eeae31402f4de64df45b4786e8d268b4c5e extends Twig_Template
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
        echo "通知一覧";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"contents\">
            <div class=\"notification_top\">
                <div class=\"notification_nav_left\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_all_already_read", array("date" => (isset($context["currentDate"]) ? $context["currentDate"] : $this->getContext($context, "currentDate")))), "html", null, true);
        echo "\" class=\"btn btn-success\" role=\"button\">一括既読</a>
                </div>
                <div class=\"notification_nav_right\">
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_pager", array("date" => (isset($context["prevDate"]) ? $context["prevDate"] : $this->getContext($context, "prevDate")))), "html", null, true);
        echo "\">&lt;&lt;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["prevDate"]) ? $context["prevDate"] : $this->getContext($context, "prevDate")), "Y/m"), "html", null, true);
        echo "</a>
                    &nbsp;&nbsp;
                    <span class=\"notification_currentDate\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["currentDate"]) ? $context["currentDate"] : $this->getContext($context, "currentDate")), "Y/m"), "html", null, true);
        echo "</span>
                    &nbsp;&nbsp;
                    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_pager", array("date" => (isset($context["nextDate"]) ? $context["nextDate"] : $this->getContext($context, "nextDate")))), "html", null, true);
        echo "\">&gt;&gt;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["nextDate"]) ? $context["nextDate"] : $this->getContext($context, "nextDate")), "Y/m"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th class=\"notification_list_date\">通知日</th>
                        <th class=\"notification_list_content\">内容</th>
                        <th class=\"notification_list_button\"></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                    <tr>
                        <td class=\"notification_list_date\">
                            ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created"), "Y/m/d"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created"), "w"), array(), "array"), "html", null, true);
            echo ")
                        </td>
                        <td class=\"notification_list_content\">
                            ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content"), "html", null, true);
            echo "
                        </td>
                        <td class=\"notification_list_button\">
                            ";
            // line 38
            if ((false == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isRead"))) {
                // line 39
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_already_read", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "date" => (isset($context["currentDate"]) ? $context["currentDate"] : $this->getContext($context, "currentDate")))), "html", null, true);
                echo "\" class=\"btn btn-info\" role=\"button\">既読にする</a>
                            ";
            } else {
                // line 41
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_not_yet_read", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "date" => (isset($context["currentDate"]) ? $context["currentDate"] : $this->getContext($context, "currentDate")))), "html", null, true);
                echo "\" class=\"btn btn-warning\" role=\"button\">未読にする</a>
                            ";
            }
            // line 43
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Notification:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  115 => 43,  109 => 41,  103 => 39,  101 => 38,  95 => 35,  87 => 32,  83 => 30,  79 => 29,  62 => 17,  57 => 15,  50 => 13,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
