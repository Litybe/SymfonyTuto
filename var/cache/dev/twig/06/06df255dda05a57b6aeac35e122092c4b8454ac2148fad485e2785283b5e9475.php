<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9f2c06a81f7c8bc51e862bc34bb15fd39a3b302b4a6cd7387446a911bee2d72a extends Twig_Template
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
        $__internal_fc28fb509db6f1a8fe30b15414e4b55c629b24e0555008c0195a8607ca7148c0 = $this->env->getExtension("native_profiler");
        $__internal_fc28fb509db6f1a8fe30b15414e4b55c629b24e0555008c0195a8607ca7148c0->enter($__internal_fc28fb509db6f1a8fe30b15414e4b55c629b24e0555008c0195a8607ca7148c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc28fb509db6f1a8fe30b15414e4b55c629b24e0555008c0195a8607ca7148c0->leave($__internal_fc28fb509db6f1a8fe30b15414e4b55c629b24e0555008c0195a8607ca7148c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
