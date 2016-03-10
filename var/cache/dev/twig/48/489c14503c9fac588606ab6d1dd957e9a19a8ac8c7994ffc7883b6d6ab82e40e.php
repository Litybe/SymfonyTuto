<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a195e45247d003b79eb62cd2ab80d09f4694b4ba739900d4f703df8c48080238 extends Twig_Template
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
        $__internal_e2da874d9ea906d15f540b1d10503da9b0d151778687017e17a41eb51c499a7a = $this->env->getExtension("native_profiler");
        $__internal_e2da874d9ea906d15f540b1d10503da9b0d151778687017e17a41eb51c499a7a->enter($__internal_e2da874d9ea906d15f540b1d10503da9b0d151778687017e17a41eb51c499a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_e2da874d9ea906d15f540b1d10503da9b0d151778687017e17a41eb51c499a7a->leave($__internal_e2da874d9ea906d15f540b1d10503da9b0d151778687017e17a41eb51c499a7a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
