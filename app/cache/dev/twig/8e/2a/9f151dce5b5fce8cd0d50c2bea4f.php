<?php

/* WebWebBundle:Default:qui_som.html.twig */
class __TwigTemplate_8e2a9f151dce5b5fce8cd0d50c2bea4f extends Twig_Template
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
       <a class=\"active\" href=\"";
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
    <div id=\"qui_som_left\">
        <div class=\"title\">Qui som?</div>
        <div class=\"description\">
            ";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("text_qui_som", array(), "messages");
        // line 23
        echo "        </div>
        <div class=\"title\" style=\"margin-top:40px;\">Adreça</div>
        <div class=\"description\">
                ";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("C/", array(), "messages");
        echo "Botella ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("nº", array(), "messages");
        echo " tap, Muro, Mallorca
        </div>
        <div class=\"title\" style=\"margin-top:40px;\">";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contacte", array(), "messages");
        echo "</div>
        <div class=\"description\">
                telf : 600 600 600 (Joan)<br/>
                email: contacte@joanperello.com
        </div>
    </div>
    <div id=\"qui_som_right\">
        <div class=\"title\">";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ubicacio", array(), "messages");
        echo "</div>
        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/planol.png"), "html", null, true);
        echo "\" height=\"240px\" width=\"415px\" style=\"margin-top:10px;\"/>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebWebBundle:Default:qui_som.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  108 => 35,  98 => 28,  91 => 26,  86 => 23,  84 => 22,  76 => 18,  67 => 14,  61 => 13,  55 => 12,  49 => 11,  43 => 9,  36 => 6,  29 => 3,);
    }
}
