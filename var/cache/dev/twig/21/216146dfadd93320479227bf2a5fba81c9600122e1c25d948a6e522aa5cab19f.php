<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cccc774ef845d7d6061595dc8ab5a63726252cd28eedfd1273a1c845449c2059 extends Twig_Template
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
        $__internal_4870fd9f4670de8865e86acf436873db362121ee075aa1dabcd9c412792084de = $this->env->getExtension("native_profiler");
        $__internal_4870fd9f4670de8865e86acf436873db362121ee075aa1dabcd9c412792084de->enter($__internal_4870fd9f4670de8865e86acf436873db362121ee075aa1dabcd9c412792084de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4870fd9f4670de8865e86acf436873db362121ee075aa1dabcd9c412792084de->leave($__internal_4870fd9f4670de8865e86acf436873db362121ee075aa1dabcd9c412792084de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
