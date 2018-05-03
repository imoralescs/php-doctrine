<?php

/* templates/app.twig */
class __TwigTemplate_9ebbfc1da6699b1493488faf0193f8728190ef1f15e70aa18a333a29a9c13edb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>App</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/assets/main.css\">
    </head>
    <body>
        ";
        // line 9
        $this->loadTemplate("templates/partials/_navigation.twig", "templates/app.twig", 9)->display($context);
        // line 10
        echo "        ";
        $this->loadTemplate("templates/partials/_flash.twig", "templates/app.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/assets/bundle.js\"></script>
    </body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "templates/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  45 => 12,  42 => 11,  39 => 10,  37 => 9,  31 => 6,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>App</title>
        <link rel=\"stylesheet\" href=\"{{app.request.getBaseURL()}}/assets/main.css\">
    </head>
    <body>
        {% include 'templates/partials/_navigation.twig' %}
        {% include 'templates/partials/_flash.twig' %}
        {% block content %}{% endblock %}
        <script src=\"{{app.request.getBaseURL()}}/assets/bundle.js\"></script>
    </body>
</html>", "templates/app.twig", "/var/www/html/views/templates/app.twig");
    }
}
