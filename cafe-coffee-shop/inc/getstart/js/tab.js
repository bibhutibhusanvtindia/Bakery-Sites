function cafe_coffee_shop_openCity(evt, cityName) {
    var cafe_coffee_shop_i, cafe_coffee_shop_tabcontent, cafe_coffee_shop_tablinks;
    cafe_coffee_shop_tabcontent = document.getElementsByClassName("tabcontent");
    for (cafe_coffee_shop_i = 0; cafe_coffee_shop_i < cafe_coffee_shop_tabcontent.length; cafe_coffee_shop_i++) {
        cafe_coffee_shop_tabcontent[cafe_coffee_shop_i].style.display = "none";
    }
    cafe_coffee_shop_tablinks = document.getElementsByClassName("tablinks");
    for (cafe_coffee_shop_i = 0; cafe_coffee_shop_i < cafe_coffee_shop_tablinks.length; cafe_coffee_shop_i++) {
        cafe_coffee_shop_tablinks[cafe_coffee_shop_i].className = cafe_coffee_shop_tablinks[cafe_coffee_shop_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}