<!doctype html>
<html lang="en">
    <?php
    $path = '../';
    include_once '../res/head.php';
    ?>

  <body>

    <?php
    include_once '../res/nav.php'
    ?>
  
    <div class="container subpage">
      <main role="main">

       <div class="row small-nav">
            <div class="col-md-6">
                    <a href="../"><< Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1>Programming school webpage</h1>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <p>
                    Fundacja COD:ME jest szkołą programowania - prowadzi dłuższe kursy komercyjne i krótkie warsztaty / event niekomercyjne. Dotychczasowa strona internetowa była poświęcona jedynie działalności komercyjnej Fundacji, a więc służyła sprzedaży stacjonarnych kursów programowania.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Gathering data</h2>
            </div>
            <div class="col-md-8 col-sm-12">
                <h4>Hotjar and Google Analytics</h4>
                <p>
                    Analiza danych dotyczących przepływu użytkowników, nagrań konkretnych przypadków i widoczność strony w wyszukiwarkach pokazały mi pewne powtarzające się zachowania i problemy. Jedne prowadziły bezpośrednio do porzucenia strony, inne sprawiały, że użytkownicy gubili się, na przykład w tym, co jest elementem interaktywnym.
                </p>
                <p>
                    Architektura informacji na stronie zakładała, że po zamknięciu rejestracji na kurs cała podstrona zostaje przerzucona do listy “nieaktualne”, a nowa edycja będzie jej kopią i znajdzie się na liście “aktualnych”. Powodowało to 3 zasadnicze problemy: 
                    <ul>
                        <li>
                            wyszukiwarki indeksowały zarówno aktualne, jak i nieaktualne “podstrony” kursów. 
                        </li>
                        <li>
                            Użytkownicy trafiali często na tę “nieaktualną stronę” prosto z wyszukiwarki czy zapisanego w social media / na innym portalu linka i porzucali stronę 
                        </li>
                        <li>
                            Przeglądając listę kursów, niejednokrotnie nie zwracali uwagi na to, po której stronie listy znajduje się klikany odnośnik - czy jest to kurs aktualny, czy też nie. 
                        </li>
                    </ul>
                </p>
                <p>
                    Do tego dochodziły inne problemy, jak nieodróżnianie elementów interaktywnych przez użytkowników i klikanie w dekoracyjne grafiki. 
                </p>

                <h4>Workshop with the team</h4>
                <p>
                    Wsłuchując się w głosy zespołu wprowadzającego nowe produkty i treści na stronę internetową oraz customer service, zorganizowałam warsztaty, podczas których wspólnie mapowaliśmy najważniejsze ich zdanem problemy. Powstała lista zagadnień, które sprawiają, że utrzymanie aktualności strony jest trudne i czasochłonne: 
                    <ul>
                        <li>
                            Konieczność tworzenia kopii istniejącej strony, 
                        </li>
                        <li>
                            Wprowadzanie tych samych danych (data, miejsce) w wielu miejscach na stronie, 
                        </li>
                        <li>
                            Każdorazowe edytowanie odnośników do strony aktualnej i archiwalnej lub wymyślanie nowych.
                        </li>
                    </ul>
                </p>
                <p>
                    Dzięki liście najczęściej zadawanych pytań przez klientów kontaktujących się z customer service, stworzyliśmy listę kolejnych problemów, z którymi borykali się użytkownicy i potwierdziłam to, co pokazały dane z Google Analytics. Użytkownicy mają problem z dotarciem do aktualnych informacji. 
                </p>
            </div>
            <div class="col-md-8 col-sm-12">
                <h4>Interviews with clients</h4>
                <p>
                    CODE:ME to mała firma, w której miałam szczęście być od samego początku, dzięki czemu miałam bardzo łatwy i bezpośredni dostęp do klientów. Przeprowadziłam rozmowy (mniej lub bardziej formalne, jednak skupione) z kilkorgiem osób z trzech grup klientów: 
                    <ul>
                        <li>
                            stałymi, a więc tymi, którzy byli z nami od lat i kupowali u nas wielokrotnie
                        </li>
                        <li>
                            Aktualnymi, dla których był to pierwszy kontakt z firmą, a ich wspomnienia zakupowe świeże 
                        </li>
                        <li>
                            potencjalnymi, czyli tym, którzy dzięki social mediom pojawili się na eventach niekomercyjnych z myślą zakupu kursu - tu udało mi się również obserwować proces wyszukiwania informacji na stronie “na żywo” i “w środowisku >>niemal<< naturalnym”.
                        </li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Problem solving</h2>
            </div>
            <div class="col-md-8 col-sm-12">
                
            </div>
        </div>

        <div class="row small-nav">
            <div class="col-md-6">
                    <a href="../"><< Back</a>
            </div>
            <div class="col-md-6 text-right">
                <a href="../web-app-prototype">Next: Web app for courses enrolment >></a>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12">
            <div class="divider"></div>
        </div>
        </div>
        
        <?php
        include_once '../res/thanks.php';
        ?>

    </main>
    <?php
      include_once '../res/footer.php';
      ?>
 </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery.slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.min.js"></script></body>
</html>
