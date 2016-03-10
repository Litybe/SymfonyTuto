<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_812200f81186e11c4af0c84e36c4be0d54a8d8278ac6301df7f37b084e1ba16a extends Twig_Template
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
        $__internal_ae4bb557cb136634b0c00a4eb6bd61d8d5da15b6a4040f6534f513265e276863 = $this->env->getExtension("native_profiler");
        $__internal_ae4bb557cb136634b0c00a4eb6bd61d8d5da15b6a4040f6534f513265e276863->enter($__internal_ae4bb557cb136634b0c00a4eb6bd61d8d5da15b6a4040f6534f513265e276863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ae4bb557cb136634b0c00a4eb6bd61d8d5da15b6a4040f6534f513265e276863->leave($__internal_ae4bb557cb136634b0c00a4eb6bd61d8d5da15b6a4040f6534f513265e276863_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
