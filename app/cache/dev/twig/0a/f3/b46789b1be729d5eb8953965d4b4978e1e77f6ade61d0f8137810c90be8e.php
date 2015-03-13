<?php

/* FOSUserBundle:Attendance:new.html.twig */
class __TwigTemplate_0af3b46789b1be729d5eb8953965d4b4978e1e77f6ade61d0f8137810c90be8e extends Twig_Template
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
        echo "勤怠管理　新規作成";
    }

    // line 5
    public function block_content_row($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"contents\">
            ";
        // line 8
        if ((!twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))))) {
            // line 9
            echo "                <div class=\"alert alert-danger\">
                    <p>";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
                </div>
            ";
        }
        // line 13
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <table class=\"table table-striped\">
                    <tr>
                        <td class=\"attendance_title_td\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'label', array("label" => "日付"));
        echo "</td>
                        <td class=\"attendance_form_td\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), "year"), 'widget');
        echo "</td>
                        <td class=\"attendance_character_td\">/</td>
                        <td class=\"attendance_form_td\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), "month"), 'widget');
        echo "</td>
                        <td class=\"attendance_character_td\">/</td>
                        <td class=\"attendance_form_td\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), "day"), 'widget');
        echo "</td>
                        <td class=\"attendance_space_td\"></td>
                    </tr>
                    <tr>
                        <td class=\"attendance_title_td\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attended"), 'label', array("label" => "出勤"));
        echo "</td>
                        <td class=\"attendance_form_td\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attended"), "hour"), 'widget');
        echo "</td>
                        <td class=\"attendance_character_td\">:</td>
                        <td class=\"attendance_form_td\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attended"), "minute"), 'widget');
        echo "</td>
                        <td class=\"attendance_space_td\" colspan=\"3\"></td>
                    </tr>
                    <tr>
                        <td class=\"attendance_title_td\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "returned"), 'label', array("label" => "退勤"));
        echo "</td>
                        <td class=\"attendance_form_td\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "returned"), "hour"), 'widget');
        echo "</td>
                        <td class=\"attendance_character_td\">:</td>
                        <td class=\"attendance_form_td\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "returned"), "minute"), 'widget');
        echo "</td>
                        <td class=\"attendance_space_td\" colspan=\"3\"></td>
                     </tr>
                    <tr>
                        <td class=\"attendance_title_td\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break1Started"), 'label', array("label" => "昼休憩開始"));
        echo "</td>
                        <td class=\"attendance_form_td\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break1Started"), "hour"), 'widget');
        echo "</td>
                        <td class=\"attendance_character_td\">:</td>
                        <td class=\"attendance_form_td\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break1Started"), "minute"), 'widget');
        echo "</td>
                        <td class=\"attendance_space_td\" colspan=\"3\"></td>
                    </tr>
                    <tr>
                        <td class=\"attendance_title_td\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break1Ended"), 'label', array("label" => "昼休憩終了"));
        echo "</td>
                        <td class=\"attendance_form_td\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break1Ended"), "hour"), 'widget');
        echo "</td>
                        <td class=\"attendance_character_td\">:</td>
                        <td class=\"attendance_form_td\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break1Ended"), "minute"), 'widget');
        echo "</td>
                        <td class=\"attendance_space_td\" colspan=\"3\"></td>
                    </tr>
                    <tr>
                        <td class=\"attendance_title_td\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break2Started"), 'label', array("label" => "夜休憩開始"));
        echo "</td>
                        <td class=\"attendance_form_td\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break2Started"), "hour"), 'widget');
        echo "</td>
                        <td class=\"attendance_character_td\">:</td>
                        <td class=\"attendance_form_td\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break2Started"), "minute"), 'widget');
        echo "</td>
                        <td class=\"attendance_space_td\" colspan=\"3\"></td>
                    </tr>
                    <tr>
                        <td class=\"attendance_title_td\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break2Ended"), 'label', array("label" => "夜休憩終了"));
        echo "</td>
                        <td class=\"attendance_form_td\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break2Ended"), "hour"), 'widget');
        echo "</td>
                        <td class=\"attendance_character_td\">:</td>
                        <td class=\"attendance_form_td\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "break2Ended"), "minute"), 'widget');
        echo "</td>
                        <td class=\"attendance_space_td\" colspan=\"3\"></td>
                    </tr>
                    <tr>
                        <td class=\"attendance_title_td\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note"), 'label', array("label" => "メモ"));
        echo "</td>
                        <td colspan=\"6\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note"), 'widget');
        echo "</td>
                    </tr>
                </table>
                <div class=\"attendance_hidden_area\">
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'widget');
        echo "
                </div>
            ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <br>
            <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("attendance");
        echo "\" class=\"btn btn-warning\" role=\"button\">一覧に戻る</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Attendance:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 76,  193 => 74,  188 => 72,  181 => 68,  177 => 67,  170 => 63,  165 => 61,  161 => 60,  154 => 56,  149 => 54,  145 => 53,  138 => 49,  133 => 47,  129 => 46,  122 => 42,  117 => 40,  113 => 39,  106 => 35,  101 => 33,  97 => 32,  90 => 28,  85 => 26,  81 => 25,  74 => 21,  69 => 19,  64 => 17,  60 => 16,  53 => 13,  47 => 10,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
