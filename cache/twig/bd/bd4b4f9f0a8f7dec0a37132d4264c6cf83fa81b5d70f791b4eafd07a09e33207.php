<?php

/* folder.html.twig */
class __TwigTemplate_7d3b40dfe76ff683af3b9bb211f99409c035425388e07f6e6a7cdb785d63ecb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "folder.html.twig", 1);
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
        // line 3
        $context["default_collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "ofType", array(0 => "item"), "method");
        // line 6
        $context["options"] = array("items" => array("@self.children" => "/"), "limit" => 5, "order" => array("by" => "date", "dir" => "desc"), "pagination" => true);
        // line 7
        $context["art_collections"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(0 => ($context["options"] ?? null)), "method"), "ofType", array(0 => "item"), "method");
        // line 9
        $context["fold_collections"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(0 => ($context["options"] ?? null)), "method"), "ofType", array(0 => "folder"), "method");
        // line 12
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "        <header class=\"text-center content-section background-img colored-background\" style=\"background-image:url(";
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
        echo ")\">
            <div class=\"small-container\">
              <h1>
                    ";
        // line 18
        $context["parentTitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
        // line 19
        echo "                    ";
        if ((($context["parentTitle"] ?? null) == "Pages")) {
            // line 20
            echo "
                    ";
        } else {
            // line 22
            echo "                        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
            echo "</a> / 
                    ";
        }
        // line 24
        echo "                    <a href=\"";
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</a>
                </h1>
            </div>
        </header>


        <section class=\"Xcontent-section\">
            <div class=\"medium-container padding-bottom\">

                <div class=\"pl-colpad pr-colpad\">
                    ";
        // line 34
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
                </div>

\t\t\t<div class=\" listing-container\">

\t\t\t\t";
        // line 39
        if (twig_length_filter($this->env, ($context["art_collections"] ?? null))) {
            // line 40
            echo "\t\t\t\t\t<h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05 \">Articles</h2>
\t\t\t\t";
        }
        // line 42
        echo "\t
\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["art_collections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "
\t\t\t\t\t<div class=\"column-33 listing\">
\t\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"listing-img-link\">
\t\t\t\t\t\t\t";
            // line 47
            $context["listImg"] = $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array());
            // line 48
            echo "\t\t\t\t\t\t\t";
            if ((($context["listImg"] ?? null) == false)) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<img src=\"/user/pages/images/default-img.gif\" />
\t\t\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t\t\t";
                echo twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
                echo "
\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t</a>

\t\t\t\t\t\t<h3 class=\"mt-025\"><a href=\"";
            // line 55
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></h3>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "   

\t\t\t</div>    



";
        // line 63
        if (twig_length_filter($this->env, ($context["fold_collections"] ?? null))) {
            // line 64
            echo "
<div class=\" listing-container\">

    ";
            // line 67
            if (twig_length_filter($this->env, ($context["fold_collections"] ?? null))) {
                // line 68
                echo "        <h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05\">Collections</h2>
    ";
            }
            // line 70
            echo "    
    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fold_collections"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 72
                echo "
        <div class=\"column-33 listing\">
            <a href=\"";
                // line 74
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" class=\"listing-img-link\">
                ";
                // line 75
                $context["listImg"] = $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array());
                // line 76
                echo "                ";
                if ((($context["listImg"] ?? null) == false)) {
                    // line 77
                    echo "                    <img src=\"/user/pages/images/default-img.gif\" />
                ";
                } else {
                    // line 79
                    echo "                    ";
                    echo twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
                    echo "
                ";
                }
                // line 81
                echo "            </a>

            <h3 class=\"mt-025\"><a href=\"";
                // line 83
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a> <small>(";
                echo $this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array(), "method");
                echo ")</small></h3>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "   

</div>   

";
        }
        // line 90
        echo "

        </section>
    ";
    }

    public function getTemplateName()
    {
        return "folder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 90,  209 => 85,  196 => 83,  192 => 81,  186 => 79,  182 => 77,  179 => 76,  177 => 75,  173 => 74,  169 => 72,  165 => 71,  162 => 70,  158 => 68,  156 => 67,  151 => 64,  149 => 63,  141 => 57,  130 => 55,  126 => 53,  120 => 51,  116 => 49,  113 => 48,  111 => 47,  107 => 46,  103 => 44,  99 => 43,  96 => 42,  92 => 40,  90 => 39,  82 => 34,  66 => 24,  58 => 22,  54 => 20,  51 => 19,  49 => 18,  42 => 15,  39 => 14,  35 => 1,  33 => 12,  31 => 9,  29 => 7,  27 => 6,  25 => 3,  11 => 1,);
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

    {% set default_collection = page.collection.ofType('item') %}


{% set options = { items: {'@self.children': '/'}, 'limit': 5, 'order': {'by': 'date', 'dir': 'desc'}, 'pagination': true } %}
{% set art_collections = page.collection(options).ofType('item') %}

{% set fold_collections = page.collection(options).ofType('folder') %}


    {% set hero_image = page.media.images|first %}

    {% block content %}
        <header class=\"text-center content-section background-img colored-background\" style=\"background-image:url({{hero_image.url}})\">
            <div class=\"small-container\">
              <h1>
                    {% set parentTitle = page.parent.title %}
                    {% if parentTitle == \"Pages\" %}

                    {% else %}
                        <a href=\"{{page.parent.url}}\">{{page.parent.title}}</a> / 
                    {% endif %}
                    <a href=\"{{page.url}}\">{{page.title}}</a>
                </h1>
            </div>
        </header>


        <section class=\"Xcontent-section\">
            <div class=\"medium-container padding-bottom\">

                <div class=\"pl-colpad pr-colpad\">
                    {{page.content}}
                </div>

\t\t\t<div class=\" listing-container\">

\t\t\t\t{% if art_collections | length %}
\t\t\t\t\t<h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05 \">Articles</h2>
\t\t\t\t{% endif %}
\t
\t\t\t\t{% for p in art_collections %}

\t\t\t\t\t<div class=\"column-33 listing\">
\t\t\t\t\t\t<a href=\"{{p.url}}\" class=\"listing-img-link\">
\t\t\t\t\t\t\t{% set listImg = p.media.images %}
\t\t\t\t\t\t\t{% if listImg == false %}
\t\t\t\t\t\t\t\t<img src=\"/user/pages/images/default-img.gif\" />
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{p.media.images|first}}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<h3 class=\"mt-025\"><a href=\"{{p.url}}\">{{p.title}}</a></h3>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}   

\t\t\t</div>    



{% if fold_collections | length %}

<div class=\" listing-container\">

    {% if fold_collections | length %}
        <h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05\">Collections</h2>
    {% endif %}
    
    {% for p in fold_collections %}

        <div class=\"column-33 listing\">
            <a href=\"{{p.url}}\" class=\"listing-img-link\">
                {% set listImg = p.media.images %}
                {% if listImg == false %}
                    <img src=\"/user/pages/images/default-img.gif\" />
                {% else %}
                    {{p.media.images|first}}
                {% endif %}
            </a>

            <h3 class=\"mt-025\"><a href=\"{{p.url}}\">{{p.title}}</a> <small>({{p.children.count()}})</small></h3>
        </div>
    {% endfor %}   

</div>   

{% endif %}


        </section>
    {% endblock %}", "folder.html.twig", "/Users/Steven/Documents/Web/WordPress-sites/grav-admin/user/themes/prime/templates/folder.html.twig");
    }
}
