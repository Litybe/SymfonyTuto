<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_493cbe95b2510a87d7ed63dbf7a50cd3330fea2dbbc10a5d2835cc6a99d638ff extends Twig_Template
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
        $__internal_2a3ccd23e9a3b2a4a55f088896017378db0989b7267b2ce7560d9a32c2426c09 = $this->env->getExtension("native_profiler");
        $__internal_2a3ccd23e9a3b2a4a55f088896017378db0989b7267b2ce7560d9a32c2426c09->enter($__internal_2a3ccd23e9a3b2a4a55f088896017378db0989b7267b2ce7560d9a32c2426c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2a3ccd23e9a3b2a4a55f088896017378db0989b7267b2ce7560d9a32c2426c09->leave($__internal_2a3ccd23e9a3b2a4a55f088896017378db0989b7267b2ce7560d9a32c2426c09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
