<?php

/* QuartetKakarotBundle:Expense:processing.html.twig */
class __TwigTemplate_7cc784944733b0bff3eb99b456d9bfd6bdcb21aee3f3442bb1c8c5ac60d21f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("QuartetKakarotBundle::myofficeBase.html.twig");

        $this->blocks = array(
            'headline' => array($this, 'block_headline'),
            'content_row' => array($this, 'block_content_row'),
            'foot_script' => array($this, 'block_foot_script'),
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
        echo "経費管理　未精算一覧";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"contents\">
            <div class=\"expense_top\">
                <div class=\"expense_nav_left\">
                    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("expense_processing_select");
        echo "\" method=\"POST\" name=\"expense_form\" id=\"expense_form\">
                        <input type=\"hidden\" id=\"expense_status\" name=\"expense_status\" value=\"\"/>
                        <table>
                            <tr>
                                <td>
                                    <span class=\"btn btn-primary\" role=\"button\" id=\"expense_processing\">精算中にする</span>
                                </td>
                                <td>
                                    <span class=\"btn btn-success\" role=\"button\" id=\"expense_closed\">一括精算</span>
                                </td>
                                <td>
                                    <span class=\"btn btn-danger\" role=\"button\" id=\"expense_open\">申請却下</span>
                                </td>
                                <td>
                                    <select id=\"expense_user_list\" name=\"expense_user_list\" class=\"form-control\">
                                        <option value=\"\">&lt;全員&gt;</a>
                                        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userEntities"]) ? $context["userEntities"] : $this->getContext($context, "userEntities")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "                                            ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == (isset($context["selectUser"]) ? $context["selectUser"] : $this->getContext($context, "selectUser")))) {
                // line 28
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name"), "html", null, true);
                echo "</open>
                                            ";
            } else {
                // line 30
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name"), "html", null, true);
                echo "</open>
                                            ";
            }
            // line 32
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                    </select>
                                </td>
                                <td>
                                    <select id=\"expense_accountTitle_list\" name=\"expense_accountTitle_list\" class=\"form-control\">
                                        <option value=\"\">&lt;すべて&gt;</a>
                                        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accountTitleEntities"]) ? $context["accountTitleEntities"] : $this->getContext($context, "accountTitleEntities")));
        foreach ($context['_seq'] as $context["_key"] => $context["accountTitle"]) {
            // line 39
            echo "                                            ";
            if (($this->getAttribute((isset($context["accountTitle"]) ? $context["accountTitle"] : $this->getContext($context, "accountTitle")), "id") == (isset($context["selectAccountTitle"]) ? $context["selectAccountTitle"] : $this->getContext($context, "selectAccountTitle")))) {
                // line 40
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accountTitle"]) ? $context["accountTitle"] : $this->getContext($context, "accountTitle")), "id"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accountTitle"]) ? $context["accountTitle"] : $this->getContext($context, "accountTitle")), "name"), "html", null, true);
                echo "</open>
                                            ";
            } else {
                // line 42
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accountTitle"]) ? $context["accountTitle"] : $this->getContext($context, "accountTitle")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accountTitle"]) ? $context["accountTitle"] : $this->getContext($context, "accountTitle")), "name"), "html", null, true);
                echo "</open>
                                            ";
            }
            // line 44
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accountTitle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                    </select>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            ";
        // line 52
        if ((!twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))))) {
            // line 53
            echo "                <div class=\"alert alert-success\">
                    <p>";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
                </div>
            ";
        }
        // line 57
        echo "            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>使用日</th>
                        <th>使用者</th>
                        <th>経費項目</th>
                        <th>支払先</th>
                        <th>金額</th>
                        <th>備考</th>
                        <th>状態</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 71
            echo "                    <tr>
                        <td class=\"expense_list_date\">
                            ";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysLabel"]) ? $context["daysLabel"] : $this->getContext($context, "daysLabel")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "w"), array(), "array"), "html", null, true);
            echo ")
                        </td>
                        <td class=\"expense_list_user\">
                            ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_accountTitle\">
                            ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "accountTitle"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_payee\">
                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "payee"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_amount\">
                            ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "amount"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_note\">
                            ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note"), "html", null, true);
            echo "
                        </td>
                        <td class=\"expense_list_status\">
                            ";
            // line 91
            if (("open" == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"))) {
                // line 92
                echo "                                未精算
                            ";
            } elseif (("processing" == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"))) {
                // line 94
                echo "                                精算中
                            ";
            } elseif (("closed" == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"))) {
                // line 96
                echo "                                精算済
                            ";
            }
            // line 98
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    // line 107
    public function block_foot_script($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "71a4197_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_71a4197_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/71a4197_jquery.min_1.js");
            // line 112
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "71a4197_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_71a4197_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/71a4197_expense_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "71a4197"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_71a4197") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/71a4197.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "QuartetKakarotBundle:Expense:processing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 112,  243 => 108,  240 => 107,  232 => 101,  224 => 98,  220 => 96,  216 => 94,  212 => 92,  210 => 91,  204 => 88,  198 => 85,  192 => 82,  186 => 79,  180 => 76,  172 => 73,  168 => 71,  164 => 70,  149 => 57,  143 => 54,  140 => 53,  138 => 52,  129 => 45,  123 => 44,  115 => 42,  107 => 40,  104 => 39,  100 => 38,  93 => 33,  87 => 32,  79 => 30,  71 => 28,  68 => 27,  64 => 26,  45 => 10,  39 => 6,  36 => 5,  30 => 3,);
    }
}
