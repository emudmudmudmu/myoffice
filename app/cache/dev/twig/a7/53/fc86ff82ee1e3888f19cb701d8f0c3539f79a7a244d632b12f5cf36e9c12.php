<?php

/* FOSUserBundle:Main:index.html.twig */
class __TwigTemplate_a753fc86ff82ee1e3888f19cb701d8f0c3539f79a7a244d632b12f5cf36e9c12 extends Twig_Template
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
        echo "社内ポータルサイト";
    }

    // line 7
    public function block_content_row($context, array $blocks = array())
    {
        // line 8
        echo "
    <h3>ゴミ捨て・掃除当番（今週）<a href=\"http://kakarot/qcwiki/?p=2172\"  target=\"_blank\" class=\"btn btn-info\" role=\"button\">＊</a></h3>

    <table class=\"table table-striped\">
        <tbody>
            <tr>
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clean_schedules"]) ? $context["clean_schedules"] : $this->getContext($context, "clean_schedules")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "                    ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "holiday") == 1)) {
                // line 16
                echo "                        <td class=\"clean_schedules_td danger\">
                    ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "login") == 1)) {
                // line 18
                echo "                        <td class=\"clean_schedules_td success\">
                    ";
            } else {
                // line 20
                echo "                        <td class=\"clean_schedules_td\">
                    ";
            }
            // line 22
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dayname"), "html", null, true);
            echo ")
                        </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </tr>
                <tr>
                ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clean_schedules"]) ? $context["clean_schedules"] : $this->getContext($context, "clean_schedules")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                    ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "holiday") == 1)) {
                // line 29
                echo "                        <td class=\"clean_schedules_td danger\">
                    ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "login") == 1)) {
                // line 31
                echo "                        <td class=\"clean_schedules_td success\">
                    ";
            } else {
                // line 33
                echo "                        <td class=\"clean_schedules_td\">
                    ";
            }
            // line 35
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "
                        </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tr>
        </tbody>
    </table>

    <h3>今月のいいねグループ＆褒められ担当</h3>

    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <td></td>
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oneWeekHolidays"]) ? $context["oneWeekHolidays"] : $this->getContext($context, "oneWeekHolidays")));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 49
            echo "                    <td class=\"like_schedules_td\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "dayname"), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tr>

            ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["like_schedules"]) ? $context["like_schedules"] : $this->getContext($context, "like_schedules")));
        foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
            // line 54
            echo "                <tr>
                    <td>
                        グループ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), "groupname"), "html", null, true);
            echo "
                    </td>
                ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), "group"));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 59
                echo "                    ";
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login") == 1)) {
                    // line 60
                    echo "                        <td class=\"like_schedules_td success\">
                    ";
                } else {
                    // line 62
                    echo "                        <td class=\"like_schedules_td\">
                    ";
                }
                // line 64
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
                echo "
                        </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>

    <h3>知っ得当番（今月）</h3>
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oneWeekHeader"]) ? $context["oneWeekHeader"] : $this->getContext($context, "oneWeekHeader")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 77
            echo "                    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 6)) {
                // line 78
                echo "                        <td class=\"blog_schedules_header_td danger\">
                    ";
            } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 7)) {
                // line 80
                echo "                        <td class=\"blog_schedules_header_td danger\">
                    ";
            } else {
                // line 82
                echo "                        <td class=\"blog_schedules_header_td\">
                    ";
            }
            // line 84
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "name"), "html", null, true);
            echo "</td>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </tr>
            ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_schedules"]) ? $context["blog_schedules"] : $this->getContext($context, "blog_schedules")));
        foreach ($context['_seq'] as $context["_key"] => $context["days"]) {
            // line 88
            echo "                <tr>
                    ";
            // line 89
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["days"]) ? $context["days"] : $this->getContext($context, "days")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 90
                echo "                        ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 6)) {
                    // line 91
                    echo "                            <td class=\"blog_schedules_td danger\">
                        ";
                } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 7)) {
                    // line 93
                    echo "                            <td class=\"blog_schedules_td danger\">
                        ";
                } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "holiday") == 1)) {
                    // line 95
                    echo "                            <td class=\"blog_schedules_td danger\">
                        ";
                } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login") == 1)) {
                    // line 97
                    echo "                            <td class=\"blog_schedules_td success\">
                        ";
                } else {
                    // line 99
                    echo "                            <td class=\"blog_schedules_td\">
                        ";
                }
                // line 101
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
                echo "</td>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['days'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 105,  311 => 103,  292 => 101,  288 => 99,  284 => 97,  280 => 95,  276 => 93,  272 => 91,  269 => 90,  252 => 89,  249 => 88,  245 => 87,  242 => 86,  225 => 84,  221 => 82,  217 => 80,  213 => 78,  210 => 77,  193 => 76,  184 => 69,  177 => 67,  167 => 64,  163 => 62,  159 => 60,  156 => 59,  152 => 58,  147 => 56,  143 => 54,  139 => 53,  135 => 51,  126 => 49,  122 => 48,  110 => 38,  100 => 35,  96 => 33,  92 => 31,  88 => 29,  85 => 28,  81 => 27,  77 => 25,  65 => 22,  61 => 20,  57 => 18,  53 => 16,  50 => 15,  46 => 14,  38 => 8,  35 => 7,  29 => 5,);
    }
}
