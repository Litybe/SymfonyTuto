<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7857712ef374aab5e5beefe71cffeec08144fabe2149a7b05a508e40835bb2f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d15e11f12e074bc254ce4e5559e592c56f9f2048e17c8a99fe4db489e156508 = $this->env->getExtension("native_profiler");
        $__internal_1d15e11f12e074bc254ce4e5559e592c56f9f2048e17c8a99fe4db489e156508->enter($__internal_1d15e11f12e074bc254ce4e5559e592c56f9f2048e17c8a99fe4db489e156508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1d15e11f12e074bc254ce4e5559e592c56f9f2048e17c8a99fe4db489e156508->leave($__internal_1d15e11f12e074bc254ce4e5559e592c56f9f2048e17c8a99fe4db489e156508_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
