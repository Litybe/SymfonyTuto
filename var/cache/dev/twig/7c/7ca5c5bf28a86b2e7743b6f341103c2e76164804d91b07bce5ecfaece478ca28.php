<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b7b10efc331a6726a3916a47950861304a37d83c69a0a41abed3232f15355fe2 extends Twig_Template
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
        $__internal_64b3e5a94e450ecd8a0df3abf25e59f1692cc0d4624abe97b45a7362303c96af = $this->env->getExtension("native_profiler");
        $__internal_64b3e5a94e450ecd8a0df3abf25e59f1692cc0d4624abe97b45a7362303c96af->enter($__internal_64b3e5a94e450ecd8a0df3abf25e59f1692cc0d4624abe97b45a7362303c96af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_64b3e5a94e450ecd8a0df3abf25e59f1692cc0d4624abe97b45a7362303c96af->leave($__internal_64b3e5a94e450ecd8a0df3abf25e59f1692cc0d4624abe97b45a7362303c96af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
