<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2756d7f824b66731e02f5e4ca5e1d1984c840302db17efd3175f84c8df3a4136 extends Twig_Template
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
        $__internal_6f5b4c9bce1cc6048ddb96d776f0b5b6772b29107a552280db3e78282fdb012e = $this->env->getExtension("native_profiler");
        $__internal_6f5b4c9bce1cc6048ddb96d776f0b5b6772b29107a552280db3e78282fdb012e->enter($__internal_6f5b4c9bce1cc6048ddb96d776f0b5b6772b29107a552280db3e78282fdb012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6f5b4c9bce1cc6048ddb96d776f0b5b6772b29107a552280db3e78282fdb012e->leave($__internal_6f5b4c9bce1cc6048ddb96d776f0b5b6772b29107a552280db3e78282fdb012e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
