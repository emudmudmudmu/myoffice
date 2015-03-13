<?php

/* FOSUserBundle:PaidHoliday:approval.html.twig */
class __TwigTemplate_573863f94e0973a9b15ad4ff45e9c74ed28073138dad4d10f5c300aabf37bf75 extends Twig_Template
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
        echo "有休承認";
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
                        <th class=\"paidholiday_list_date\">申請者</th>
                        <th class=\"paidholiday_list_date\">有休開始日</th>
                        <th class=\"paidholiday_list_date\">有休終了日</th>
                        <th class=\"paidholiday_list_approval_note\">理由</th>
                        <th class=\"paidholiday_list_date\">申請日</th>
                        <th class=\"paidholiday_list_button\"></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                    <tr>
                        <td class=\"paidholiday_list_user\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "author"), "name"), "html", null, true);
            echo "</td>
                        <td class=\"paidholiday_list_date\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate"), "Y/m/d"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate"), "w"), array(), "array"), "html", null, true);
            echo ")
                        </td>
                        <td class=\"paidholiday_list_date\">
                            ";
            // line 27
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate") != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate"))) {
                // line 28
                echo "                               ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate"), "Y/m/d"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate"), "w"), array(), "array"), "html", null, true);
                echo ")
                            ";
            }
            // line 30
            echo "                        </td>
                        <td class=\"paidholiday_list_note\">
                            ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note"), "html", null, true);
            echo "
                        </td>
                        <td class=\"paidholiday_list_date\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created"), "Y/m/d"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate"), "w"), array(), "array"), "html", null, true);
            echo ")</td>
                        <td class=\"paidholiday_list_button\">
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paidholiday_approval_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info\" role=\"button\">承認</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:PaidHoliday:approval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  100 => 36,  93 => 34,  88 => 32,  84 => 30,  76 => 28,  74 => 27,  66 => 24,  61 => 22,  58 => 21,  54 => 20,  38 => 6,  35 => 5,  29 => 3,);
    }
}
