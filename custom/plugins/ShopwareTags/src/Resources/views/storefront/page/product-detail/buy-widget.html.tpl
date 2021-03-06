{% sw_extends '@Storefront/storefront/page/product-detail/buy-widget.tpl' %}

{% block page_product_detail_ordernumber_container %}
    {{ parent() }}

    {% block page_product_detail_tags %}
        {% if page.extensions.tags|length %}
            <ul class="product-tags list-unstyled list-inline">
                {% for tag in page.extensions.tags %}
                    <li><span class="badge badge-primary">{{ tag.name }}</span></li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endblock %}

{% endblock %}
