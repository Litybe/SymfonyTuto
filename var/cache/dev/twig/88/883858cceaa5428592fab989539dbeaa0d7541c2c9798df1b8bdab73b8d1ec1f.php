<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_057ce3cd10e203940c0b4cb7a4b72205357cb56183ffcfb4ca551ab3f48d5331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_d0a92172a4ec127d61b7a285a339874d25d9e31197eff09505d5c7f4c32bc8a9 = $this->env->getExtension("native_profiler");
        $__internal_d0a92172a4ec127d61b7a285a339874d25d9e31197eff09505d5c7f4c32bc8a9->enter($__internal_d0a92172a4ec127d61b7a285a339874d25d9e31197eff09505d5c7f4c32bc8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0a92172a4ec127d61b7a285a339874d25d9e31197eff09505d5c7f4c32bc8a9->leave($__internal_d0a92172a4ec127d61b7a285a339874d25d9e31197eff09505d5c7f4c32bc8a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_773af3743468304dea0fab58ec36dfc2deb5754c8deb6220155e6ec772b0da8e = $this->env->getExtension("native_profiler");
        $__internal_773af3743468304dea0fab58ec36dfc2deb5754c8deb6220155e6ec772b0da8e->enter($__internal_773af3743468304dea0fab58ec36dfc2deb5754c8deb6220155e6ec772b0da8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_773af3743468304dea0fab58ec36dfc2deb5754c8deb6220155e6ec772b0da8e->leave($__internal_773af3743468304dea0fab58ec36dfc2deb5754c8deb6220155e6ec772b0da8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1a2e4a1d60883e1bffd61ae5c5cc169ef42433fdcc805f35e4d5846b8bf6359 = $this->env->getExtension("native_profiler");
        $__internal_b1a2e4a1d60883e1bffd61ae5c5cc169ef42433fdcc805f35e4d5846b8bf6359->enter($__internal_b1a2e4a1d60883e1bffd61ae5c5cc169ef42433fdcc805f35e4d5846b8bf6359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1a2e4a1d60883e1bffd61ae5c5cc169ef42433fdcc805f35e4d5846b8bf6359->leave($__internal_b1a2e4a1d60883e1bffd61ae5c5cc169ef42433fdcc805f35e4d5846b8bf6359_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
