<?php

/* __string_template__97f7f91e878d6ebdba9d6dd17639bed297c4fb455b54b1da5d4e1e3eb857a07a */
class __TwigTemplate_83eeaeeebfa75b30fa5097421e852ccb6e1e5bbbb18a501033c82e662e2c320b extends Twig_Template
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
        // line 1
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "new_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__97f7f91e878d6ebdba9d6dd17639bed297c4fb455b54b1da5d4e1e3eb857a07a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ company_name }}: {{ __("new_profile_notification") }}*/
