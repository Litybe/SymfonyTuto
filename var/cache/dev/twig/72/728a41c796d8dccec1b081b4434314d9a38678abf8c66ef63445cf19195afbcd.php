<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_54bac874474feaa92374861efa67100ae4affb9a4d8a0972d1cfa38baccdef15 extends Twig_Template
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
        $__internal_c9f359f6bdcf55dfe02c52150602b0e2ea82b926eb36437c1186403c28b29da5 = $this->env->getExtension("native_profiler");
        $__internal_c9f359f6bdcf55dfe02c52150602b0e2ea82b926eb36437c1186403c28b29da5->enter($__internal_c9f359f6bdcf55dfe02c52150602b0e2ea82b926eb36437c1186403c28b29da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c9f359f6bdcf55dfe02c52150602b0e2ea82b926eb36437c1186403c28b29da5->leave($__internal_c9f359f6bdcf55dfe02c52150602b0e2ea82b926eb36437c1186403c28b29da5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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