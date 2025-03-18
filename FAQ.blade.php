<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/FAQstyle.css">
    <title>FAQ</title>
</head>

<body>

    <!--Header-->

    <header>
        <img src="" alt="">
        <a class="main" href="./index.html">D-Tour</a>
        <a href="./about.html">About Us</a>
        <a href="./itineraries.html">Itineraries</a>
        <a href="./bookit.html">Book It</a>
        <a href="./FAQ.html">FAQ</a>
    </header>

    <!--slide-->

    <img class="main-img" src="./image/FAQ.jpg" alt="">
    <h1 class="main-text">FAQ</h1>

    <!--FAQ-->

    <div class="question">
        <div class="question-left">
            <h1>FAQ</h1>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">What are your most popular tour packages? <span>▼</span></button>
                <div class="faq-answer">Our most popular tours include Uzbekistan Tour, Uzbekistan and Kyrgyzstan Tour,
                    and Day Tour. <br>Each package offers unique experiences, from cultural sightseeing to adventure
                    activities.</div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do you offer customized tours? <span>▼</span></button>
                <div class="faq-answer">Yes! We can tailor tours to fit your preferences, including destinations,
                    activities, and accommodation types.</div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What is included in Uzbekistan tour price? <span>▼</span></button>
                <div class="faq-answer">Our tour prices generally include accommodation, transportation, guided tours,
                    meals (as per the itinerary), <br>and entrance fees. Some exclusions may apply, such as personal
                    expenses and optional activities.</div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How do I book a tour with you? <span>▼</span></button>
                <div class="faq-answer">You can book a tour through our website(<a href="/index.html">d-tour.uz</a>), by
                    phone(+998 91 607 44 40), or by visiting our office. <br>A deposit may be required to secure your
                    spot.</div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do you provide transportation during the tour? <span>▼</span></button>
                <div class="faq-answer">Yes, all our tours include comfortable transportation, whether by bus, private
                    car, or domestic flights, depending <br>on the itinerary.</div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do I need a visa for the tour destination? <span>▼</span></button>
                <div class="faq-answer">It depends on your nationality and the destination. We can assist you with visa
                    information and requirements.</div>
            </div>
        </div>
    </div>

    <!--Contact Us-->

    <div class="map">
        <h1>Location Of D-Tour</h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d755.2596537148512!2d72.33816196966025!3d40.7831652136786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDQ2JzU5LjQiTiA3MsKwMjAnMTkuNyJF!5e0!3m2!1sru!2s!4v1740687865800!5m2!1sru!2s"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <footer>
        <div class="contact">
            <img src="../image/photo_2025-02-25_11-38-57.jpg" alt="">
            <table>
                <tr>
                    <th>Navigation</th>
                    <th>Social</th>
                    <th>Contact Us</th>
                </tr>
                <tr>
                    <td><a href="./index.html">Home</a></td>
                    <td><a href="https://www.instagram.com/dtour.uzbekistan?igsh=MXd3dWZwdzE5Y2Nrbw==">Instagram</a>
                    </td>
                    <td><a href="">info@d-tour.uz</a></td>
                </tr>
                <tr>
                    <td><a href="./about.html">About Us</a></td>
                    <td><a href="https://t.me/dtour_uz">Telegram</a></td>
                    <td><a href="">+998 91 607 44 40</a></td>
                </tr>
                <tr>
                    <td><a href="./itineraries.html">Itineraries</a></td>
                </tr>
                <tr>
                    <td><a href="./bookit.html">Book It</a></td>
                </tr>
                <tr>
                    <td><a href="./FAQ.html">FAQ</a></td>
                </tr>
            </table>
        </div>
    </footer>
    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', function () {
                const answer = this.nextElementSibling;
                const isOpen = answer.style.display === 'block';
                document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
                document.querySelectorAll('.faq-question span').forEach(span => span.textContent = '▼');

                if (!isOpen) {
                    answer.style.display = 'block';
                    this.querySelector('span').textContent = '▲';
                }
            });
        });
    </script>
</body>

</html>