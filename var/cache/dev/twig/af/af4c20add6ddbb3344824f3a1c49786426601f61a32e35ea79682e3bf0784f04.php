<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1af7abea983a203165ec5d3e3bd844490a4a7222bbfe21a04a42500ae2706e6a extends Twig_Template
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
        $__internal_3f63c9b37fbc8ef73bd7d072365c7056705934641b6c3c397d38d0d90f9c8c23 = $this->env->getExtension("native_profiler");
        $__internal_3f63c9b37fbc8ef73bd7d072365c7056705934641b6c3c397d38d0d90f9c8c23->enter($__internal_3f63c9b37fbc8ef73bd7d072365c7056705934641b6c3c397d38d0d90f9c8c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3f63c9b37fbc8ef73bd7d072365c7056705934641b6c3c397d38d0d90f9c8c23->leave($__internal_3f63c9b37fbc8ef73bd7d072365c7056705934641b6c3c397d38d0d90f9c8c23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
