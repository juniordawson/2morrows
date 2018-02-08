<?php

/* home.html.twig */
class __TwigTemplate_17a7bdb8ce1fb79cf4750878175f9fa8e2736f5e19d77955f05cc1de2b0b1cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        // line 4
        $context["default_collection"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "visible", array()), "ofType", array(0 => "folder"), "method");
        // line 6
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "        <!--header class=\"text-center content-section background-img colored-background\" style=\"background-image:url(";
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
        echo ")\">
            <div class=\"small-container\">
              <h1>
                    ";
        // line 12
        $context["parentTitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
        // line 13
        echo "                    ";
        if ((($context["parentTitle"] ?? null) == "Pages")) {
            // line 14
            echo "
                    ";
        } else {
            // line 16
            echo "                        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
            echo "</a> / 
                    ";
        }
        // line 18
        echo "                    <a href=\"";
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</a>
                </h1>
            </div>
        </header-->


        <section class=\"content-section\">
            <div class=\"medium-container padding-bottom\">

                ";
        // line 27
        if (twig_length_filter($this->env, ($context["default_collection"] ?? null))) {
            // line 28
            echo "
                    <div class=\" listing-container\">

                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["default_collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "
                            <div class=\"column-33 listing\">

                                <a href=\"";
                // line 35
                echo $this->getAttribute($context["page"], "url", array());
                echo "\" class=\"listing-img-link\" style=\"background-image: url(";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array())), "url", array(), "method");
                echo ");\">
                                    ";
                // line 36
                $context["listImg"] = $this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array());
                // line 37
                echo "
                                    ";
                // line 38
                if ((($context["listImg"] ?? null) == false)) {
                    // line 39
                    echo "                                        <img src=\"/user/pages/images/default-img.gif\" />
                                    ";
                } else {
                    // line 41
                    echo "
                                        <img src=\"/user/pages/images/blank.gif\" />

                                    ";
                }
                // line 45
                echo "                                </a>
                                
                                <h3 class=\"mt-025\"><a href=\"";
                // line 47
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "title", array());
                echo "</a></h3>
                            </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
                    </div>

                ";
        }
        // line 55
        echo "

                <div class=\"pl-colpad pr-colpad\">
                    ";
        // line 58
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
                </div>  
                
            </div>
        </section>
    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  136 => 55,  130 => 51,  118 => 47,  114 => 45,  108 => 41,  104 => 39,  102 => 38,  99 => 37,  97 => 36,  91 => 35,  86 => 32,  82 => 31,  77 => 28,  75 => 27,  60 => 18,  52 => 16,  48 => 14,  45 => 13,  43 => 12,  36 => 9,  33 => 8,  29 => 1,  27 => 6,  25 => 4,  11 => 1,);
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


    {% set default_collection = page.collection.visible.ofType('folder') %}

    {% set hero_image = page.media.images|first %}

    {% block content %}
        <!--header class=\"text-center content-section background-img colored-background\" style=\"background-image:url({{hero_image.url}})\">
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
        </header-->


        <section class=\"content-section\">
            <div class=\"medium-container padding-bottom\">

                {% if default_collection | length %}

                    <div class=\" listing-container\">

                        {% for page in default_collection %}

                            <div class=\"column-33 listing\">

                                <a href=\"{{page.url}}\" class=\"listing-img-link\" style=\"background-image: url({{page.media.images|first.url()}});\">
                                    {% set listImg = page.media.images %}

                                    {% if listImg == false %}
                                        <img src=\"/user/pages/images/default-img.gif\" />
                                    {% else %}

                                        <img src=\"/user/pages/images/blank.gif\" />

                                    {% endif %}
                                </a>
                                
                                <h3 class=\"mt-025\"><a href=\"{{page.url}}\">{{page.title}}</a></h3>
                            </div>

                        {% endfor %}

                    </div>

                {% endif %}


                <div class=\"pl-colpad pr-colpad\">
                    {{page.content}}
                </div>  
                
            </div>
        </section>
    {% endblock %}", "home.html.twig", "/Users/Steven/Documents/Web/WordPress-sites/grav-admin/user/themes/prime/templates/home.html.twig");
    }
}
