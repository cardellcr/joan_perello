<?php

/* WebWebBundle:Default:presupost.html.twig */
class __TwigTemplate_758b4cfcd98e5d2eb34c6b3cc954e85f extends Twig_Template
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
       <a href=\"";
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
       <a class=\"active\" href=\"";
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
\t<form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("new_message"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            <div id=\"presupost_left\">
                <div>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label');
        echo ":</div><div>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget');
        echo "</div>
                <div>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telefon"), 'label');
        echo ":</div><div>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telefon"), 'widget');
        echo "</div>
                <div>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mail"), 'label');
        echo ":</div><div>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mail"), 'widget');
        echo "</div>
            </div>
            <div id=\"presupost_right\">
\t\t<div>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label');
        echo ":</div>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget');
        echo "
            </div>
\t\t<input type=\"submit\" />
\t</form>
        <div class=\"telefon\"><img height=\"22px\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/phone.png"), "html", null, true);
        echo "\"/> 600 600 600 (Joan)</div>
";
    }

    public function getTemplateName()
    {
        return "WebWebBundle:Default:presupost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  108 => 26,  100 => 23,  94 => 22,  88 => 21,  81 => 19,  76 => 18,  67 => 14,  61 => 13,  55 => 12,  49 => 11,  43 => 9,  36 => 6,  29 => 3,);
    }
}
