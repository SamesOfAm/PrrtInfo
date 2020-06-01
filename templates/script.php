<script>
    jQuery('.to-top-button').click(function(){
        jQuery('html, body').animate({scrollTop:'0px'},800);
        return !1;
    });

    if(document.querySelector('.slider-prev') !== null) {
        document.querySelector('.slider-prev').innerHTML = '<img src="files/assets/layout/slider-arrow-left.svg">';
        document.querySelector('.slider-next').innerHTML = '<img src="files/assets/layout/slider-arrow-right.svg">';
    }


    let fontsize = 16;
    function fs(para){
        const articles = document.getElementsByClassName('mod_article');
        switch (para){
            case "kleiner":
                fontsize -= 1;
                break;
            case "normal":
                fontsize = 16;
                break;
            case "groesser":
                fontsize += 1;
                break;
        }
        for(let i = 0; i < articles.length; i++) {
            articles[i].style.fontSize = fontsize +"px";
        }
    }
</script>