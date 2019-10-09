{{-- <section id="messages" class="fixed bottom-0 right-0">

    {% if message_exists('success') %}
        {% for message in message_pull('success') %}
            <toaster :open="true" type="success" {#class="p-6 w-72 bg-green-500 text-green-100 color-white rounded mr-3 mb-3"#} message="{{ trans(message)|markdown }}"></toaster>
        {% endfor %}
    {% endif %}

    {% if message_exists('info') %}
        {% for message in message_pull('info') %}
            <toaster :open="true" timeout="0" type="info" {#class="p-6 w-72 bg-info-500 text-info-100 color-white rounded mr-3 mb-3"#} message="{{ trans(message)|markdown }}"></toaster>
        {% endfor %}
    {% endif %}

    {% if message_exists('warning') %}
        {% for message in message_pull('warning') %}
            <toaster :open="true" timeout="0" type="warning" {#class="p-6 w-72 bg-orange-500 text-orange-100 color-white rounded mr-3 mb-3"#} message="{{ trans(message)|markdown }}"></toaster>
        {% endfor %}
    {% endif %}

    {% if message_exists('error') %}
        {% for message in message_pull('error') %}
            <toaster :open="true" timeout="0" type="error" {#class="p-6 w-72 bg-orange-500 text-orange-100 color-white rounded mr-3 mb-3"#} message="{{ trans(message)|markdown }}"></toaster>
        {% endfor %}
    {% endif %}

</section>
--}}