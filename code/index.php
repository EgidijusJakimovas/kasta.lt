<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kasta.lt</title>
    <link rel="stylesheet" href="/code/style.css" />
    <link rel="icon" href="/images/kasta.png" type="image/x-icon" />
  </head>
  <body>
    <!-- nav bar -->
    <nav>
      <ul>
        <li><a href="#product">Produktai</a></li>
        <li><a href="#services">Paslaugos</a></li>
        <li><a href="#about_us">Apie mus</a></li>
        <li><a href="#contact">Kontaktai</a></li>
      </ul>
    </nav>
    <div class="logo-container">
      <img src="/images/kasta.png" class="logo-size"/>
    </div>

    <!-- Carousel Section 1 -->
    <h1 id="product">Nuotekų valymo įrenginiai</h1>
    <div class="carousel" id="carousel1">
      <div class="slides">
        <img
          src="/images/Messenger_creation_270ed4d7-082f-4120-8b17-9349908cfcc1.jpeg"
          alt="Nuotekų valymo įrenginiai"
          class="slide" />
        <img
          src="/images/Screenshot 2024-08-14 164804(1).png"
          alt="Nuotekų valymo įrenginiai2"
          class="slide" />
      </div>
      <a class="prev" onclick="prevSlide('carousel1')">&#10094;</a>
      <a class="next" onclick="nextSlide('carousel1')">&#10095;</a>
    </div>

    <h1>Požeminės talpos</h1>
    <div class="image-container">
      <img
        src="/images/Screenshot 2024-08-14 164823(1).png"
        alt="Nuotekų valymo įrenginiai"
        class="custom-size" />
    </div>

    <!-- Carousel Section 2 -->
    <h1 id="services">Montavimas</h1>
    <div class="carousel" id="carousel2">
      <div class="slides">
        <img
          src="/images/Messenger_creation_930746d8-a7c1-4a19-8c38-e63d9c710ae2.jpeg"
          alt="Image 1"
          class="slide" />
        <img
          src="/images/Messenger_creation_caa2882c-12bd-4d7a-af89-25b062031353.jpeg"
          alt="Image 2"
          class="slide" />
        <img
          src="/images/Messenger_creation_e559f4a0-d48c-466a-b385-de03c2b6c434.jpeg"
          alt="Image 3"
          class="slide" />
      </div>
      <a class="prev" onclick="prevSlide('carousel2')">&#10094;</a>
      <a class="next" onclick="nextSlide('carousel2')">&#10095;</a>
    </div>

    <!-- footer -->
    <footer id="contact">
      <p>Įmonės kodas - 306952419</p>
      <p>Direktorius - Aivaras Kulakauskas</p>
      <p>Adresas - Smičkių k. 1, Jonavos r.</p>
      <p>Mobilus telefonas - +370 676 65671</p>
      <p>El. pašto adresas - info@kasta.lt</p>
      <br />
      <p>&copy; 2024 Kasta.lt. Visos teisės saugomos.</p>
    </footer>
    <script src="/code/script.js"></script>
  </body>
</html>
