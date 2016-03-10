<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0c07c79370d4019868f3cd2d84ebc1084fc83c92c4db09c188806b3d5a6cfb85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b82cd11a8f264c0cb914ad0dc59efec73e3d08e2215e6d6a695373d4aeeaa77 = $this->env->getExtension("native_profiler");
        $__internal_1b82cd11a8f264c0cb914ad0dc59efec73e3d08e2215e6d6a695373d4aeeaa77->enter($__internal_1b82cd11a8f264c0cb914ad0dc59efec73e3d08e2215e6d6a695373d4aeeaa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b82cd11a8f264c0cb914ad0dc59efec73e3d08e2215e6d6a695373d4aeeaa77->leave($__internal_1b82cd11a8f264c0cb914ad0dc59efec73e3d08e2215e6d6a695373d4aeeaa77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94e66de8fa479e2dc920b92f1c48be444e7c732147436e83f6298515d79adb86 = $this->env->getExtension("native_profiler");
        $__internal_94e66de8fa479e2dc920b92f1c48be444e7c732147436e83f6298515d79adb86->enter($__internal_94e66de8fa479e2dc920b92f1c48be444e7c732147436e83f6298515d79adb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_94e66de8fa479e2dc920b92f1c48be444e7c732147436e83f6298515d79adb86->leave($__internal_94e66de8fa479e2dc920b92f1c48be444e7c732147436e83f6298515d79adb86_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5beb8a2347abcf962affae1143191c6fd56a97cb30d60a1e82537030f40c2d58 = $this->env->getExtension("native_profiler");
        $__internal_5beb8a2347abcf962affae1143191c6fd56a97cb30d60a1e82537030f40c2d58->enter($__internal_5beb8a2347abcf962affae1143191c6fd56a97cb30d60a1e82537030f40c2d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5beb8a2347abcf962affae1143191c6fd56a97cb30d60a1e82537030f40c2d58->leave($__internal_5beb8a2347abcf962affae1143191c6fd56a97cb30d60a1e82537030f40c2d58_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
