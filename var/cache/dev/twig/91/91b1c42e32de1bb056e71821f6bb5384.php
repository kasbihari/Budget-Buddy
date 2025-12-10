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

/* transactions/index.html.twig */
class __TwigTemplate_569796bc784316329a4ea7bb0e6d3ad0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transactions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transactions/index.html.twig"));

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

        yield "Transacties - SoloLevelers";
        
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
                    <h1 class=\"hero-title\">Transacties</h1>
                    <p class=\"hero-subtitle\">Alle inkomsten en uitgaven</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class=\"mission-section\">
        <div class=\"container\">
            <!-- Quick Stats -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"feature-card text-center\">
                                <h4 class=\"feature-title\">Totaal Inkomsten</h4>
                                <div class=\"stat-number text-success\">€";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 31, $this->source); })()), 2, ",", "."), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"feature-card text-center\">
                                <h4 class=\"feature-title\">Totaal Uitgaven</h4>
                                <div class=\"stat-number text-danger\">€";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalExpenses"]) || array_key_exists("totalExpenses", $context) ? $context["totalExpenses"] : (function () { throw new RuntimeError('Variable "totalExpenses" does not exist.', 37, $this->source); })()), 2, ",", "."), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"feature-card text-center\">
                                <h4 class=\"feature-title\">Saldo</h4>
                                <div class=\"stat-number ";
        // line 43
        if (((isset($context["netBalance"]) || array_key_exists("netBalance", $context) ? $context["netBalance"] : (function () { throw new RuntimeError('Variable "netBalance" does not exist.', 43, $this->source); })()) >= 0)) {
            yield "text-success";
        } else {
            yield "text-danger";
        }
        yield "\">
                                    €";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["netBalance"]) || array_key_exists("netBalance", $context) ? $context["netBalance"] : (function () { throw new RuntimeError('Variable "netBalance" does not exist.', 44, $this->source); })()), 2, ",", "."), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h2 class=\"section-title\">Alle Transacties (";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 56, $this->source); })())), "html", null, true);
        yield ")</h2>
                        <button class=\"btn btn-auth\" data-bs-toggle=\"modal\" data-bs-target=\"#addTransactionModal\">
                            <i class=\"fas fa-plus me-2\"></i>Nieuwe Transactie
                        </button>
                    </div>
                </div>
            </div>

            <!-- Transactions List -->
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        ";
        // line 68
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 68, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                            <div class=\"table-responsive\">
                                <table class=\"table table-dark table-hover mb-0\">
                                    <thead>
                                    <tr>
                                        <th>Datum</th>
                                        <th>Categorie</th>
                                        <th>Beschrijving</th>
                                        <th class=\"text-center\">Type</th>
                                        <th class=\"text-end\">Bedrag</th>
                                        <th class=\"text-center\">Acties</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 82, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 83
                yield "                                        <tr>
                                            <td class=\"fw-medium\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 84), "d-m-Y"), "html", null, true);
                yield "</td>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"category-color me-2\" style=\"width: 12px; height: 12px; border-radius: 50%; background-color: ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["#16F98A", "#134338", "#FFCF44", "#FF6B6B", "#4ECDC4", "#95E1D3", "#FCE38A"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 87)), "html", null, true);
                yield "\"></div>
                                                    ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "category", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
                yield "
                                                </div>
                                            </td>
                                            <td class=\"text-muted\">
                                                ";
                // line 92
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 93
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 93), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 95
                    yield "                                                    <span class=\"fst-italic\">Geen beschrijving</span>
                                                ";
                }
                // line 97
                yield "                                            </td>
                                            <td class=\"text-center\">
                                                    <span class=\"badge ";
                // line 99
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 99) >= 0)) {
                    yield "bg-success";
                } else {
                    yield "bg-danger";
                }
                yield "\">
                                                        ";
                // line 100
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 100) >= 0)) ? ("Inkomen") : ("Uitgave"));
                yield "
                                                    </span>
                                            </td>
                                            <td class=\"text-end ";
                // line 103
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 103) >= 0)) {
                    yield "text-success";
                } else {
                    yield "text-danger";
                }
                yield " fw-bold\">
                                                ";
                // line 104
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 104) >= 0)) {
                    // line 105
                    yield "                                                    +€";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 105), 2, ",", "."), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 107
                    yield "                                                    -€";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((-CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 107)), 2, ",", "."), "html", null, true);
                    yield "
                                                ";
                }
                // line 109
                yield "                                            </td>
                                            <td class=\"text-center\">
                                                <form method=\"POST\" action=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transactions_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\"
                                                      class=\"d-inline\"
                                                      onsubmit=\"return confirm('Weet je zeker dat je deze transactie wilt verwijderen?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 114))), "html", null, true);
                yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                                        <i class=\"fas fa-trash\"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class=\"text-center\">
                                                <form method=\"POST\" action=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transactions_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 121)]), "html", null, true);
                yield "\"
                                                      class=\"d-inline\"
                                                      onsubmit=\"return confirm('Je gaat nu je transactie bijwerken weet je zeker dat je dit wil doen?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("update" . CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 124))), "html", null, true);
                yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                                        <i class=\"fa-solid fa-pen\"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
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
            unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            yield "                                    </tbody>
                                </table>
                            </div>
                        ";
        } else {
            // line 136
            yield "                            <div class=\"text-center text-muted py-5\">
                                <i class=\"fas fa-receipt fa-3x mb-3\"></i>
                                <h5 class=\"mb-2\">Geen transacties gevonden</h5>
                                <p class=\"mb-0\">Voeg je eerste transactie toe om te beginnen!</p>
                            </div>
                        ";
        }
        // line 142
        yield "                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Transaction Modal -->
    <div class=\"modal fade\" id=\"addTransactionModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content auth-container\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title auth-title\">Nieuwe Transactie</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <form method=\"POST\" action=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transactions_new");
        yield "\">
                    <div class=\"modal-body\">
                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Type</label>
                            <select class=\"form-control\" name=\"type\" required>
                                <option value=\"income\">Inkomen</option>
                                <option value=\"expense\">Uitgave</option>
                            </select>
                        </div>

                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Bedrag</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">€</span>
                                <input type=\"number\" class=\"form-control\" name=\"amount\" step=\"0.01\" placeholder=\"0.00\" required>
                            </div>
                        </div>

                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Categorie</label>
                            <select class=\"form-control\" name=\"category\" required>
                                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 178
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 178), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 178), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "                            </select>
                        </div>

                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Datum</label>
                            <input type=\"date\" class=\"form-control\" name=\"date\" value=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\" required>
                        </div>

                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Beschrijving (optioneel)</label>
                            <input type=\"text\" class=\"form-control\" name=\"description\" placeholder=\"Voeg een beschrijving toe...\">
                        </div>
                    </div>
                    <div class=\"modal-footer border-0\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuleren</button>
                        <button type=\"submit\" class=\"btn btn-auth\">Opslaan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
        return "transactions/index.html.twig";
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
        return array (  411 => 185,  404 => 180,  393 => 178,  389 => 177,  365 => 156,  349 => 142,  341 => 136,  335 => 132,  313 => 124,  307 => 121,  297 => 114,  291 => 111,  287 => 109,  281 => 107,  275 => 105,  273 => 104,  265 => 103,  259 => 100,  251 => 99,  247 => 97,  243 => 95,  237 => 93,  235 => 92,  228 => 88,  224 => 87,  218 => 84,  215 => 83,  198 => 82,  183 => 69,  181 => 68,  166 => 56,  151 => 44,  143 => 43,  134 => 37,  125 => 31,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/transactions/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Transacties - SoloLevelers{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <section class=\"hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h1 class=\"hero-title\">Transacties</h1>
                    <p class=\"hero-subtitle\">Alle inkomsten en uitgaven</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class=\"mission-section\">
        <div class=\"container\">
            <!-- Quick Stats -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"feature-card text-center\">
                                <h4 class=\"feature-title\">Totaal Inkomsten</h4>
                                <div class=\"stat-number text-success\">€{{ totalIncome|number_format(2, ',', '.') }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"feature-card text-center\">
                                <h4 class=\"feature-title\">Totaal Uitgaven</h4>
                                <div class=\"stat-number text-danger\">€{{ totalExpenses|number_format(2, ',', '.') }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"feature-card text-center\">
                                <h4 class=\"feature-title\">Saldo</h4>
                                <div class=\"stat-number {% if netBalance >= 0 %}text-success{% else %}text-danger{% endif %}\">
                                    €{{ netBalance|number_format(2, ',', '.') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h2 class=\"section-title\">Alle Transacties ({{ transactions|length }})</h2>
                        <button class=\"btn btn-auth\" data-bs-toggle=\"modal\" data-bs-target=\"#addTransactionModal\">
                            <i class=\"fas fa-plus me-2\"></i>Nieuwe Transactie
                        </button>
                    </div>
                </div>
            </div>

            <!-- Transactions List -->
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        {% if transactions is not empty %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-dark table-hover mb-0\">
                                    <thead>
                                    <tr>
                                        <th>Datum</th>
                                        <th>Categorie</th>
                                        <th>Beschrijving</th>
                                        <th class=\"text-center\">Type</th>
                                        <th class=\"text-end\">Bedrag</th>
                                        <th class=\"text-center\">Acties</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for transaction in transactions %}
                                        <tr>
                                            <td class=\"fw-medium\">{{ transaction.date|date('d-m-Y') }}</td>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"category-color me-2\" style=\"width: 12px; height: 12px; border-radius: 50%; background-color: {{ cycle(['#16F98A', '#134338', '#FFCF44', '#FF6B6B', '#4ECDC4', '#95E1D3', '#FCE38A'], loop.index0) }}\"></div>
                                                    {{ transaction.category.name }}
                                                </div>
                                            </td>
                                            <td class=\"text-muted\">
                                                {% if transaction.description %}
                                                    {{ transaction.description }}
                                                {% else %}
                                                    <span class=\"fst-italic\">Geen beschrijving</span>
                                                {% endif %}
                                            </td>
                                            <td class=\"text-center\">
                                                    <span class=\"badge {% if transaction.amount >= 0 %}bg-success{% else %}bg-danger{% endif %}\">
                                                        {{ transaction.amount >= 0 ? 'Inkomen' : 'Uitgave' }}
                                                    </span>
                                            </td>
                                            <td class=\"text-end {% if transaction.amount >= 0 %}text-success{% else %}text-danger{% endif %} fw-bold\">
                                                {% if transaction.amount >= 0 %}
                                                    +€{{ transaction.amount|number_format(2, ',', '.') }}
                                                {% else %}
                                                    -€{{ (-transaction.amount)|number_format(2, ',', '.') }}
                                                {% endif %}
                                            </td>
                                            <td class=\"text-center\">
                                                <form method=\"POST\" action=\"{{ path('app_transactions_delete', {'id': transaction.id}) }}\"
                                                      class=\"d-inline\"
                                                      onsubmit=\"return confirm('Weet je zeker dat je deze transactie wilt verwijderen?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ transaction.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                                        <i class=\"fas fa-trash\"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class=\"text-center\">
                                                <form method=\"POST\" action=\"{{ path('app_transactions_update', {'id': transaction.id}) }}\"
                                                      class=\"d-inline\"
                                                      onsubmit=\"return confirm('Je gaat nu je transactie bijwerken weet je zeker dat je dit wil doen?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('update' ~ transaction.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                                        <i class=\"fa-solid fa-pen\"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        {% else %}
                            <div class=\"text-center text-muted py-5\">
                                <i class=\"fas fa-receipt fa-3x mb-3\"></i>
                                <h5 class=\"mb-2\">Geen transacties gevonden</h5>
                                <p class=\"mb-0\">Voeg je eerste transactie toe om te beginnen!</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Transaction Modal -->
    <div class=\"modal fade\" id=\"addTransactionModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content auth-container\">
                <div class=\"modal-header border-0\">
                    <h5 class=\"modal-title auth-title\">Nieuwe Transactie</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <form method=\"POST\" action=\"{{ path('app_transactions_new') }}\">
                    <div class=\"modal-body\">
                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Type</label>
                            <select class=\"form-control\" name=\"type\" required>
                                <option value=\"income\">Inkomen</option>
                                <option value=\"expense\">Uitgave</option>
                            </select>
                        </div>

                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Bedrag</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">€</span>
                                <input type=\"number\" class=\"form-control\" name=\"amount\" step=\"0.01\" placeholder=\"0.00\" required>
                            </div>
                        </div>

                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Categorie</label>
                            <select class=\"form-control\" name=\"category\" required>
                                {% for category in categories %}
                                    <option value=\"{{ category.id }}\">{{ category.name }}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Datum</label>
                            <input type=\"date\" class=\"form-control\" name=\"date\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\" required>
                        </div>

                        <div class=\"form-group mb-3\">
                            <label class=\"form-label\">Beschrijving (optioneel)</label>
                            <input type=\"text\" class=\"form-control\" name=\"description\" placeholder=\"Voeg een beschrijving toe...\">
                        </div>
                    </div>
                    <div class=\"modal-footer border-0\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuleren</button>
                        <button type=\"submit\" class=\"btn btn-auth\">Opslaan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "transactions/index.html.twig", "/Users/krishnabihari/Documents/GitHub/Budget-Buddy/templates/transactions/index.html.twig");
    }
}
