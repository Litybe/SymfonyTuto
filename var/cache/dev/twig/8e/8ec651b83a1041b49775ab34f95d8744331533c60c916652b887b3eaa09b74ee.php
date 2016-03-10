<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_85c18e272786efbf6e84ff8e3b2aa034cfb2ee8842153c55e29bb00cc0e065ee extends Twig_Template
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
        $__internal_40330538f4ee3eb3c2514a20d5dfd49fc97baa08375dec756eb0c561c779f036 = $this->env->getExtension("native_profiler");
        $__internal_40330538f4ee3eb3c2514a20d5dfd49fc97baa08375dec756eb0c561c779f036->enter($__internal_40330538f4ee3eb3c2514a20d5dfd49fc97baa08375dec756eb0c561c779f036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_40330538f4ee3eb3c2514a20d5dfd49fc97baa08375dec756eb0c561c779f036->leave($__internal_40330538f4ee3eb3c2514a20d5dfd49fc97baa08375dec756eb0c561c779f036_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
