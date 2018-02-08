<?php

/* blog.html.twig */
class __TwigTemplate_afea790c8c2e645ebe33ed5afd4ae98443db4a16a4b03a380047b9a6927a1b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["options"] = array("items" => array("@self.children" => "/"), "limit" => 50, "order" => array("by" => "date", "dir" => "desc"), "pagination" => true);
        // line 6
        $context["art_collections"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(0 => ($context["options"] ?? null)), "method"), "ofType", array(0 => "item"), "method");
        // line 8
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t<header class=\"text-center content-section background-img colored-background\" style=\"background-image:url(";
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
        echo ")\">
\t\t<div class=\"small-container\">
\t\t  <h1>
\t\t\t\t";
        // line 14
        $context["parentTitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
        // line 15
        echo "\t\t\t\t";
        if ((($context["parentTitle"] ?? null) == "Pages")) {
            // line 16
            echo "
\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
            echo "</a> / 
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t<a href=\"";
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</a>
\t\t\t</h1>
\t\t</div>
\t</header>

    <section class=\"content-section\">
        <div class=\"small-container padding-bottom\">

\t<div class=\"pl-colpad pr-colpad\">
\t\t\t<div class=\" listing-container\">
\t\t\t\t<!--
\t\t\t\t\t";
        // line 31
        if (twig_length_filter($this->env, ($context["art_collections"] ?? null))) {
            // line 32
            echo "\t\t\t\t\t\t<h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05 \">Blog posts</h2>
\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t
\t\t\t\t\t<div class=\"pl-colpad pr-colpad\">
\t\t\t\t\t\t";
        // line 36
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t\t\t</div>
\t\t\t\t-->
\t\t\t
\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["art_collections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "
\t\t\t\t\t<div class=\"listing bdb-1 mb-1\">
\t\t\t\t\t\t\t";
            // line 43
            $context["listImg"] = $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array());
            // line 44
            echo "\t\t\t\t\t\t\t";
            if ((($context["listImg"] ?? null) == false)) {
                // line 45
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t\t\t\t<div class=\"fl-l mr-05 mb-05\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 48
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" class=\"listing-img-link\">
\t\t\t\t\t\t\t\t\t";
                // line 49
                echo twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t

\t\t\t\t\t\t<h2 class=\"mt-025 mb-0\"><a href=\"";
            // line 55
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></h2>
\t\t\t\t\t\t <cite>";
            // line 56
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M d, Y");
            echo "</cite>
\t\t\t\t\t\t<p>";
            // line 57
            echo $this->getAttribute($context["p"], "summary", array());
            echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "   

\t\t\t</div>  
</div>
            ";
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 65
            echo "                ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 65)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 66
            echo "            ";
        }
        // line 67
        echo "            
        </div>
    </section>
    
    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 67,  162 => 66,  159 => 65,  157 => 64,  151 => 60,  141 => 57,  137 => 56,  131 => 55,  127 => 53,  120 => 49,  116 => 48,  113 => 47,  109 => 45,  106 => 44,  104 => 43,  100 => 41,  96 => 40,  89 => 36,  85 => 34,  81 => 32,  79 => 31,  62 => 20,  54 => 18,  50 => 16,  47 => 15,  45 => 14,  38 => 11,  35 => 10,  31 => 1,  29 => 8,  27 => 6,  25 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"partials/base.html.twig\" %}



{% set options = { items: {'@self.children': '/'}, 'limit': 50, 'order': {'by': 'date', 'dir': 'desc'}, 'pagination': true } %}
{% set art_collections = page.collection(options).ofType('item') %}

    {% set hero_image = page.media.images|first %}

    {% block content %}
\t<header class=\"text-center content-section background-img colored-background\" style=\"background-image:url({{hero_image.url}})\">
\t\t<div class=\"small-container\">
\t\t  <h1>
\t\t\t\t{% set parentTitle = page.parent.title %}
\t\t\t\t{% if parentTitle == \"Pages\" %}

\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{page.parent.url}}\">{{page.parent.title}}</a> / 
\t\t\t\t{% endif %}
\t\t\t\t<a href=\"{{page.url}}\">{{page.title}}</a>
\t\t\t</h1>
\t\t</div>
\t</header>

    <section class=\"content-section\">
        <div class=\"small-container padding-bottom\">

\t<div class=\"pl-colpad pr-colpad\">
\t\t\t<div class=\" listing-container\">
\t\t\t\t<!--
\t\t\t\t\t{% if art_collections | length %}
\t\t\t\t\t\t<h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05 \">Blog posts</h2>
\t\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t\t<div class=\"pl-colpad pr-colpad\">
\t\t\t\t\t\t{{page.content}}
\t\t\t\t\t</div>
\t\t\t\t-->
\t\t\t
\t\t\t\t{% for p in art_collections %}

\t\t\t\t\t<div class=\"listing bdb-1 mb-1\">
\t\t\t\t\t\t\t{% set listImg = p.media.images %}
\t\t\t\t\t\t\t{% if listImg == false %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"fl-l mr-05 mb-05\">
\t\t\t\t\t\t\t\t<a href=\"{{p.url}}\" class=\"listing-img-link\">
\t\t\t\t\t\t\t\t\t{{p.media.images|first}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t

\t\t\t\t\t\t<h2 class=\"mt-025 mb-0\"><a href=\"{{p.url}}\">{{p.title}}</a></h2>
\t\t\t\t\t\t <cite>{{page.date | date(\"M d, Y\")}}</cite>
\t\t\t\t\t\t<p>{{p.summary}}</h3>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}   

\t\t\t</div>  
</div>
            {% if config.plugins.pagination.enabled and collection.params.pagination %}
                {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
            {% endif %}
            
        </div>
    </section>
    
    {% endblock %}", "blog.html.twig", "/Users/Steven/Documents/Web/WordPress-sites/grav-admin/user/themes/prime/templates/blog.html.twig");
    }
}
