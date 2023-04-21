<!doctype html>
<html lang="tr" class="h-100">
  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175557655-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-175557655-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Açık Eğitim Kaynakları (AEK) için Üst Veri Modeli Tasarımı">
    <meta name="author" content="Orçun Madran">
    <title>Açık Ders Projesi · Üstveri</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- JQuery UI core CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/sticky-footer-navbar.css' %}">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- ROM JavaScript -->
    <script src="js/mainmenu.js"></script>
    <script src="js/lowerCase.js"></script>
    <script src="js/formatList.js"></script>
    <script src="js/subjectList.js"></script>
    <script src="js/jsGroup.js"></script>

    <script>
     //Bootstrap popper function
     //URL: https://getbootstrap.com/docs/4.0/components/popovers/
       $(function () {
        $('[data-toggle="popover"]').popover()
       })
    </script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Custom js for this template -->
    <script src="js/mainmenu.js"></script>

  </head>
  <body class="d-flex flex-column h-100">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="https://acikders.net">ADN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <script>for (index in mainMenu) {
            document.write('<li className="nav-item"><a class="nav-link" target='+mainMenu[index][2]+' href='+mainMenu[index][1]+'>'+mainMenu[index][0]+'</a></li>');
          }</script>
        </ul>
          <script>document.write(searchForm)</script>
      </div>
  </nav>
</header>
<?php echo($_POST['title'])?>
<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">AEK Üst Veri</h1>
    <p class="lead">Girmiş olduğunuz üst verilere göre oluşturulmuş olan Açık Eğitim Kaynağı üst verisi aşağıda yer almaktadır.<p>
    <p>AEK Zengin Metin Görünümü:</p>
    <p class="p-3 mb-2 bg-light text-dark"><a href="<?php echo($_POST['identifier'])?>" target="_blank"><?php echo($_POST['title'])?></a> açık eğitim kaynağı, <?php echo($_POST['creator'])?> tarafından <a href="<?php echo($_POST['ccLicenseURL'])?>" target="_blank"><?php echo($_POST['license'])?></a> ile lisanslanmıştır.</p>
    <form>
      <div class="form-group">
        <label for="metaHTML">AEK Üst Veri Seti:</label>
        <textarea class="form-control" id="metaHTML" name="metaHTML" rows="5">
        <!-- Açık Ders NET Açık Eğitim Kaynağı (AEK) Üst Verisi -->
        <p xmlns:dct="http://purl.org/dc/terms/" xmlns:dcx="http://purl.org/dcx/lrmi-terms/" xmlns:cc="http://creativecommons.org/ns">
            <a rel="dct:identifier" property="dct:title" href="<?php echo($_POST['identifier'])?>"><?php echo($_POST['title'])?></a> açık eğitim kaynağı, <span property="dct:creator"><?php echo($_POST['creator'])?></span> tarafından <a rel="cc:license" href="<?php echo($_POST['ccLicenseURL'])?>" target="_blank"><?php echo($_POST['license'])?></a> ile lisanslanmıştır. <?php echo($_POST['ccLicenseIcon'])?>
        </p>
        <ul xmlns:dct="http://purl.org/dc/terms/" xmlns:dcx="http://purl.org/dcx/lrmi-terms/" xmlns:cc="http://creativecommons.org/ns" hidden>
            <li property="dct:title" content="<?php echo($_POST['title'])?>"><b>Başlık:</b> <?php echo($_POST['title'])?></li>
            <li property="dct:subject" content="<?php echo($_POST['subject'])?>"><b>Konu:</b> <?php echo($_POST['subject'])?></li>
            <li property="dct:description" content="<?php echo($_POST['description'])?>"><b>Tanım:</b> <?php echo($_POST['description'])?></li>
            <li property="dct:type" content="<?php echo($_POST['type'])?>"><b>Tip:</b> <?php echo($_POST['type'])?></li>
            <li property="dct:creator" content="<?php echo($_POST['creator'])?>"><b>Yaratıcı:</b> <?php echo($_POST['creator'])?></li>
            <li property="dct:publisher" content="<?php echo($_POST['publisher'])?>"><b>Yayıncı:</b> <?php echo($_POST['publisher'])?></li>
            <li property="dct:contributor" content="<?php echo($_POST['contributor'])?>"><b>Katkı Sağlayan:</b> <?php echo($_POST['contributor'])?></li>
            <li property="cc:license" content="<?php echo($_POST['license'])?>"><b>Lisans:</b> <?php echo($_POST['license'])?></li>
            <li property="dct:date" content="<?php echo($_POST['date'])?>"><b>Tarih:</b> <?php echo($_POST['date'])?></li>
            <li property="dct:language" content="<?php echo($_POST['language'])?>"><b>Dil:</b> <?php echo($_POST['language'])?></li>
            <li property="dct:format" content="<?php echo($_POST['format'])?>"><b>Biçim:</b> <?php echo($_POST['format'])?></li>
            <li property="dct:identifier" content="<?php echo($_POST['identifier'])?>"><b>Tanımlayıcı:</b> <?php echo($_POST['identifier'])?></li>
            <li property="dcx:educationalAudience" content="<?php echo($_POST['educationalAudience'])?>"><b>Hedef Kitle:</b> <?php echo($_POST['educationalAudience'])?></li>
            <li property="dcx:educationalUse" content="<?php echo($_POST['educationalUse'])?>"><b>Eğitsel Kullanım:</b> <?php echo($_POST['educationalUse'])?></li>
            <li property="dcx:accessibilityFeature" content="<?php echo($_POST['accessibilityFeature'])?>"><b>Erişilebilirlik Özelliği:</b> <?php echo($_POST['accessibilityFeature'])?></li>
            <li property="dcx:timeRequired" content="<?php echo($_POST['timeRequired'])?>"><b>İhtiyaç Duyulan Süre:</b> <?php echo($_POST['timeRequired'])?></li>
        </ul>
        <!-- AEK üst veri seti ile ilgili detaylı bilgi için: acikders.net -->
        </textarea>
        <small id="descriptionHelp" class="form-text text-muted">Hazırlanmış olan üst veriyi kopyalayıp kendi sayfanıza yerleştirebilirsiniz.</small>
      </div>
    </form>
    <p>
      <button class="btn btn-danger" onclick="goBack()">Veri giriş ekranına geri dön!</button>
      <button class="btn btn-primary" onclick="copyHTML()">HTML kodunu kopyala!</button>
    </p>
    <script>
      function goBack() {
        window.history.back();
      }
      function copyHTML() {
        /* Get the text field */
        var copyText = document.getElementById("metaHTML");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("HTML Kopyalandı");
        //alert("Copied the text: " + copyText.value);
      }
    </script>
    <hr>
    <p class="lead">Girmiş olduğunuz üst verilerin listesi:</p>
    <div class="table-responsive-sm">
      <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Üst Veri</th>
          <th scope="col">Değer</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Başlık</td>
          <td><?php echo($_POST['title'])?></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Konu</td>
          <td><?php echo($_POST['subject'])?></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Tanım</td>
          <td><?php echo($_POST['description'])?></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Tip</td>
          <td><?php echo($_POST['type'])?></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Yaratıcı</td>
          <td><?php echo($_POST['creator'])?></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Yayıncı</td>
          <td><?php echo($_POST['publisher'])?></td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Katkı Sağlayan</td>
          <td><?php echo($_POST['contributor'])?></td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Lisans</td>
          <td><?php echo($_POST['license'])?></td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Tarih</td>
          <td><?php echo($_POST['date'])?></td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Dil</td>
          <td><?php echo($_POST['language'])?></td>
        </tr>
        <tr>
          <th scope="row">11</th>
          <td>Format</td>
          <td><?php echo($_POST['format'])?></td>
        </tr>
        <tr>
          <th scope="row">12</th>
          <td>Tanımlayıcı</td>
          <td><?php echo($_POST['identifier'])?></td>
        </tr>
        <tr>
          <th scope="row">13</th>
          <td>Hedef Kitle</td>
          <td><?php echo($_POST['educationalAudience'])?></td>
        </tr>
        <tr>
          <th scope="row">14</th>
          <td>Eğitsel Kullanım</td>
          <td><?php echo($_POST['educationalUse'])?></td>
        </tr>
        <tr>
          <th scope="row">15</th>
          <td>Erişilebilirlik Özelliği</td>
          <td><?php echo($_POST['accessibilityFeature'])?></td>
        </tr>
        <tr>
          <th scope="row">16</th>
          <td>İhtiyaç Duyulan Süre</td>
          <td><?php echo($_POST['timeRequired'])?></td>
        </tr>
        </tbody>
      </table>
  </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">
      <script>document.write(footer)</script>
    </span>
  </div>
</footer>
  </body>
</html>
