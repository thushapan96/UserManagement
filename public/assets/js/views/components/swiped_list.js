scutum.components.swiped_list = {};
scutum.components.swiped_list.init = function () {
    scutum.require(['swiped'], function () {

        var a1 = Swiped.init({
            query: '.list1 li',
            right: 400,
            onOpen: function() {
                this.destroy(true)
                alert('element removed!')
            },
            onClose: function() {
                console.log('closed')
            }
        });

        var a2 = Swiped.init({
            query: '.list2 li',
            left: 120,
            list: true,
            onOpen: function () {
                console.log(this)
            }
        });

        var a3 = Swiped.init({
            query: '.list3 li',
            list: true,
            left: 40,
            right: 80
        });

    });
};
