<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_94314ea2e819e0455cb68dd17c5929f29da15950c33cea7c4bdbbd00a508626c extends Twig_Template
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
        $__internal_fe09fb118765c627598030438f8ef8dd4e9908701c27e94f119ffeff2ac9fe6c = $this->env->getExtension("native_profiler");
        $__internal_fe09fb118765c627598030438f8ef8dd4e9908701c27e94f119ffeff2ac9fe6c->enter($__internal_fe09fb118765c627598030438f8ef8dd4e9908701c27e94f119ffeff2ac9fe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fe09fb118765c627598030438f8ef8dd4e9908701c27e94f119ffeff2ac9fe6c->leave($__internal_fe09fb118765c627598030438f8ef8dd4e9908701c27e94f119ffeff2ac9fe6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
