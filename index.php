<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>for you</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<audio id="music" loop>
  <source src="shape-heart.mp3" type="audio/mp3">
</audio>

<div class="wrapper">

  <div class="slide active">
    <p class="en">I wasn’t even planning to do this…</p>
    <p class="id">Aku bahkan nggak niat bikin ini…</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">but somehow, you still live rent free in my head.</p>
    <p class="id">tapi entah kenapa, kamu masih aja numpang di pikiranku.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">I tried to act like everything’s normal…</p>
    <p class="id">Aku udah coba sok biasa aja…</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">but some random moments still remind me of you.</p>
    <p class="id">tapi di momen random, tetap aja keinget kamu.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">like… out of everyone, why is it still you?</p>
    <p class="id">kayak… dari semua orang, kenapa masih kamu sih?</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">I guess I just miss the way we used to talk.</p>
    <p class="id">Kayaknya aku cuma kangen cara kita ngobrol dulu.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <!-- MOMENT CIYAA -->
  <div class="slide">
    <p class="en">and yeah… I still catch myself wanting to call you “ciyaa”.</p>
    <p class="id">dan ya… kadang aku masih pengen manggil kamu “ciyaa”.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">it’s funny how something that simple still feels that close.</p>
    <p class="id">lucu ya, hal sesederhana itu masih terasa sedekat itu.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">not gonna lie… I still smile sometimes remembering you.</p>
    <p class="id">jujur ya… kadang aku masih senyum sendiri kalau inget kamu.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">maybe we ended things too fast.</p>
    <p class="id">mungkin kita berhenti terlalu cepat.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">maybe we didn’t even try enough.</p>
    <p class="id">mungkin kita belum cukup berusaha.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">if there’s still a chance… I’d still choose you.</p>
    <p class="id">kalau masih ada kesempatan… aku tetap pilih kamu.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">not because I can’t find someone else…</p>
    <p class="id">bukan karena aku nggak bisa cari orang lain…</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">but because it just feels right with you.</p>
    <p class="id">tapi karena sama kamu itu… rasanya pas aja.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">so… maybe we don’t have to force anything.</p>
    <p class="id">jadi… mungkin kita nggak perlu maksa apa-apa.</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <div class="slide">
    <p class="en">but if you still feel something too…</p>
    <p class="id">tapi kalau kamu juga masih ngerasain sesuatu…</p>
    <button onclick="nextSlide()">Next</button>
  </div>

  <!-- FINAL -->
  <div class="slide">
    <p class="en">maybe we can start again… slowly.</p>
    <p class="id">mungkin kita bisa mulai lagi… pelan-pelan.</p>

    <a href="https://wa.me/6282286934215?text=hai...%20aku%20lihat%20ini.%20kita%20ngobrol%20lagi%20ya?" target="_blank">
      <button>💬 text me… if you feel it too</button>
    </a>
  </div>

</div>

<script>
let current = 0;
const slides = document.querySelectorAll(".slide");

function nextSlide() {
  document.getElementById("music").play();

  slides[current].classList.remove("active");
  current++;
  if (current < slides.length) {
    slides[current].classList.add("active");
  }
}
</script>

<!-- LOVE ANIMATION -->
<script>
function createHeart() {
  const heart = document.createElement("div");
  heart.classList.add("heart");

  heart.style.left = Math.random() * 100 + "vw";
  heart.style.animationDuration = (3 + Math.random() * 5) + "s";
  heart.style.fontSize = (12 + Math.random() * 20) + "px";

  heart.innerText = "❤";

  document.body.appendChild(heart);

  setTimeout(() => heart.remove(), 8000);
}
setInterval(createHeart, 300);
</script>

</body>
</html>