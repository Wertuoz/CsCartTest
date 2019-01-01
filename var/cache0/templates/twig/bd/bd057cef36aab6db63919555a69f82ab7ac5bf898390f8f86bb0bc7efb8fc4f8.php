<?php

/* __string_template__0c9b3c9e06be8999f2924b2bddccec90cf78a3e8151ba4982b06dc5560637698 */
class __TwigTemplate_2644164ed4933d7b235c1f52f016375386d69ea95c4e6982aed818cc288dd72a extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "call_requests");
    }

    public function getTemplateName()
    {
        return "__string_template__0c9b3c9e06be8999f2924b2bddccec90cf78a3e8151ba4982b06dc5560637698";
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
/* {{ __("call_requests") }}*/
