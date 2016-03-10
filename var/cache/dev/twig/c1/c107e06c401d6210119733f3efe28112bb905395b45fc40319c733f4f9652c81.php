<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bbff01c716a855328430a27451f493ed5811b1ad6e9e8466fe6a68fda0668a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daaa56ce842a22822401057392e19c904a757188c4c9cbc57ba30bffdd784858 = $this->env->getExtension("native_profiler");
        $__internal_daaa56ce842a22822401057392e19c904a757188c4c9cbc57ba30bffdd784858->enter($__internal_daaa56ce842a22822401057392e19c904a757188c4c9cbc57ba30bffdd784858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daaa56ce842a22822401057392e19c904a757188c4c9cbc57ba30bffdd784858->leave($__internal_daaa56ce842a22822401057392e19c904a757188c4c9cbc57ba30bffdd784858_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ace439529d416aa29f71fda85ef534df40a6c3fc2808a23b2e16174419588655 = $this->env->getExtension("native_profiler");
        $__internal_ace439529d416aa29f71fda85ef534df40a6c3fc2808a23b2e16174419588655->enter($__internal_ace439529d416aa29f71fda85ef534df40a6c3fc2808a23b2e16174419588655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ace439529d416aa29f71fda85ef534df40a6c3fc2808a23b2e16174419588655->leave($__internal_ace439529d416aa29f71fda85ef534df40a6c3fc2808a23b2e16174419588655_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ffb820645e45308dc5f324dfc596a3d588e65914ec128e7942e8946c9a0742a = $this->env->getExtension("native_profiler");
        $__internal_9ffb820645e45308dc5f324dfc596a3d588e65914ec128e7942e8946c9a0742a->enter($__internal_9ffb820645e45308dc5f324dfc596a3d588e65914ec128e7942e8946c9a0742a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ffb820645e45308dc5f324dfc596a3d588e65914ec128e7942e8946c9a0742a->leave($__internal_9ffb820645e45308dc5f324dfc596a3d588e65914ec128e7942e8946c9a0742a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8016ffb238fb7e1d035ef9e8131435c2ce53d89f504bacb82539fddddd34a463 = $this->env->getExtension("native_profiler");
        $__internal_8016ffb238fb7e1d035ef9e8131435c2ce53d89f504bacb82539fddddd34a463->enter($__internal_8016ffb238fb7e1d035ef9e8131435c2ce53d89f504bacb82539fddddd34a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8016ffb238fb7e1d035ef9e8131435c2ce53d89f504bacb82539fddddd34a463->leave($__internal_8016ffb238fb7e1d035ef9e8131435c2ce53d89f504bacb82539fddddd34a463_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
