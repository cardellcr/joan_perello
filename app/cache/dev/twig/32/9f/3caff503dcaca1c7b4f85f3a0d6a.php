<?php

/* WebWebBundle:Default:index.html.twig */
class __TwigTemplate_329f3caff503dcaca1c7b4f85f3a0d6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebWebBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
";
    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        echo " 
    <div class=\"menu\">
       <a class=\"active\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Index", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("qui_som"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Qui som", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feines"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Feines", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupost"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Presupost", array(), "messages");
        echo "</a>
    </div>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/cuina3.jpg"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "WebWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  76 => 18,  67 => 14,  61 => 13,  55 => 12,  49 => 11,  43 => 9,  36 => 6,  29 => 3,);
    }
}
