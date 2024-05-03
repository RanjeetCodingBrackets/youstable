<html>
    <head>
        <style>
            .smb_wrapper {
    /*background-color: #091E42;*/
    padding: 0 0px 120px 245px;
}


.lettersFixed .smb_detail_inner {
    position: fixed;
    top: 0;
}

.smb_detail_inner {
    display: flex;
    height: 100%;
    position: relative;
}

.smb_detail_outer {
    height: 2500px;
}

.lettersFixedAfter .smb_detail_inner {
    align-items: flex-end;
}

.smb_detail {
    height: 100vh;
    display: flex;
    align-items: center;
    margin-bottom: 100px;

}

.smb_detail p {
    color: #000;
    font-size: 52px;
    font-weight: 700;
    line-height: 130%;
    /* 67.6px */
    letter-spacing: -1.56px;
    max-width: 788px;
    margin: 0;
}

.smb_number {
    color: #FFF2F2;
    font-size: 80px;
    font-weight: 700;
    line-height: 96px;
    letter-spacing: -2.4px;
    margin: 0;
}

.smb_emoji p {
    color: #F4F5F7;
    font-size: 16.987px;
    font-weight: 400;
    line-height: 120%;
    /* 20.385px */
    letter-spacing: -0.51px;
    max-width: 120px;
    margin-left: 13px;
    margin-bottom: 0px;
}

.smb_box_wrapper {
    display: flex;
    align-items: center;
    justify-content: start;
    max-width: 1200px;
}

.smb_emoji {
    display: flex;
    align-items: center;
    justify-content: start;
}

.smb_box {
    position: relative;
}

.smb_box_right::after {
    content: '';
    position: absolute;
    background-color: #FFF;
    width: 1px;
    top: 0;
    bottom: 0;
    right: 0;
}

.smb_box:first-child {
    padding-left: 0px;
    padding-right: 80px;
}

.smb_box:nth-child(2) {
    padding: 0 100px;
}

.smb_box:last-child {
    padding-left: 100px;
}

.smb_detail p span {
    opacity: 0.4;
    transition: all 0.4s cubic-bezier(0, 0, 1, 1);
}

 



.smb_wrapper .animatedText span {
    color: #193D7A;
    font-size: 52px;
    font-weight: 700;
    letter-spacing: -1.56px;
}

.smb_wrapper .smb_box_wrapper.willAnimate .smb_box {
    opacity: 0;
}

.smb_wrapper .smb_box_wrapper.animateStart .smb_box {
    animation: fadeIn 0.8s linear both;
    opacity: 1;
}

.smb_wrapper .smb_box_wrapper.animateStart .smb_box:nth-child(2) {
    animation-delay: 1s;
}

.smb_wrapper .smb_box_wrapper.animateStart .smb_box:nth-child(3) {
    animation-delay: 1.6s;
}

.owl-carousel {
    display: unset;
}




.smb_wrapper {
            /*background-color: #091E42;*/
            padding: 0 0px 120px 245px;
        }

        .smb_detail_inner {
            position: fixed;
            top: 0;
        }

        .smb_detail_inner.sticky {
            position: sticky;
        }

        .smb_detail_inner.sticky .smb_detail {
            position: fixed;
        }

        .smb_detail_inner.sticky .smb_detail p.ham {
            color: red; /* Change color as needed */
            transition: color 1s ease; 
        }

        .smb_detail_inner.sticky .smb_detail p.ham:not(:last-child) {
            border-bottom: 2px solid red; /* Optional: Add a border between words */
        }

        .smb_detail {
            display: flex;
            align-items: center;
            margin-bottom: 100px;
        }

        .smb_detail p {
            color: #000;
            font-size: 52px;
            font-weight: 700;
            line-height: 130%;
            letter-spacing: -1.56px;
            max-width: 788px;
            margin: 0;
        }

        .smb_detail p span.ham {
            opacity: 1;
            color:red;
            transition: color 2s ease; /* Smooth color transition */
        }

/*smb_wrapper end*/
        </style>
    </head>
    <body>
               <div class="smb_detail_outer">
          <div class="smb_detail_inner">
            <div class="smb_detail">
              <p class="animatedText">
                <span class="letter">Experience</span>
                <span class="letter">G2’s</span>
                <span class="letter">top-rated</span>
                <span class="letter">SMB</span>
                <span class="letter">hosting</span>
                <span class="letter">provider</span>
                <span class="letter">with</span>
                <span class="letter">a 4.7-star</span>
                <span class="letter">rating,</span>
                <span class="letter">powering</span>
                <span class="letter">websites</span>
                <span class="letter">from</span>
                <span class="letter">over 200</span>
                <span class="letter">countries.</span>
              </p>
            </div>
          </div>
        </div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            let words = $(".letter");
            let wordIndex = 0;

            $(window).on("scroll", function () {
                let scrollPosition = $(window).scrollTop();
                let windowHeight = $(window).height();

                if (scrollPosition > $(".smb_detail").offset().top - windowHeight / 2) {
                    if (wordIndex < words.length) {
                        words.eq(wordIndex).addClass("ham");
                        wordIndex++;
                    }
                }

                // Revert color when scrolling up
                if (scrollPosition < $(".smb_detail").offset().top - windowHeight / 2) {
                    if (wordIndex > 0) {
                        words.eq(wordIndex - 1).removeClass("ham");
                        wordIndex--;
                    }
                }
            });
        });
    </script>
    </body>
</html>




