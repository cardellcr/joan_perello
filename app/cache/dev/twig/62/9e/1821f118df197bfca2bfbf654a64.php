<?php

/* WebWebBundle::layout.html.twig */
class __TwigTemplate_629e1821f118df197bfca2bfbf654a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
\t<div id=\"container\">
            <div id=\"header\">
                <div id=\"language\">
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "ca")), "html", null, true);
        echo "\">CAT</a>-
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "es")), "html", null, true);
        echo "\">ESP</a>-
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "en")), "html", null, true);
        echo "\">ENG</a>-
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "de")), "html", null, true);
        echo "\">DEU</a>
                </div>

                ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "
                <div id=\"menu\">
                    ";
        // line 39
        $this->displayBlock('menu', $context, $blocks);
        // line 41
        echo "                </div>
            </div>
            <div class=\"separator\"></div>
            <div id=\"content\">
                ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "            </div>
            <div id=\"footer\">   
                <div class=\"menu_footer\">
                   <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Index", array(), "messages");
        echo "</a>
                   <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("qui_som"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Qui som", array(), "messages");
        echo "</a>
                   <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feines"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Feines", array(), "messages");
        echo "</a>
                   <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupost"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Presupost", array(), "messages");
        echo "</a>
                </div>
            </div>
\t</div>
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "          title 
      ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        // line 32
        echo "                    <div id=\"logo\"> 
                        <div id=\"name\">JOAN PERELLÓ</div>
                        <div id=\"sub_name\">ENRAJOLATS I REFORMES MENORS</div>
                    </div>
                ";
    }

    // line 39
    public function block_menu($context, array $blocks = array())
    {
        // line 40
        echo "                    ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "                ";
    }

    public function getTemplateName()
    {
        return "WebWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 46,  170 => 45,  166 => 40,  163 => 39,  155 => 32,  152 => 31,  148 => 17,  145 => 16,  141 => 14,  138 => 13,  133 => 6,  130 => 5,  117 => 53,  111 => 52,  105 => 51,  99 => 50,  94 => 47,  92 => 45,  84 => 39,  80 => 37,  78 => 31,  68 => 27,  64 => 26,  51 => 19,  46 => 16,  41 => 13,  37 => 12,  31 => 8,  23 => 1,  86 => 41,  81 => 20,  72 => 28,  66 => 15,  60 => 25,  54 => 13,  48 => 18,  43 => 15,  40 => 7,  34 => 4,  29 => 5,);
    }
}
