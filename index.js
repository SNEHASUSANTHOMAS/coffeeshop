$(document).ready(function() {
    let placeOrder = {
        init: function() {
            this.cacheDom();
            this.bindEvents();
        },
        cacheDom: function() {
            this.$navbarNav = $(".navbar-nav");
            this.$navbarToggler = $(".navbar-toggler");
            this.$menuList = $("#menuList");
            this.$menuIcon = $(".menu-icon");
            this.$menuListLink = $("#menuList a");
            this.$placeOrderLink = $("#place-order-link");
            this.$name = $("#name");
            this.$drink = $("#drink");
            this.$qty = $("#qty");
        },
        bindEvents: function() {
            this.$placeOrderLink.click(() => this.handleOrder());
            this.$menuIcon.click(() => this.$menuList.slideToggle());
            this.$menuListLink.click(this.smoothScroll);
        },
        handleOrder: function() {
            const nameVal = this.$name.val();
            console.log("Hello World");
            console.log("Order Name:", nameVal);
            console.log("Superman");
            const drinkVal = this.$drink.val();
            const qty = this.$qty.val();

            if (!nameVal || !drinkVal || !qty) {
                alert("Please fill in all fields.");
            } else {
                const url = `order-details.html?name=${encodeURIComponent(nameVal)}&drink=${encodeURIComponent(drinkVal)}&qty=${encodeURIComponent(qty)}`;
                window.location.href = url;
            }
        },
        smoothScroll: function(event) {
            if (this.hash !== '') {
                event.preventDefault();
                const hash = this.hash;
                const targetOffset = $(hash).offset().top + 200;

                $('html, body').animate({
                    scrollTop: targetOffset
                }, 300, () => {
                    window.location.hash = hash;
                });
            }
        }
    };

    placeOrder.init();
});
