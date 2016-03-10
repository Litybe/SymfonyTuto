<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8852a7c68b5b572c6920eb600bfca0c1d4dcdf02d06a4653715b83a62b6ba9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b56cf0c1a9b663e84de7dc8c25aa6608a435c092a6c5cef56086c4eb5c7febf = $this->env->getExtension("native_profiler");
        $__internal_9b56cf0c1a9b663e84de7dc8c25aa6608a435c092a6c5cef56086c4eb5c7febf->enter($__internal_9b56cf0c1a9b663e84de7dc8c25aa6608a435c092a6c5cef56086c4eb5c7febf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b56cf0c1a9b663e84de7dc8c25aa6608a435c092a6c5cef56086c4eb5c7febf->leave($__internal_9b56cf0c1a9b663e84de7dc8c25aa6608a435c092a6c5cef56086c4eb5c7febf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a9a351589cb7c12064bdb0786aeddbd28daec39c3a7a82f804f48e9912f0350 = $this->env->getExtension("native_profiler");
        $__internal_7a9a351589cb7c12064bdb0786aeddbd28daec39c3a7a82f804f48e9912f0350->enter($__internal_7a9a351589cb7c12064bdb0786aeddbd28daec39c3a7a82f804f48e9912f0350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7a9a351589cb7c12064bdb0786aeddbd28daec39c3a7a82f804f48e9912f0350->leave($__internal_7a9a351589cb7c12064bdb0786aeddbd28daec39c3a7a82f804f48e9912f0350_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
