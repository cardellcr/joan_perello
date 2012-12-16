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

    <script type=\"text/javascript\">
        \$(function() {

          var lightboxHTML = '<div id=\"overlay\"></div>' +
                             '<div id=\"lightbox\">' +
                             '<a href=\"#\" id=\"close\">Close</a>' +
                             '<img/>' + '<p/>' + '</div>';

          \$(lightboxHTML).appendTo('body').hide();

          \$('#overlay').css('opacity', '0.8');

          \$('li', '#gallery').each(function() {
  
            var \$li = \$(this);
            var \$a = \$li.find('a');

            \$a.click(function(event) {

              var src = \$a.find('img').attr('src');
              var alt = \$a.find('img').attr('alt');

              \$('img', '#lightbox').attr('src', src);
              \$('p', '#lightbox').text(alt);

              \$('#overlay, #lightbox').show();

              event.preventDefault();
            });

        });

        \$('#close', '#lightbox').click(function(event) {
  
            \$('#lightbox, #overlay').hide();

            event.preventDefault();
        });

        });

    </script>
";
    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        echo " 
    <div class=\"menu\">
       <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Index", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("qui_som"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Qui som", array(), "messages");
        echo "</a>
       <a class=\"active\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feines"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Feines", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupost"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Presupost", array(), "messages");
        echo "</a>
    </div>
";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
    <!--
    a class=\"lightbox\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image1.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a>
    <a class=\"lightbox\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image2.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a>
    <a class=\"lightbox\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/thumb_image3.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a
    -->
    
    <ul id=\"gallery\">
        <li><a href=\"#\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\"/></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\"/></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
        <li><a style=\"padding-right: 0px;\" href=\"#\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\"/></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\"/></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image1.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\"/></a></li>
        <li><a href=\"#\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image2.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
        <li><a style=\"padding-right: 0px;\" href=\"#\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/photos/image3.jpg"), "html", null, true);
        echo "\" width=\"114\" height=\"114\" alt=\"\" /></a></li>
    </ul>

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
        return array (  205 => 84,  201 => 83,  197 => 82,  193 => 81,  189 => 80,  185 => 79,  181 => 78,  177 => 77,  173 => 76,  169 => 75,  165 => 74,  161 => 73,  157 => 72,  153 => 71,  144 => 67,  138 => 66,  132 => 65,  126 => 63,  117 => 59,  111 => 58,  105 => 57,  99 => 56,  93 => 54,  43 => 8,  40 => 7,  34 => 4,  29 => 3,);
    }
}
