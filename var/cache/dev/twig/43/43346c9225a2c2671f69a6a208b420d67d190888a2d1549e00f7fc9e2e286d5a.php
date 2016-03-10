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
        $__internal_cf149798f2182a691c432341d4ef94790feb99730e180e09dedeba29596e22bb = $this->env->getExtension("native_profiler");
        $__internal_cf149798f2182a691c432341d4ef94790feb99730e180e09dedeba29596e22bb->enter($__internal_cf149798f2182a691c432341d4ef94790feb99730e180e09dedeba29596e22bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf149798f2182a691c432341d4ef94790feb99730e180e09dedeba29596e22bb->leave($__internal_cf149798f2182a691c432341d4ef94790feb99730e180e09dedeba29596e22bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42a5e58996110dcc1260b0546d5bb9eb6fd97085e350e88a80014b3687ddf54c = $this->env->getExtension("native_profiler");
        $__internal_42a5e58996110dcc1260b0546d5bb9eb6fd97085e350e88a80014b3687ddf54c->enter($__internal_42a5e58996110dcc1260b0546d5bb9eb6fd97085e350e88a80014b3687ddf54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_42a5e58996110dcc1260b0546d5bb9eb6fd97085e350e88a80014b3687ddf54c->leave($__internal_42a5e58996110dcc1260b0546d5bb9eb6fd97085e350e88a80014b3687ddf54c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7653828e032c2e00da375bb26280ab564b1bacb793e38494672c2e731e852aba = $this->env->getExtension("native_profiler");
        $__internal_7653828e032c2e00da375bb26280ab564b1bacb793e38494672c2e731e852aba->enter($__internal_7653828e032c2e00da375bb26280ab564b1bacb793e38494672c2e731e852aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7653828e032c2e00da375bb26280ab564b1bacb793e38494672c2e731e852aba->leave($__internal_7653828e032c2e00da375bb26280ab564b1bacb793e38494672c2e731e852aba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de9211058d477e1a7b5ddb24b3fba814c660259a6e3054d3094f98d0b0f1b941 = $this->env->getExtension("native_profiler");
        $__internal_de9211058d477e1a7b5ddb24b3fba814c660259a6e3054d3094f98d0b0f1b941->enter($__internal_de9211058d477e1a7b5ddb24b3fba814c660259a6e3054d3094f98d0b0f1b941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de9211058d477e1a7b5ddb24b3fba814c660259a6e3054d3094f98d0b0f1b941->leave($__internal_de9211058d477e1a7b5ddb24b3fba814c660259a6e3054d3094f98d0b0f1b941_prof);

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
