<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_6a2a9fcd039a89c422d455c8ad53620e2681a3504a910a91ffdf03c99a1b0d41 extends Twig_Template
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
        $__internal_c671f23206dc0fece64b2b8ba24d8da0ce90dc67ad68e2761878510a593b32cd = $this->env->getExtension("native_profiler");
        $__internal_c671f23206dc0fece64b2b8ba24d8da0ce90dc67ad68e2761878510a593b32cd->enter($__internal_c671f23206dc0fece64b2b8ba24d8da0ce90dc67ad68e2761878510a593b32cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c671f23206dc0fece64b2b8ba24d8da0ce90dc67ad68e2761878510a593b32cd->leave($__internal_c671f23206dc0fece64b2b8ba24d8da0ce90dc67ad68e2761878510a593b32cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
