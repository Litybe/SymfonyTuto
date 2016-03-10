<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_70a29a2327a25051c08a66faba00ba2ad21343f8eee71e008d1fad052c6406cf extends Twig_Template
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
        $__internal_e5c2a65465c22a82c8da7a0ea0f017a8c69fc2a730433d9cbb4127b4a40d26ce = $this->env->getExtension("native_profiler");
        $__internal_e5c2a65465c22a82c8da7a0ea0f017a8c69fc2a730433d9cbb4127b4a40d26ce->enter($__internal_e5c2a65465c22a82c8da7a0ea0f017a8c69fc2a730433d9cbb4127b4a40d26ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e5c2a65465c22a82c8da7a0ea0f017a8c69fc2a730433d9cbb4127b4a40d26ce->leave($__internal_e5c2a65465c22a82c8da7a0ea0f017a8c69fc2a730433d9cbb4127b4a40d26ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
