<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76e79c6b75145f0e896b25d6d7f34ff4465dcb27e8220403591494583fd2a0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac1ae1317934f53c3c479ca1e80435a8bc2e80db5f60be98433373dbcfa68f25 = $this->env->getExtension("native_profiler");
        $__internal_ac1ae1317934f53c3c479ca1e80435a8bc2e80db5f60be98433373dbcfa68f25->enter($__internal_ac1ae1317934f53c3c479ca1e80435a8bc2e80db5f60be98433373dbcfa68f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac1ae1317934f53c3c479ca1e80435a8bc2e80db5f60be98433373dbcfa68f25->leave($__internal_ac1ae1317934f53c3c479ca1e80435a8bc2e80db5f60be98433373dbcfa68f25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f4a8bf54b981fe123c3440f957d98c8e3cd555dafa5db75e16aa4f905f02c96 = $this->env->getExtension("native_profiler");
        $__internal_2f4a8bf54b981fe123c3440f957d98c8e3cd555dafa5db75e16aa4f905f02c96->enter($__internal_2f4a8bf54b981fe123c3440f957d98c8e3cd555dafa5db75e16aa4f905f02c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f4a8bf54b981fe123c3440f957d98c8e3cd555dafa5db75e16aa4f905f02c96->leave($__internal_2f4a8bf54b981fe123c3440f957d98c8e3cd555dafa5db75e16aa4f905f02c96_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d29c49735972f6ab3456eec214ee429011e8a45eefa690b19c0f0d998c5d4c45 = $this->env->getExtension("native_profiler");
        $__internal_d29c49735972f6ab3456eec214ee429011e8a45eefa690b19c0f0d998c5d4c45->enter($__internal_d29c49735972f6ab3456eec214ee429011e8a45eefa690b19c0f0d998c5d4c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d29c49735972f6ab3456eec214ee429011e8a45eefa690b19c0f0d998c5d4c45->leave($__internal_d29c49735972f6ab3456eec214ee429011e8a45eefa690b19c0f0d998c5d4c45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df6bbe9b2ac871b2a6b07ec68318ab57b31288963647ba905de6f7ba5168b722 = $this->env->getExtension("native_profiler");
        $__internal_df6bbe9b2ac871b2a6b07ec68318ab57b31288963647ba905de6f7ba5168b722->enter($__internal_df6bbe9b2ac871b2a6b07ec68318ab57b31288963647ba905de6f7ba5168b722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df6bbe9b2ac871b2a6b07ec68318ab57b31288963647ba905de6f7ba5168b722->leave($__internal_df6bbe9b2ac871b2a6b07ec68318ab57b31288963647ba905de6f7ba5168b722_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
