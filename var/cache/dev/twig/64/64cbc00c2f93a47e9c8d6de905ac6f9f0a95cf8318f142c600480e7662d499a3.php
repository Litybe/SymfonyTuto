<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5760805b3227c5a8454ea1f5d055bb7120f80442415370a8517896d93a03f4a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2b5fab810bd2c84a27683551b4572d958ee9afd88890d7c951c1d2565f982cbf = $this->env->getExtension("native_profiler");
        $__internal_2b5fab810bd2c84a27683551b4572d958ee9afd88890d7c951c1d2565f982cbf->enter($__internal_2b5fab810bd2c84a27683551b4572d958ee9afd88890d7c951c1d2565f982cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5fab810bd2c84a27683551b4572d958ee9afd88890d7c951c1d2565f982cbf->leave($__internal_2b5fab810bd2c84a27683551b4572d958ee9afd88890d7c951c1d2565f982cbf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b29942c771fd5e18c89f22f3d42b05b3a23e7cd0018dabf1c8f59f3b480bf35e = $this->env->getExtension("native_profiler");
        $__internal_b29942c771fd5e18c89f22f3d42b05b3a23e7cd0018dabf1c8f59f3b480bf35e->enter($__internal_b29942c771fd5e18c89f22f3d42b05b3a23e7cd0018dabf1c8f59f3b480bf35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b29942c771fd5e18c89f22f3d42b05b3a23e7cd0018dabf1c8f59f3b480bf35e->leave($__internal_b29942c771fd5e18c89f22f3d42b05b3a23e7cd0018dabf1c8f59f3b480bf35e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39ade567b15d600f27fa9caedbc3286a9cd798dfd0021b396763d3a6e6f22592 = $this->env->getExtension("native_profiler");
        $__internal_39ade567b15d600f27fa9caedbc3286a9cd798dfd0021b396763d3a6e6f22592->enter($__internal_39ade567b15d600f27fa9caedbc3286a9cd798dfd0021b396763d3a6e6f22592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39ade567b15d600f27fa9caedbc3286a9cd798dfd0021b396763d3a6e6f22592->leave($__internal_39ade567b15d600f27fa9caedbc3286a9cd798dfd0021b396763d3a6e6f22592_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75061ecf0c19145739445dddc411e94f2953e4e6966ef21cadad75ec47456c56 = $this->env->getExtension("native_profiler");
        $__internal_75061ecf0c19145739445dddc411e94f2953e4e6966ef21cadad75ec47456c56->enter($__internal_75061ecf0c19145739445dddc411e94f2953e4e6966ef21cadad75ec47456c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_75061ecf0c19145739445dddc411e94f2953e4e6966ef21cadad75ec47456c56->leave($__internal_75061ecf0c19145739445dddc411e94f2953e4e6966ef21cadad75ec47456c56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
