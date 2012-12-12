<?php

/* WebWebBundle:Default:feines.html.twig */
class __TwigTemplate_8708bc39b4d2fb6fc8406cb100286828 extends Twig_Template
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
    <link class=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/css/jquery.lightbox-0.5.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/js/jquery.lightbox-0.5.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(function() {
            // Use this example, or...
            \$('a[@rel*=lightbox]').lightBox(); // Select all links that contains lightbox in the attribute class
            // This, or...
            //\$('#gallery a').lightBox(); // Select all links in object with gallery ID
            // This, or...
            //\$('a.pep').lightBox(); // Select all links with lightbox class
            // This, or...
            //\$('a').lightBox(); // Select all links in the page
            // ... The possibility are many. Use your creative or choose one in the examples above
        });
    </script>
";
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        echo " 
    <div class=\"menu\">
       <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Index", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("qui_som"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Qui som", array(), "messages");
        echo "</a>
       <a class=\"active\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feines"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Feines", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupost"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Presupost", array(), "messages");
        echo "</a>
    </div>
";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
    <a rel=\"lightbox\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image1.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image2.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image3.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image4.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image4.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image5.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image5.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image1.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image2.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image3.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image4.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image4.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image5.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image5.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image1.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image2.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image3.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image4.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image4.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image5.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image5.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image1.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image2.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image3.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image4.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image4.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image5.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image5.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image1.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image2.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image3.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image4.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image4.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image5.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image5.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image1.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image2.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image3.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image4.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image4.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image5.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image5.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image3.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image4.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image4.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
    <a rel=\"lightbox\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image5.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image5.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"72\" alt=\"\" /></a>
";
    }

    public function getTemplateName()
    {
        return "WebWebBundle:Default:feines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 68,  292 => 67,  286 => 66,  280 => 65,  274 => 64,  268 => 63,  262 => 62,  256 => 61,  250 => 60,  244 => 59,  238 => 58,  232 => 57,  226 => 56,  220 => 55,  214 => 54,  208 => 53,  202 => 52,  196 => 51,  190 => 50,  184 => 49,  178 => 48,  172 => 47,  166 => 46,  160 => 45,  154 => 44,  148 => 43,  142 => 42,  136 => 41,  130 => 40,  124 => 39,  118 => 38,  112 => 37,  106 => 36,  101 => 35,  92 => 31,  86 => 30,  80 => 29,  74 => 28,  68 => 26,  48 => 9,  43 => 8,  40 => 7,  34 => 4,  29 => 3,);
    }
}
