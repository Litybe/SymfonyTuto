<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2afec3e7bd874abeace6b559bf9a5ada21a3a840c5de39a739b68047d7f2ff8c extends Twig_Template
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
        $__internal_5fb29eb762963a6700b99c793886e922e56a25f150b9d48350fc82e10889136d = $this->env->getExtension("native_profiler");
        $__internal_5fb29eb762963a6700b99c793886e922e56a25f150b9d48350fc82e10889136d->enter($__internal_5fb29eb762963a6700b99c793886e922e56a25f150b9d48350fc82e10889136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5fb29eb762963a6700b99c793886e922e56a25f150b9d48350fc82e10889136d->leave($__internal_5fb29eb762963a6700b99c793886e922e56a25f150b9d48350fc82e10889136d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
