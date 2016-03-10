<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c3e7d134076a3562b6d0e565093af4f9a31ae869d9399ae73164a3cc66842735 extends Twig_Template
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
        $__internal_9ee7b831e3cfc1f2f7519603b5811ba98378f74cca28ba1fc9879297ffdddca6 = $this->env->getExtension("native_profiler");
        $__internal_9ee7b831e3cfc1f2f7519603b5811ba98378f74cca28ba1fc9879297ffdddca6->enter($__internal_9ee7b831e3cfc1f2f7519603b5811ba98378f74cca28ba1fc9879297ffdddca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9ee7b831e3cfc1f2f7519603b5811ba98378f74cca28ba1fc9879297ffdddca6->leave($__internal_9ee7b831e3cfc1f2f7519603b5811ba98378f74cca28ba1fc9879297ffdddca6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
