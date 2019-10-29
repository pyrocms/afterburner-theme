(function (window, document) {

    document.addEventListener('click', function (event) {
        if (event.target.matches('.tabs ul li a')) {

            let wrapper = event.target.closest('.tabs');

            let tabs = Array.prototype.slice.call(
                wrapper.querySelectorAll('ul:first-of-type li')
            );

            tabs.forEach(function (tab, thing) {
                console.log(thing);
                tab.classlist.remove('active');
            });

            event.target.closest('li').classlist.add('active');
        }
    });

})(window, document);
