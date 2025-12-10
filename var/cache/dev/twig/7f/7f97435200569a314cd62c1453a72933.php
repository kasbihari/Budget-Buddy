<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* dashboard/index.html.twig */
class __TwigTemplate_c711ec06ab6aa89f6af978a1ce8f1646 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Budget Dashboard - SoloLevelers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <!-- Hero Section -->
    <section class=\"hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h1 class=\"hero-title\">Budget Dashboard</h1>
                    <p class=\"hero-subtitle\">Overzicht van je financiële gezondheid</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class=\"mission-section\">
        <div class=\"container\">
            <!-- Financial Summary Cards -->
            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto\">
                                    <i class=\"fas fa-arrow-down text-success\"></i>
                                </div>
                                <h3 class=\"feature-title\">Inkomsten</h3>
                                <div class=\"stat-number text-success\">€";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 34, $this->source); })()), "totalIncome", [], "any", false, false, false, 34), 2, ",", "."), "html", null, true);
        yield "</div>
                                <p class=\"text-muted\">Totale inkomsten</p>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto\">
                                    <i class=\"fas fa-arrow-up text-danger\"></i>
                                </div>
                                <h3 class=\"feature-title\">Uitgaven</h3>
                                <div class=\"stat-number text-danger\">€";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 45, $this->source); })()), "totalExpenses", [], "any", false, false, false, 45), 2, ",", "."), "html", null, true);
        yield "</div>
                                <p class=\"text-muted\">Totale uitgaven</p>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto\">
                                    <i class=\"fas fa-balance-scale ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 53, $this->source); })()), "netBalance", [], "any", false, false, false, 53) >= 0)) {
            yield "text-success";
        } else {
            yield "text-danger";
        }
        yield "\"></i>
                                </div>
                                <h3 class=\"feature-title\">Netto Saldo</h3>
                                <div class=\"stat-number ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 56, $this->source); })()), "netBalance", [], "any", false, false, false, 56) >= 0)) {
            yield "text-success";
        } else {
            yield "text-danger";
        }
        yield "\">
                                    €";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 57, $this->source); })()), "netBalance", [], "any", false, false, false, 57), 2, ",", "."), "html", null, true);
        yield "
                                </div>
                                <p class=\"text-muted\">Huidige balans</p>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto\">
                                    <i class=\"fas fa-percentage ";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 66, $this->source); })()), "expenseRatio", [], "any", false, false, false, 66) < 70)) {
            yield "text-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 66, $this->source); })()), "expenseRatio", [], "any", false, false, false, 66) < 90)) {
            yield "text-warning";
        } else {
            yield "text-danger";
        }
        yield "\"></i>
                                </div>
                                <h3 class=\"feature-title\">Uitgave Ratio</h3>
                                <div class=\"stat-number ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 69, $this->source); })()), "expenseRatio", [], "any", false, false, false, 69) < 70)) {
            yield "text-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 69, $this->source); })()), "expenseRatio", [], "any", false, false, false, 69) < 90)) {
            yield "text-warning";
        } else {
            yield "text-danger";
        }
        yield "\">
                                    ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 70, $this->source); })()), "expenseRatio", [], "any", false, false, false, 70), 1), "html", null, true);
        yield "%
                                </div>
                                <p class=\"text-muted\">Uitgaven/Inkomsten</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Debug info (tijdelijk toevoegen om te testen) -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <h4 class=\"feature-title\">Debug Info</h4>
                        <p><strong>Aantal transacties:</strong> ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 84, $this->source); })()), "transactionCount", [], "any", false, false, false, 84), "html", null, true);
        yield "</p>
                        <p><strong>Transacties:</strong></p>
                        <ul>
                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "transactions", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 88
            yield "                                <li>
                                    ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "category", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
            yield ":
                                    ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "getDisplayAmount", [], "method", false, false, false, 90), "html", null, true);
            yield "
                                    (";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 91), "d-m-Y"), "html", null, true);
            yield ")
                                    - Type: ";
            // line 92
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "isIncome", [], "method", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Income";
            } else {
                yield "Expense";
            }
            // line 93
            yield "                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                        </ul>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"feature-card text-center h-100\">
                                <h3 class=\"feature-title\">Transacties</h3>
                                <div class=\"stat-number\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 107, $this->source); })()), "transactionCount", [], "any", false, false, false, 107), "html", null, true);
        yield "</div>
                                <p class=\"text-muted\">Totaal aantal</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"feature-card text-center h-100\">
                                <h3 class=\"feature-title\">Spaarquote</h3>
                                <div class=\"stat-number ";
        // line 114
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 114, $this->source); })()), "savingsRate", [], "any", false, false, false, 114) >= 0)) {
            yield "text-success";
        } else {
            yield "text-danger";
        }
        yield "\">
                                    ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 115, $this->source); })()), "savingsRate", [], "any", false, false, false, 115), 1), "html", null, true);
        yield "%
                                </div>
                                <p class=\"text-muted\">Van je inkomen</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"feature-card text-center h-100\">
                                <h3 class=\"feature-title\">Gemiddeld</h3>
                                <div class=\"stat-number\">€";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 123, $this->source); })()), "averageTransaction", [], "any", false, false, false, 123), 2, ",", "."), "html", null, true);
        yield "</div>
                                <p class=\"text-muted\">Per transactie</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Breakdown -->
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <div class=\"text-center mb-4\">
                            <h3 class=\"feature-title\">Categorie Overzicht</h3>
                        </div>
                        <div class=\"row\">
                            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financialData"]) || array_key_exists("financialData", $context) ? $context["financialData"] : (function () { throw new RuntimeError('Variable "financialData" does not exist.', 139, $this->source); })()), "categoryBreakdown", [], "any", false, false, false, 139));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["category"] => $context["data"]) {
            // line 140
            yield "                                <div class=\"col-md-6 col-lg-4 mb-3\">
                                    <div class=\"d-flex justify-content-between align-items-center p-3\" style=\"background: rgba(28, 52, 38, 0.6); border-radius: 10px;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"category-color me-3\" style=\"width: 12px; height: 12px; border-radius: 50%; background-color: ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["#16F98A", "#134338", "#FFCF44", "#FF6B6B", "#4ECDC4"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 143)), "html", null, true);
            yield "\"></div>
                                            <span class=\"fw-medium\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "</span>
                                        </div>
                                        <div class=\"text-end\">
                                            <div class=\"fw-bold ";
            // line 147
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "type", [], "any", false, false, false, 147) == "income")) {
                yield "text-success";
            } else {
                yield "text-danger";
            }
            yield "\">
                                                €";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 148), 2, ",", "."), "html", null, true);
            yield "
                                            </div>
                                            <small class=\"text-muted\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 150), "html", null, true);
            yield " transacties</small>
                                        </div>
                                    </div>
                                </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['category'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  386 => 155,  367 => 150,  362 => 148,  354 => 147,  348 => 144,  344 => 143,  339 => 140,  322 => 139,  303 => 123,  292 => 115,  284 => 114,  274 => 107,  260 => 95,  253 => 93,  247 => 92,  243 => 91,  239 => 90,  235 => 89,  232 => 88,  228 => 87,  222 => 84,  205 => 70,  195 => 69,  183 => 66,  171 => 57,  163 => 56,  153 => 53,  142 => 45,  128 => 34,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Budget Dashboard - SoloLevelers{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <section class=\"hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h1 class=\"hero-title\">Budget Dashboard</h1>
                    <p class=\"hero-subtitle\">Overzicht van je financiële gezondheid</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class=\"mission-section\">
        <div class=\"container\">
            <!-- Financial Summary Cards -->
            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto\">
                                    <i class=\"fas fa-arrow-down text-success\"></i>
                                </div>
                                <h3 class=\"feature-title\">Inkomsten</h3>
                                <div class=\"stat-number text-success\">€{{ financialData.totalIncome|number_format(2, ',', '.') }}</div>
                                <p class=\"text-muted\">Totale inkomsten</p>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto\">
                                    <i class=\"fas fa-arrow-up text-danger\"></i>
                                </div>
                                <h3 class=\"feature-title\">Uitgaven</h3>
                                <div class=\"stat-number text-danger\">€{{ financialData.totalExpenses|number_format(2, ',', '.') }}</div>
                                <p class=\"text-muted\">Totale uitgaven</p>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto\">
                                    <i class=\"fas fa-balance-scale {% if financialData.netBalance >= 0 %}text-success{% else %}text-danger{% endif %}\"></i>
                                </div>
                                <h3 class=\"feature-title\">Netto Saldo</h3>
                                <div class=\"stat-number {% if financialData.netBalance >= 0 %}text-success{% else %}text-danger{% endif %}\">
                                    €{{ financialData.netBalance|number_format(2, ',', '.') }}
                                </div>
                                <p class=\"text-muted\">Huidige balans</p>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto\">
                                    <i class=\"fas fa-percentage {% if financialData.expenseRatio < 70 %}text-success{% elseif financialData.expenseRatio < 90 %}text-warning{% else %}text-danger{% endif %}\"></i>
                                </div>
                                <h3 class=\"feature-title\">Uitgave Ratio</h3>
                                <div class=\"stat-number {% if financialData.expenseRatio < 70 %}text-success{% elseif financialData.expenseRatio < 90 %}text-warning{% else %}text-danger{% endif %}\">
                                    {{ financialData.expenseRatio|number_format(1) }}%
                                </div>
                                <p class=\"text-muted\">Uitgaven/Inkomsten</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Debug info (tijdelijk toevoegen om te testen) -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <h4 class=\"feature-title\">Debug Info</h4>
                        <p><strong>Aantal transacties:</strong> {{ financialData.transactionCount }}</p>
                        <p><strong>Transacties:</strong></p>
                        <ul>
                            {% for transaction in app.user.transactions %}
                                <li>
                                    {{ transaction.category.name }}:
                                    {{ transaction.getDisplayAmount() }}
                                    ({{ transaction.date|date('d-m-Y') }})
                                    - Type: {% if transaction.isIncome() %}Income{% else %}Expense{% endif %}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"feature-card text-center h-100\">
                                <h3 class=\"feature-title\">Transacties</h3>
                                <div class=\"stat-number\">{{ financialData.transactionCount }}</div>
                                <p class=\"text-muted\">Totaal aantal</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"feature-card text-center h-100\">
                                <h3 class=\"feature-title\">Spaarquote</h3>
                                <div class=\"stat-number {% if financialData.savingsRate >= 0 %}text-success{% else %}text-danger{% endif %}\">
                                    {{ financialData.savingsRate|number_format(1) }}%
                                </div>
                                <p class=\"text-muted\">Van je inkomen</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"feature-card text-center h-100\">
                                <h3 class=\"feature-title\">Gemiddeld</h3>
                                <div class=\"stat-number\">€{{ financialData.averageTransaction|number_format(2, ',', '.') }}</div>
                                <p class=\"text-muted\">Per transactie</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Breakdown -->
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <div class=\"text-center mb-4\">
                            <h3 class=\"feature-title\">Categorie Overzicht</h3>
                        </div>
                        <div class=\"row\">
                            {% for category, data in financialData.categoryBreakdown %}
                                <div class=\"col-md-6 col-lg-4 mb-3\">
                                    <div class=\"d-flex justify-content-between align-items-center p-3\" style=\"background: rgba(28, 52, 38, 0.6); border-radius: 10px;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"category-color me-3\" style=\"width: 12px; height: 12px; border-radius: 50%; background-color: {{ cycle(['#16F98A', '#134338', '#FFCF44', '#FF6B6B', '#4ECDC4'], loop.index0) }}\"></div>
                                            <span class=\"fw-medium\">{{ category }}</span>
                                        </div>
                                        <div class=\"text-end\">
                                            <div class=\"fw-bold {% if data.type == 'income' %}text-success{% else %}text-danger{% endif %}\">
                                                €{{ data.total|number_format(2, ',', '.') }}
                                            </div>
                                            <small class=\"text-muted\">{{ data.count }} transacties</small>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "dashboard/index.html.twig", "/Users/krishnabihari/Documents/GitHub/Budget-Buddy/templates/dashboard/index.html.twig");
    }
}
