<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c4eda25a5542e4ca85b16354e8b0998df2b1543c0426145f3bb5787ce8d24cc5 extends Twig_Template
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
        $__internal_8f9fe43e38c18b66d2778012ba681ebb74f8c3bbd7bb342cad2399c3b8606bea = $this->env->getExtension("native_profiler");
        $__internal_8f9fe43e38c18b66d2778012ba681ebb74f8c3bbd7bb342cad2399c3b8606bea->enter($__internal_8f9fe43e38c18b66d2778012ba681ebb74f8c3bbd7bb342cad2399c3b8606bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8f9fe43e38c18b66d2778012ba681ebb74f8c3bbd7bb342cad2399c3b8606bea->leave($__internal_8f9fe43e38c18b66d2778012ba681ebb74f8c3bbd7bb342cad2399c3b8606bea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
